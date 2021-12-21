@extends ('layout')

@section('conteudo')

<style>
    h1 {
        color: #35c5e9;
        border-left: 5px solid crimson;
    }

    .factura {
        box-shadow: 1px 1px 1px 2px #010103;
    }

    img {
        height: 6rem;
    }

    @media print {
        body * {
            visibility: hidden;
        }

        .print-container,
        .print-container * {
            visibility: visible;
        }
    }
</style>



<h1 class="my-3">Recibo de Multa</h1>

<div class="container my-2 factura print-container">
    <h4 class="text-center">INTRAT</h4>
    <h5 class="text-center">Recibo de pagamento de Multa rodoviaria</h5>
    <div class="row">
        <div class="col-9 my-3">
            <br>
            <strong>
                <h5>Maputo</h5>
            </strong>
            Av: Eduardo Mondlane n 1352, 3 andar <br>
            tel: +258845061092 - Fax: 251263 288393 <br>
            Nuit: 4000073522
        </div>
        <div class="col-3 my-3">
            <h4>Multa numero: {{$data->numeroMulta}}</h4>
            <img src="img/logo.png" alt="">
        </div>
    </div>

    <hr class="my-3">

    <!--dados do cliente-->
    <div class="row">
        <div class="col-4">
            <table class="table table-dark">
                <tr>
                    <td> Numero da carta:</td>
                    <td>{{ $data2->numCarta }}</td>
                </tr>
                <tr>
                    <td> Nome do Cliente:</td>
                    <td>{{ $data2->nome }}</td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>{{ $data2->email }}</td>
                </tr>
                <tr>
                    <td>Numero de BI:</td>
                    <td>{{ $data2->numBI }}</td>
                </tr>
                <tr>
                    <td>Telefone</td>
                    <td>{{ $data2->telefone }}</td>
                </tr>
            </table>
        </div>
        <div class="col-4"></div>
        <!---dados da factura-->
        <div class="col-4 text-left">
            <table class="table">
                <tr>
                    <td> Descricao:</td>
                    <td> {{$data->descricao}}</td>
                </tr>
                <tr>
                    <td>Artigo:</td>
                    <td>{{$data->artigo}}</td>
                </tr>
                <tr>
                    <td> Data da Emissao: </td>
                    <td>{{$data->dataInic}}</td>
                </tr>
                <tr>
                    <td>Data Limite de pagamento: </td>
                    <td>{{$data->dataFim}}</td>
                </tr>
                <tr>
                    <td>Data de pagamento: </td>
                    <td>{{$data->dataPagamento}}</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-9"></div>
        <div class="col-3">
            <hr>
            <table class="table">
                <tr>
                    <td>Valor pago:</td>
                    <td>{{$data->valorApagr}},00MTN</td>
                </tr>
                <tr>
                    <td>Valor em divida:</td>
                    <td>{{$data->valorDivida}},00MTN</td>
                </tr>
            </table>
        </div>
    </div>

</div>
<div class="align-items-center">
    <button class="btn btn-primary" onclick="window.print()"> Imprimir recibo</button>
</div>

@stop
