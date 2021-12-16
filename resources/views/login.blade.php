@extends ('layout')

@section('conteudo')
<h1 class="my-3">clente login page is here</h1>
@if(Session::get('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ Session::get('status')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="col-sm-6">
    <form method="post" action="">
        @csrf
        <div class="mb-3">
            <label class="form-label">Carta de conducao</label>
            <input type="text" class="form-control" name="numCarta" placeholder="Digite o numero da carta">
        </div>

        <div class="mb-3">
            <label class="form-label">Nome do Automobilista</label>
            <input type="text" class="form-control" name="nome" placeholder="Digite o seu nome">
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button></button>
    </form>
</div>

@stop
