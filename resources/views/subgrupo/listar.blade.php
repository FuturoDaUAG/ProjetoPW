@extends('layout.principal')
@section('conteudo')

@if(empty($subgrupo))
<div class="alert alert-danger">
    Você não tem nenhum subgrupo cadastrado.
</div>
@else

<h1>Subgrupos Cadastradas</h1>

<table class="tini table table table-hover table-striped table-bordered" id="marca-table"  >
    <thead>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</thead>

</thead>
 
@foreach ($subgrupos as $subgrupo)
<tbody>
    <tr >
        <td> {{$subgrupo -> id}} </td>
        <td> {{$subgrupo -> descricao}}  </td>
        <td> <a href="{{action('SubgrupoController@listar', $subgrupo->id)}}"><span class="glyphicon glyphicon-search"></span></a> </td>
        <td> <a href="{{action('SubgrupoController@remover', $subgrupo->id)}}"><span class="glyphicon glyphicon-trash"></span></a> </td>
        <td> <a href="{{action('SubgrupoController@alterar', $subgrupo->id)}}"><span class="glyphicon glyphicon-pencil"></span></a> </td>
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

