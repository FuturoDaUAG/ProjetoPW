@extends('layout.principal')
@section('conteudo')

@if(empty($departamentos))
<div class="alert alert-danger">
    Você não tem nenhum Departamento cadastrado.
</div>
@else

<h1>Departamento Cadastradas</h1>

<a href="{{action('DepartamentoController@novo')}}" class="btn-sm btn-success  glyphicon glyphicon-plus" >Departamento <br/></a>

<table class="tini table table table-hover table-striped table-bordered" id="usuario-table"  >
    <thead>
    <td>@lang('ID')</td>
    <td>@lang('messages.nome')</td>
    <td class="col-lg-1 text-center">@lang('Detalhes')</td>
    <td class="col-lg-1 text-center">@lang('Remover')</td>
    <td class="col-lg-1 text-center">@lang('Editar')</td>
</thead>
 
@foreach ($departamentos as $d)
<tbody>
    <tr >
        <td> {{$d -> id}} </td>
        <td> {{$d-> departamento}}  </td>
        <td class="text-center"><a href="{{action('DepartamentoController@mostra', $d->id)}}"><span class="glyphicon glyphicon-list-alt"></span></a></td>
        <td class="text-center"><a href="#myModal" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-trash"></span></a></td>
        <td class="text-center"><a href="{{action('DepartamentoController@muda', $d->id)}}"><span class="glyphicon glyphicon-pencil"></span></a></td>
    </tr>
    @endforeach
</tbody>
</table>

@endif

@if(old('descricao'))
<div class="alert alert-success">
    <strong>Sucesso !</strong>O {{ old('departamento')}} foi adicionado.
</div>
@endif

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
                <p>Você realmente deseja exluir?</p>
            </div>

            <div class="modal-footer">
                <a href="{{action('DepartamentoController@remove', $d->id)}}">  <button type="button" class="btn btn-default">sim</button></a>
                <button type="button" class="btn btn-default" data-dismiss="modal">não</button>
            </div>
        </div>

    </div>
</div>



@stop

