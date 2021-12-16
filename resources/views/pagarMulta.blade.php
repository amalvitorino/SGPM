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


<!-- Modal pagamento -->
<div class="modal fade" id="completeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form method="post" action="/pagarMulta">
            @csrf
            <input type="hidden" name="id" value="{{$data->id}}">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pagando a Multa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="completename" class="form-label">Valor a Pagar: {{ $data->valorApagr }}</label>
                        <img src="img/m-pesa.png" alt="">
                    </div>

                    <div class="mb-3">
                        <label for="completecontador" class="form-label">Numero de M-Pesa</label>
                        <input type="text" class="form-control" id="completecontador" value=" {{ $data2->telefone }}">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-dark">Pagar</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>

                </div>
            </div>
        </form>
    </div>
</div>


<h1 class="my-3">pagamento de Multa</h1>

<div class="container my-2 factura print-container">
    <h4 class="text-center">SGPM lda</h4>
    <h5 class="text-center">Factura de pagamento de Multa rodoviaria</h5>
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
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-9"></div>
        <div class="col-3">
            <hr>
            <table class="table">
                <tr>
                    <td>Valor a pagar:</td>
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
    <button class="btn btn-primary" onclick="window.print()"> Imprimir factura</button>
    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#completeModal"> Pagar factura</button>
</div>

@stop
