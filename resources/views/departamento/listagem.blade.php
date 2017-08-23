@extends('layout.principal')
@section('conteudo')

@if(empty($departamento))
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
 
@foreach ($departamento as $d)
<tbody>
    <tr >
        <td> {{$d -> id}} </td>
        <td> {{$d-> departamento}}  </td>
        <td> <a href="{{action('DepartamentoController@mostra', $m->id)}}"><span class="glyphicon glyphicon-search"></span></a> </td>
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



@stop

