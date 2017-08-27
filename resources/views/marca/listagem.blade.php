@extends('layout.principal')
@section('conteudo')

@if(empty($marca))
<div class="alert alert-danger">
    Você não tem nenhum usuarios cadastrado.
</div>
@else

<h1>Marcas Cadastradas</h1>

<a href="{{action('MarcaController@novo')}}" class="btn-sm btn-success  glyphicon glyphicon-plus" >Marca<br/></a>

<table class="tini table table table-hover table-striped table-bordered" id="marca-table"  >
    <thead>
    <td class="col-lg-1 text-center">@lang('ID')</td>
    <td class="col-lg-1 text-center">@lang('Nome')</td>
    <td class="col-lg-1 text-center">@lang('Detalhes')</td>
    <td class="col-lg-1 text-center">@lang('Remover')</td>
    <td class="col-lg-1 text-center">@lang('Editar')</td>
</thead>

</thead>
 
@foreach ($marca as $m)
<tbody>
    <tr >
        <td> {{$m -> id}} </td>
        <td> {{$m -> descricao}}  </td>
        <td class="text-center"> <a href="{{action('MarcaController@listar', $m->id)}}"><span class="glyphicon glyphicon-list-alt"></span></a> </td>
        <td class="text-center"> <a href="{{action('MarcaController@remover', $m->id)}}"><span class="glyphicon glyphicon-trash"></span></a> </td>
        <td class="text-center"> <a href="{{action('MarcaController@mudar', $m->id)}}"><span class="glyphicon glyphicon-pencil"></span></a> </td>
    </tr>
    @endforeach
</tbody>
</table>

@endif

@if(old('descricao'))
<div class="alert alert-success">
    <strong>Sucesso !</strong>O {{ old('descricao')}} foi adicionado.
</div>
@endif

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Atenção</h4>
            </div>
            <div class="modal-body">
                <p>Você realmente deseja exluir?</p>
            </div>

            <div class="modal-footer">
                <a href="{{action('MarcaController@remover', $m->id)}}">  <button type="button" class="btn btn-default">sim</button></a>
                <button type="button" class="btn btn-default" data-dismiss="modal">não</button>
            </div>
        </div>

    </div>
</div>


@stop

