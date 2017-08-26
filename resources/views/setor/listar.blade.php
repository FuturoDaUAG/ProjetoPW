Setores listar:
@extends('layout.principal')
@section('conteudo')

    @if(empty($setores))
        <div class="alert alert-danger">
            Você não tem nenhum setor cadastrado.
        </div>
    @else
        <h1>Setores cadastrados</h1>
        <form method="get" action="/setor/pesquisar">
            <div class="form-group col-lg-3">
                <input type="text" name="nome" class="form-control" placeholder="Pesquisar..." />
            </div>
            <button type="submit">
                <span class="btn-sm btn-success glyphicon glyphicon-search"></span>
            </button>
            <a href="{{action('SetorController@novo')}}" class="btn-sm btn-success  glyphicon glyphicon-plus" > Setor<br/></a>
        </form>

        <div class="dropdown col-md-4 col-md-offset-10">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Ordenar por
                <span class="caret"></span></button>
            <ul class="dropdown-menu col-md-2 col-md-offset-2">
                <li><a href="{{action('SetorController@ordemAlfabetica')}}">Nome</a></li>
                <li><a href="{{action('SetorController@ordemCurso')}}">Curso</a></li>
                <li><a href="{{action('SetorController@ordemResponsavel')}}">Responsável</a></li>
            </ul>
        </div>


        <table class="tini table table table-hover table-striped table-bordered" id="servidor-table"  >

            <thead>
            <td>@lang('messages.nome')</td>
            <td>@lang('messages.sala')</td>
            <td>@lang('messages.servidor')</td>
            <td>@lang('messages.curso')</td>
            <td></td>
            <td></td>
            <td></td>
            </thead>

            @foreach ($setores as $setor)
                <tbody>
                <tr>
                    <td>{{$setor->descricao}}</td>
                    <td>{{$setor->sala->descricao}}</td>
                    <td>{{$setor->servidor->nome}}</td>
                    <td>{{$setor->curso->nome}}</td>

                    <td>
                        <a href="{{action('SetorController@visualizar', $setor->id)}}">
                            <button class="btn btn-default btn-mini">
                                <span class="glyphicon glyphicon-search"/>
                            </button>
                        </a>
                    </td>
                    <td>
                    <td>
                        <button type="button" class="btn btn-default btn-mini" data-toggle="modal"
                                data-target="#myModal">
                            <span class="glyphicon glyphicon-trash"/>
                        </button>

                    </td>
                    <td>
                        <a href="{{action('SetorController@recuperar', $setor->id)}}">
                            <button class="btn btn-default btn-mini">
                                <span class="glyphicon glyphicon-pencil"/>
                            </button>
                        </a>
                    </td>
                </tr>
                </tbody>


                <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Atenção</h4>
                            </div>
                            <div class="modal-body">
                                <p>Você realmente deseja excluir ?</p>
                            </div>

                            <div class="modal-footer">
                                <a href="{{action('SetorController@remover', $setor->id)}}">
                                    <button type="button" class="btn btn-danger">Sim</button>
                                </a>
                                <button type="button" class="btn btn-success" data-dismiss="modal">Não</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->

            @endforeach
        </table>
    @endif

    {!!$setores->links()!!}

    @if(old('descricao'))
        <div class="alert alert-success">
            <strong>O Setor {{ old('descricao')}} foi adicionado com sucesso !</strong>.
        </div>
    @elseif(old('curso_id')) <!-- curso_id usado apenas como condição de controle -->
    <div class="alert alert-success">
        <strong>Setor atualizado com sucesso !</strong>.
    </div>
    @endif

@stop

