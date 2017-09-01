@extends('layout.principal')
@section('conteudo')

@if(empty($departamentos))
<div class="alert alert-danger">
    Você não tem nenhum Departamento cadastrado.
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
 
@foreach ($departamentos as $d)
<tbody>
    <tr >
        <td> {{$d -> id}} </td>
        <td> {{$d-> departamento}}  </td>
        <td class="text-center"> <a href="{{action('DepartamentoController@mostra', $d->id)}}"><span class="glyphicon glyphicon-list-alt"></span></a> </td>
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

