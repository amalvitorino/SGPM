@extends ('layout')

@section('conteudo')
<h1 class="my-3">lista de Multas</h1>
@if(Session::get('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ Session::get('status')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div>
    <p>Nome do cliente: <span class="text-danger">{{ $automobilista->nome }}</span></p>
</div>
<table class="table my-5">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">numero da multa</th>
            <th scope="col">Inflacao</th>
            <th scope="col">Valor a Pagar</th>
            <th scope="col">Data-Inic</th>
            <th scope="col">Data-Fim</th>
            <th scope="col">Estado</th>
            <th scope="col">operacoes</th>
        </tr>
    </thead>
    @foreach($dataMulta as $multa)
    <tr>
        <th scope="row">{{$multa->id}}</th>
        <td>{{$multa->numeroMulta}}</td>
        <td>{{$multa->descricao}}</td>
        <td>{{$multa->valorApagr}}</td>
        <td>{{$multa->dataInic}}</td>
        <td>{{$multa->dataFim}}</td>
        @if($multa->estado == 0)
        <td class="text-danger">Pendente</td>
        <td>
            <button class=" btn btn-danger"><a class="text-light text-decoration-none" href="/pagarMulta/{{$multa->id}}">Pagar Multa</a></button>
        </td>
        @else
        <td class="text-success">Pago</td>
        <td>
            <button class=" btn btn-success"><a class="text-light text-decoration-none" href="/reciboMulta/{{$multa->id}}">Detalhes</i></a></button>
        </td>
        @endif

    </tr>
    @endforeach
</table>

@stop
