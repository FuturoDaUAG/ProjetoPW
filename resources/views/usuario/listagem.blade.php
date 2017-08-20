@extends('layout.principal')
@section('conteudo')

@if(empty($usuarios))
<div class="alert alert-danger">
  Você não tem nenhum usuarios cadastrado.
</div>
@else

<h1>Usuários Cadastrados</h1>

<a href="{{action('UsuarioController@novo')}}" class="btn-sm btn-success  glyphicon glyphicon-plus" > Usuario<br/></a>

<table class="tini table table table-hover table-striped table-bordered" id="usuario-table"  >
  <thead>
   <td>@lang('messages.apelido')</td>
   <td>@lang('messages.email')</td>
   <td></td>
  <td></td>
   <td></td>
 </thead>

</thead>

@foreach ($usuarios as $u)
<tbody>
  <tr >
    <td>{{$u->apelido}} </td>
    
    <td> {{$u->email}}  </td>

    <td>
     <a href="{{action('UsuarioController@mostra', $u->id)}}"><span class="glyphicon glyphicon-search"></span></a>

   </td>
   <td> <a href="{{action('UsuarioController@remove', $u->id)}}"><span class="glyphicon glyphicon-trash"></span></a>

   </td>
   <td>  <a href="{{action('UsuarioController@muda', $u->id)}}"><span class="glyphicon glyphicon-pencil"></span></a>
   </td>

 </tr>


 @endforeach
</tbody>
</table>

{!!$usuarios->links()!!}



@endif

@if(old('apelido'))
<div class="alert alert-success">
  <strong>Sucesso !</strong>O {{ old('apelido')}} foi adicionado.
</div>
@endif



@stop
