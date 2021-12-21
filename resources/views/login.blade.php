@extends ('layout')

@section('conteudo')
<h1 class="my-3">Faça o login</h1>
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

        <button type="/" class="btn btn-primary">Salvar</button></button>
        <!--amal-->
    </form>
</div>

@stop
