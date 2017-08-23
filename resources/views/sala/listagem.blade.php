@extends('layout.principal')
@section('conteudo')

@if(empty($salas))
<div class="alert alert-danger">
  Você não tem nenhuma sala cadastrada.
</div>
@else

<h1>Salas Cadastradas</h1>


<table class="tini table table table-hover table-striped table-bordered" id="sala-table"  >
  <thead>
   <td>@lang('Nome')</td>
   <td>@lang('Ramal')</td>
   <td>@lang('Prédio')</td>
   <td></td>
  <td></td>
   <td></td>
 </thead>

</thead>

@foreach ($salas as $sala)
<tbody>
  <tr >
    <td> {{$sala->descricao}}  </td>
    <td>{{$sala->ramal}} </td>
    <td>{{$sala->predio->descricao}} </td>
    
    <td>
     <a href="{{action('SalaController@mostra', $sala->id)}}"><span class="glyphicon glyphicon-search"></span></a>

   </td>
   <td> <a href="{{action('SalaController@remover', $sala->id)}}"><span class="glyphicon glyphicon-trash"></span></a>

   </td>
   <td>  <a href="{{action('SalaController@muda', $sala->id)}}"><span class="glyphicon glyphicon-pencil"></span></a>
   </td>

 </tr>


 @endforeach
</tbody>
</table>

{!!$salas->links()!!}



@endif

@if(old('ramal'))
<div class="alert alert-success">
  <strong>Sucesso !</strong>O {{ old('descricao')}} foi adicionado.
</div>
@endif



@stop
