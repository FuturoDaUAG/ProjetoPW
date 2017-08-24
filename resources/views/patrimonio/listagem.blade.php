@extends('layout.principal')
@section('conteudo')



@if(empty($patrimonio))
<div class="alert alert-danger">
    Você não tem nenhum usuarios cadastrado.
</div>
@else

<h1>Patrimonios Cadastrados</h1> <br>

<form method="get" action="/patrimonio/pesquisar">
    <div class="form-group col-lg-3">
        <input type="text" name="nome" class="form-control" placeholder="Pesquisar..." />
    </div>
    <button type="submit"
        <span class="btn-sm btn-success glyphicon glyphicon-search"></span>
    </button>
</form>

<table class="tini table table table-hover table-striped table-bordered" id="patrimonio-table"  >
    <thead>
    <td>@lang('ID')</td>
    <td>@lang('Nome')</td>
    <td>@lang('Número Patrimonio')</td>
    <td>@lang('Marca')</td>
    <td></td>
    <td></td>
    <td></td>
</thead>

@foreach ($patrimonio as $p)
<tbody>
    <tr >
        <td> {{$p -> id}} </td>
        <td> {{$p -> descricao}}  </td>
        <td> {{$p -> numeropatrimonio}} </td>
        <td> {{$p -> marca -> descricao}}</td>
        <td> <a href="{{action('PatrimonioController@visualizar', $p->id)}}"><span class="glyphicon glyphicon-list-alt"></span></a> </td>
        <td> <a href="{{action('PatrimonioController@editar', $p->id)}}"><span class="glyphicon glyphicon-pencil"></span></a> </td>
        <td> <a href="{{action('PatrimonioController@remover', $p->id)}}"><span class="glyphicon glyphicon-time"></span></a> </td>
    </tr>
    @endforeach
</tbody>
</table>
{!!$patrimonio->links()!!}
@endif

@if(old('descricao'))
<div class="alert alert-success">
    <strong>Sucesso !</strong>O {{ old('descricao')}} foi adicionado.
</div>
@endif

@stop
