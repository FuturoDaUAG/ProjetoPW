@extends('layout.principal')
@section('conteudo')

    @if(empty($servidores))
        <div class="alert alert-danger">
            Você não tem nenhum servidor cadastrado.
        </div>
    @else
        <h1>Servidores cadastrados</h1>


        <form method="get" action="/servidor/pesquisar">
            <div class="form-group col-lg-3">
                <input type="text" name="nome" class="form-control" placeholder="Nome..." />
            </div>
            <button type="submit">
                <span class="btn-sm btn-success glyphicon glyphicon-search"></span>
            </button>
            <a href="novo" class="btn-sm btn-success  glyphicon glyphicon-plus" ><br/></a>
        </form>

        <table class="tini table table table-hover table-striped table-bordered" id="servidor-table"  >

            <thead>
                <td>@lang('messages.matricula')</td>
                <td>@lang('messages.nome')</td>
                <td>@lang('messages.cargo')</td>
                <td></td>
                <td></td>
                <td></td>
            </thead>

            @foreach ($servidores as $servidor)
                <tbody>
                    <tr>
                        <td>{{$servidor->matricula}}</td>
                        <td>{{$servidor->nome}}</td>
                        <td>{{$servidor->cargo}}</td>
                        <td>
                            <a href="{{action('ServidorController@visualizar', $servidor->id)}}"><span class="glyphicon glyphicon-search"></span></a>
                        </td>
                        <td>
                            <a href="{{action('ServidorController@remover', $servidor->id)}}"><span class="glyphicon glyphicon-trash"></span></a>
                        </td>
                        <td>
                            <a href="{{action('ServidorController@recuperar', $servidor->id)}}"><span class="glyphicon glyphicon-pencil"></span></a>
                        </td>
                    </tr>
                </tbody>
            @endforeach

        </table>
    @endif

    {!!$servidores->links()!!}

    @if(old('nome'))
        <div class="alert alert-success">
            <strong>O Servidor {{ old('nome')}} foi adicionado com sucesso !</strong>.
        </div>
    @elseif(old('matricula'))
        <div class="alert alert-success">
            <strong>O Servidor (Matr: {{ old('matricula')}}) foi Atualizado com sucesso !</strong>.
        </div>
    @endif
@stop

