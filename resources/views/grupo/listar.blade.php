@extends('layout.principal')
@section('conteudo')

@if(empty($grupo))
<div class="alert alert-danger">
    Você não tem grupos de patrimonios cadastrados.
</div>
@else

<h1>Grupos Cadastrados</h1>

<table class="tini table table table-hover table-striped table-bordered" id="grupo-table"  >
    <thead>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</thead>

</thead>
 
@foreach ($grupos as $grupo)
<tbody>
    <tr >
        <td> {{$grupo -> id}} </td>
        <td> {{$grupo -> descricao}}  </td>
        <td> <a href="{{action('GrupoController@listar', $grupo->id)}}"><span class="glyphicon glyphicon-search"></span></a> </td>
        <td> <a href="{{action('GrupoController@remover', $grupo->id)}}"><span class="glyphicon glyphicon-trash"></span></a> </td>
        <td> <a href="{{action('GrupoController@alterar', $grupo->id)}}"><span class="glyphicon glyphicon-pencil"></span></a> </td>
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
@stop

