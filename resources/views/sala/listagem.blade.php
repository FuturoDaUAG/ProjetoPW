@extends('layout.principal')
@section('conteudo')

    @if(empty($salas))
        <div class="alert alert-danger">
            Você não tem nenhuma sala cadastrada.
        </div>
    @else

        <h1>Salas Cadastradas</h1>
        
        <a href="{{action('SalaController@novo')}}" class="btn-sm btn-success  glyphicon glyphicon-plus" >Sala<br/></a>

        <table class="tini table table table-hover table-striped table-bordered" id="sala-table"  >
            <thead>
            <td>@lang('Descrção')</td>
            <td>@lang('Ramal')</td>
            <td>@lang('Prédio')</td>
            <td class="col-lg-1 text-center">@lang('Detalhes')</td>
            <td class="col-lg-1 text-center">@lang('Remover')</td>
            <td class="col-lg-1 text-center">@lang('Editar')</td>
            </thead>

            </thead>

            @foreach ($salas as $sala)
                <tbody>
                <tr >
                    <td> {{$sala->descricao}}  </td>
                    <td>{{$sala->ramal}} </td>
                    <td>{{$sala->predio->descricao}} </td>

                    <td class="text-center">
                        <a href="{{action('SalaController@mostra', $sala->id)}}"><span class="glyphicon glyphicon-list-alt"></span></a>
                    </td>
                    <td class="text-center"> 
                        <a href="#myModal" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-trash"></span></a>
                    </td>
                    <td class="text-center">  
                        <a href="{{action('SalaController@muda', $sala->id)}}"><span class="glyphicon glyphicon-pencil"></span></a>
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
                <a href="{{action('SalaController@remover', $sala->id)}}">  <button type="button" class="btn btn-default">sim</button></a>
                <button type="button" class="btn btn-default" data-dismiss="modal">não</button>
            </div>
        </div>

    </div>
</div>

@stop