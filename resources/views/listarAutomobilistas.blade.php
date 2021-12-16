@extends ('layoutAdmin')

@section('conteudo')

@if(Session::get('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ Session::get('status')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="card bg-white relative rounded-lg shadow flex w-full mx-auto">
    <!---->
    <span class="flex">
        <form class="w-full flex flex-wrap my-5 mx-5 text-justify md:text-left md:mx-10 form-group">
            <h5 class="w-full">
                Dados do Automobilista
            </h5>

            <div class="row py-1">
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Numero Da Carta" aria-label="Numero Da Carta">
                </div>

                <div class="col-sm-4">
                    <button type="Pesquisar" class="btn px-5 w-full btn-success pull-right">Pesquisar</button>
                </div>
            </div>

            <div class="row py-5">
                <div class="dados">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">i</th>
                                    <th scope="col">Numero da Carta</th>
                                    <th scope="col">Categoria</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Doc</th>
                                    <th scope="col">Numero de Docu</th>
                                    <th scope="col">Morada</th>
                                    <th scope="col">Operacoes</th>
                                </tr>
                            </thead>
                            @foreach($dados as $automobilista)
                            <tr>
                                <th scope="row">{{$automobilista->id}}</th>
                                <td>{{$automobilista->numCarta}}</td>
                                <td>{{$automobilista->categoriaCarta }}</td>
                                <td>{{$automobilista->nome}}</td>
                                <td>{{$automobilista->tipoDoc}}</td>
                                <td>{{$automobilista->numDoc}}</td>
                                <td>{{$automobilista->morada}}</td>
                                <td>
                                    <button class=" btn btn-primary"><a class="text-light text-decoration-none" href="editarAutomobilista/{{$automobilista->id}}">
                                            <i class=" fa  fa-edit"></i></a></button>
                                    <button class=" btn btn-danger"><a class="text-light text-decoration-none" href="apagarAutomobilista/{{$automobilista->id}}"><i class="fa fa-trash"></i></a></button>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </form>
    </span>
</div>

@stop
