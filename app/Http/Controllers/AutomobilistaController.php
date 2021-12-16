<?php

namespace App\Http\Controllers;

use App\Models\automobilista;
use App\Models\multa;
use Illuminate\Http\Request;
use Carbon\Carbon as CarbonCarbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class AutomobilistaController extends Controller
{

    public function registar(Request $request)
    {
        $automobilista = new automobilista();

        $automobilista->nome = $request->input('nome');
        $automobilista->email = $request->input('email');
        $automobilista->numBI = $request->input('bi');
        $automobilista->telefone = $request->input('telefone');
        $automobilista->numCarta = $request->input('numCarta');
        $automobilista->senha = $request->input('senha');
        $automobilista->save();

        $request->session()->flash('status', 'Automobilista registado com sucesso ');
        return redirect('login');
    }

    function entrar(Request $request){

        if(db::table('automobilistas')->where('numCarta', $request->input('numCarta'))
        ->where('nome', $request->input('nome'))->exists()){

            //pegango o automobilista
            $automobilista = db::table('automobilistas')->where('numCarta', $request->input('numCarta'))->first();

            //pegando as multas do automobilista
            $multa = db::table('multas')->select()->where('automobilistaID', db::table('automobilistas')->where('numCarta', $request->input('numCarta'))->value('id'))->get();

            return view('listar', ["dataMulta" => $multa], ['automobilista' => $automobilista]);
        }else{
            echo 'desculpa';
        }
    }

    public function listar()
    {
        return view('listar');
    }


     //procsso de pagamento da factura
    public function pagar($id)
    {
        $multa = multa::find($id);
        $automobilista = automobilista::find($multa->automobilistaID);
        return view('pagarMulta', ["data" => $multa], ["data2" => $automobilista]);
    }


    public function pagar2(Request $request)
    {

        $multa = multa::find($request->id);
        $automobilista = automobilista::find($multa->automobilistaID);
        $multa->estado = 1;
        $multa->dataPagamento = Carbon::now();
        if (Carbon::now() < $multa->dataFim) {
            $multa->multaAGravada = $multa->valorApagr * 0.10;
        }
        $multa->save();

        $request->session()->flash('status', 'Multa paga com sucesso');

        $multas = db::table('multas')->select()->where('automobilistaID', $multa->automobilistaID)->get();

        return view('listar', ["dataMulta" => $multas], ['automobilista' => $automobilista]);
    }



    public function recibo($id)
    {
        $multa = multa::find($id);
        $automobilista = automobilista::find($multa->automobilistaID);
        return view('reciboMulta', ["data" => $multa], ["data2" => $automobilista]);
    }
}
