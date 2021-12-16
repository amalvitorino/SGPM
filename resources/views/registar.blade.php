@extends ('layout')

@section('conteudo')


<!-- body-->
<h1 class="my-3">Registando do Automobilista</h1>


<div class="col-sm-6">
    <form method="post" action="">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nome do Cliente</label>
            <input type="text" class="form-control" name="nome" placeholder="Digite o nome">
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Digite o endereco de email">
        </div>

        <div class="mb-3">
            <label class="form-label">Numero de BI</label>
            <input type="text" class="form-control" name="bi" placeholder="Digite o numero de BI">
        </div>


        <div class="mb-3">
            <label class="form-label">telefone</label>
            <input type="text" class="form-control" name="telefone" placeholder="Digite o seu telefone">
        </div>
        <div class="mb-3">
            <label class="form-label">Numero da carta</label>
            <input type="text" class="form-control" name="numCarta" placeholder="Digite o numero da carta de conducao">
        </div>
        <div class="mb-3">
            <label class="form-label">Senha</label>
            <input type="text" class="form-control" name="senha" placeholder="Digite a senha">
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button></button>
    </form>
</div>

@stop
