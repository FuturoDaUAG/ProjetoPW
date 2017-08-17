@extends('layout.principal')
@section('conteudo')

@if(empty($patrimonio))
<div class="alert alert-danger">
    Você não tem nenhum usuarios cadastrado.
</div>
@else

<h1>Patrimonios Cadastrados</h1>

<table class="tini table table table-hover table-striped table-bordered" id="patrimonio-table"  >
    <thead>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</thead>

</thead>
 
@foreach ($patrimonio as $p)
<tbody>
    <tr >
        <td> {{$p -> id}} </td>
        <td> {{$p -> descricao}}  </td>
        <td> {{$p -> valor}} </td>
        <td> {{$p -> marca -> descricao}}</td>
        <td> <a href="{{action('UsuarioController@mostra', $p->id)}}"><span class="glyphicon glyphicon-search"></span></a> </td>
        <td> <a href="{{action('UsuarioController@remove', $p->id)}}"><span class="glyphicon glyphicon-trash"></span></a> </td>
        <td> <a href="{{action('UsuarioController@muda', $p->id)}}"><span class="glyphicon glyphicon-pencil"></span></a> </td>
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
