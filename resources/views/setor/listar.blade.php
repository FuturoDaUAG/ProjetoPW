@extends('layout.principal')
@section('conteudo')

    @if(empty($setores))
        <div class="alert alert-danger">
            Você não tem nenhum setor cadastrado.
        </div>
    @else
        <h1>Setores cadastrados</h1>
        <a href="novo" class="btn-sm btn-success  glyphicon glyphicon-plus" > Setor <br/></a>

        <table class="tini table table table-hover table-striped table-bordered" id="servidor-table"  >

            <thead>
            <td>@lang('messages.descricao')</td>
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
                        <a href="{{action('SetorController@visualizar', $setor->id)}}"><span class="glyphicon glyphicon-search"></span></a>
                    </td>
                    <td>
                        <a href="{{action('SetorController@remover', $setor->id)}}"><span class="glyphicon glyphicon-trash"></span></a>
                    </td>
                    <td>
                        <a href="{{action('SetorController@recuperar', $setor->id)}}"><span class="glyphicon glyphicon-pencil"></span></a>
                    </td>
                </tr>
                </tbody>
            @endforeach

        </table>
    @endif

    {!!$setores->links()!!}

    @if(old('descricao'))
        <div class="alert alert-success">
            <strong>O Setor {{ old('descricao')}} foi adicionado com sucesso !!</strong>.
        </div>
    @elseif(old('curso_id')) <!-- curso_id usado apenas como condição de controle -->
        <div class="alert alert-success">
            <strong>Setor atualizado com sucesso !!</strong>.
        </div>
    @endif
@stop

