<?php

namespace App\Http\Controllers;

use App\Models\automobilista;
use App\Models\multa;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class MultaController extends Controller
{
    public function listar()
    {
        $automobilista = automobilista::all();
        return view('listarAutomobilistas', ["dados" => $automobilista]);
    }

    public function registarAuto(Request $request)
    {
        $automobilista = new automobilista();

        $automobilista->numCarta = $request->input('numCarta');
        $automobilista->nome = $request->input('nome');
        $automobilista->apelido = $request->input('apelido');
        $automobilista->sexo = $request->input('sexo');
        $automobilista->dataNascimento = $request->input('dataNascmento');
        $automobilista->nacionalidade = $request->input('pais');
        $automobilista->morada = $request->input('morada');
        $automobilista->tipoDoc = $request->input('tipodoc');
        $automobilista->numDoc = $request->input('numDoc');
        $automobilista->categoriaCarta = $request->input('tipoCarta');
        $automobilista->dataIncValidade = $request->input('inicDataVal');
        $automobilista->dataFimValidade = $request->input('fimDataVal');
        $automobilista->save();

        $request->session()->flash('status', 'Automobilista registado com sucesso ');
        return redirect('listarAutomobilistas');
    }

    public function registar1()
    {
        $dadaAutomobilista = automobilista::all();
        return view('registarMultas', ["dadaAutomobilista" => $dadaAutomobilista]);
    }

    public function registar2(Request $request)
    {
        $aleatorio = rand(474124, 895111);
        $multa = new multa();

        $id_Automobilista = $request->input('automobilistaID');

        $multa->automobilistaID =  $request->input('automobilistaID');
        $multa->numeroMulta = $id_Automobilista . $aleatorio;
        $multa->descricao = $request->input('descricao');
        $multa->artigo = $request->input('artigo');
        $multa->valorApagr = $request->input('multa');
        $multa->dataInic = Carbon::now();
        $multa->dataFim = Carbon::now()->addDays(30);

        $multa->save();
        $request->session()->flash('status', 'Multa registado com sucesso ');
        return redirect('listarMUltasAuto');


    }

    public function listarMultas()
    {
        $multa = multa::all();
        return view('ListarMUltasAuto', ["dados" => $multa]);
    }

}

