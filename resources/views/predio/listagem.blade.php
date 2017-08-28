@extends('layout.principal')
@section('conteudo')

@if(empty($predios))
<div class="alert alert-danger">
    Você não tem nenhum predio cadastrado.
</div>
@else

<h1>Prédios Cadastrados</h1>

<a href="{{action('PredioController@novo')}}" class="btn-sm btn-success  glyphicon glyphicon-plus" >Prédio<br/></a>
<table class="tini table table table-hover table-striped table-bordered" id="predio-table"  >
    <thead>
    <td>@lang('ID')</td>
    <td>@lang('Descricao')</td>
    <td class="col-lg-1 text-center">@lang('Detalhes')</td>
    <td class="col-lg-1 text-center">@lang('Remover')</td>
    <td class="col-lg-1 text-center">@lang('Editar')</td>
</thead>

</thead>

@foreach ($predios as $predio)
<tbody>
    <tr >
        <td> {{$predio->id}}  </td>
        <td> {{$predio->descricao}}  </td>
        <td class="text-center">
            <a href="{{action('PredioController@mostra', $predio->id)}}"><span class="glyphicon glyphicon-list-alt"></span></a>

        </td>
        <td class="text-center"> 
            <a href="#myModal" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-trash"></span></a>
        </td>
        <td class="text-center">  
            <a href="{{action('PredioController@muda', $predio->id)}}"><span class="glyphicon glyphicon-pencil"></span></a>
        </td>

    </tr>


    @endforeach
</tbody>
</table>

{!!$predios->links()!!}

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
                <p>Você realmente deseja exluir?</p>
            </div>

            <div class="modal-footer">
                <a href="{{action('PredioController@remover', $predio->id)}}">  <button type="button" class="btn btn-default">sim</button></a>
                <button type="button" class="btn btn-default" data-dismiss="modal">não</button>
            </div>
        </div>

    </div>
</div>

@endif

@if(old('ramal'))
<div class="alert alert-success">
    <strong>Sucesso !</strong>O {{ old('ramal')}} foi adicionado.
</div>
@endif



@stop