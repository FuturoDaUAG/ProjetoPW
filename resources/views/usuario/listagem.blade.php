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
   <td>@lang('messages.nome')</td>
   <td>@lang('messages.email')</td>
   <td></td>
  <td></td>
   <td></td>
 </thead>

</thead>

@foreach ($usuarios as $u)
<tbody>
  <tr >
    <td>{{$u->name}} </td>
    <td> {{$u->email}}  </td>

    <td>
     <a href="{{action('UsuarioController@mostra', $u->id)}}"><span class="glyphicon glyphicon-search"></span></a>

   </td>
   <td> <a  data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-trash"></span></a>
</td>
   <td>  <a href="{{action('UsuarioController@muda', $u->id)}}"><span class="glyphicon glyphicon-pencil"></span></a>
   </td>

 </tr>


 @endforeach
</tbody>
</table>

{!!$usuarios->links()!!}



@endif

@if(old('name'))
<div class="alert alert-success">
  <strong>Sucesso !</strong>O {{ old('name')}} foi adicionado.
</div>
@endif

<!-- Trigger the modal with a button -->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Atenção</h4>
      </div>
      <div class="modal-body">
        <p>você realmente deseja exluir ?</p>
      </div>
       
      <div class="modal-footer">
         <a href="{{action('UsuarioController@remove', $u->id)}}">  <button type="button" class="btn btn-default">sim</button></a>
        <button type="button" class="btn btn-default" data-dismiss="modal">não</button>
      </div>
    </div>

  </div>
</div>

@stop

