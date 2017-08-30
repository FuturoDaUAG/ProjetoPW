@extends('layout.principal')
@section('conteudo')

@if(empty($marca))
<div class="alert alert-danger">
    Você não tem nenhum usuarios cadastrado.
</div>
@else

<h1>Marcas Cadastradas</h1>

<table class="tini table table table-hover table-striped table-bordered" id="marca-table"  >
    <thead>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</thead>

</thead>
 
@foreach ($marca as $m)
<tbody>
    <tr >
        <td> {{$m -> id}} </td>
        <td> {{$m -> descricao}}  </td>
        <td> <a href="{{action('UsuarioController@mostra', $m->id)}}"><span class="glyphicon glyphicon-search"></span></a> </td>
        <td> <a href="{{action('UsuarioController@remove', $m->id)}}"><span class="glyphicon glyphicon-trash"></span></a> </td>
        <td> <a href="{{action('UsuarioController@muda', $m->id)}}"><span class="glyphicon glyphicon-pencil"></span></a> </td>
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

