@extends ('layoutAdmin')

@section('conteudo')



<div class="card bg-white relative rounded-lg shadow flex w-full mx-auto">
    <!---->
    <span class="flex">
        <form class="w-full flex flex-wrap my-5 mx-5 text-justify md:text-left md:mx-10 form-group" method="post" action="">
            @csrf
            <div class="row py-1">
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Numero Da Carta" aria-label="Numero Da Carta">
                </div>

                <div class="col-sm-4">
                    <button type="Pesquisar" class="btn px-5 w-full btn-success pull-right">Pesquisar</button>
                </div>
            </div>
            <div class="form-group col-sm-4">
                <label for="exampleInputEmail1">Toque para escolher o Cliente</label>
                <!--como pegar o valor do select-->
                <select class="form-control" name="automobilistaID">
                    @foreach($dadaAutomobilista as $automobilista)
                    <option value={{ $automobilista->id }}> [{{$automobilista->id}}]. {{$automobilista->nome}}</option>
                    @endforeach
                </select>

            </div>

            <div class="form-group my-3 col-sm-4">
                <label for="exampleInputEmail1">Multa</label>
                <input type="number" class="form-control" name="multa" value="0">
                <label for="exampleInputEmail1">Descricao</label>
                <input type="text" class="form-control" name="descricao" placeholder="descricao">
                <label for="exampleInputEmail1">Artigo</label>
                <input type="text" class="form-control" name="artigo" placeholder="artigo">
            </div>

            <button type="submit" class="btn btn-primary">Registar</button>

        </form>
    </span>
</div>

@stop
