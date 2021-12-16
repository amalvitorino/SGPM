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
               Multas registadas
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
                                    <th scope="col">Numero da Multa</th>
                                    <th scope="col">Descricao</th>
                                    <th scope="col">Artigo</th>
                                    <th scope="col">Data-INC</th>
                                    <th scope="col">Data-FiN</th>
                                    <th scope="col">Valor</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Operacoes</th>
                                </tr>
                            </thead>
                            @foreach($dados as $multa)
                            <tr>
                                <th scope="row">{{$multa->id}}</th>
                                <td>{{$multa->numeroMulta}}</td>
                                <td>{{$multa->descricao }}</td>
                                <td>{{$multa->artigo}}</td>
                                <td>{{$multa->dataInic}}</td>
                                <td>{{$multa->dataFim}}</td>
                                <td>{{$multa->valorApagr}}</td>
                                <td>{{$multa->estado}}</td>
                                <td>
                                    <button class=" btn btn-primary"><a class="text-light text-decoration-none" href="editarAutomobilista/{{$multa->id}}">
                                            <i class=" fa  fa-edit"></i></a></button>
                                    <button class=" btn btn-danger"><a class="text-light text-decoration-none" href="apagarAutomobilista/{{$multa->id}}"><i class="fa fa-trash"></i></a></button>
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
