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
                    <td>
                        <a href="{{action('PredioController@mostra', $predio->id)}}"><span class="glyphicon glyphicon-search"></span></a>

                    </td>
                    <td> <a href="{{action('PredioController@remover', $predio->id)}}"><span class="glyphicon glyphicon-trash"></span></a>

                    </td>
                    <td>  <a href="{{action('PredioController@muda', $predio->id)}}"><span class="glyphicon glyphicon-pencil"></span></a>
                    </td>

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