@extends('layout.principal')
@section('conteudo')

@if(empty($predios))
<div class="alert alert-danger">
    Você não tem nenhum predio cadastrado.
</div>
@else

<h1>Prédios Cadastrados</h1>


<table class="tini table table table-hover table-striped table-bordered" id="predio-table"  >
    <thead>
    <td>@lang('Descricao')</td>
    <td>@lang('ID')</td>
    <td></td>
    <td></td>
    <td></td>
</thead>

</thead>

@foreach ($predios as $predio)
<tbody>
    <tr >
        <td> {{$predio->descricao}}  </td>
        <td> {{$predio->id}}  </td>
        
        <td class="text-center"> @can('visualizar-global')<a href="{{action('PredioController@mostra', $predio->id)}}"><span class="glyphicon glyphicon-list-alt"></span></a> @endcan</td>
        <td class="text-center"> @can('remover-global')<a href="{{action('PredioController@remover', $predio->id)}}" onclick="return confirm('Deseja realmente excluir este item?')"><span class="glyphicon glyphicon-trash"></span></a>@endcan </td>
        <td class="text-center"> @can('editar-global')<a href="{{action('PredioController@muda', $predio->id)}}"><span class="glyphicon glyphicon-pencil"></span></a> @endcan </td>

    </tr>


    @endforeach
</tbody>
</table>

{!!$predios->links()!!}



@endif

@if(old('ramal'))
<div class="alert alert-success">
    <strong>Sucesso !</strong>O {{ old('ramal')}} foi adicionado.
</div>
@endif



@stop