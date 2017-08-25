@extends('layout.principal')
@section('conteudo')

    @if(empty($patrimonio))
        <div class="alert alert-danger">
            Você não tem nenhum usuarios cadastrado.
        </div>
    @else

        <h1>Patrimonios Cadastrados</h1> <br>

        <form method="get" action="/patrimonio/pesquisar">
            <div class="form-group col-lg-3">
                <input type="text" name="texto" class="form-control" placeholder="Pesquisar..." />
            </div>
            <select name="filtro" class="form-group">
                <option value="descricao">Nome</option>
                <option value="numeropatrimonio">Número Patrimônio</option>
                <!--<option value="marca">Marca</option>-->
                <option value="numeronotafiscal">Nota Fiscal</option>
                <option value="numeropantigo">Número Patrimônio Antigo</option>
                <option value="numeropregao">Número Pregão</option>
            </select>
            <button type="submit">
            <span class="btn-sm btn-success glyphicon glyphicon-search"></span>
            </button>
        </form>

        <div class="dropdown col-md-4 col-md-offset-10">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Ordenar por
                <span class="caret"></span></button>
            <ul class="dropdown-menu col-md-2 col-md-offset-2">
                <li><a href="{{action('PatrimonioController@ordemAlfabetica')}}">Nome</a></li>
                <li><a href="{{action('PatrimonioController@ordemNumeroPatrimonio')}}">Número Patrimônio</a></li>
                <li><a href="{{action('PatrimonioController@ordemNumeroEmpenho')}}">Número Empenho</a></li>
            </ul>
        </div>

        <table class="tini table table table-hover table-striped table-bordered" id="patrimonio-table"  >
            <thead>
            <td>@lang('ID')</td>
            <td>@lang('Nome')</td>
            <td>@lang('Número Patrimônio')</td>
            <td>@lang('Marca')</td>
            <td></td>
            <td></td>
            <td></td>
            </thead>

            @foreach ($patrimonio as $p)
                <tbody>
                <tr >
                    <td> {{$p -> id}} </td>
                    <td> {{$p -> descricao}}  </td>
                    <td> {{$p -> numeropatrimonio}} </td>
                    <td> {{$p -> marca -> descricao}}</td>
                    <td> <a href="{{action('PatrimonioController@visualizar', $p->id)}}"><span class="glyphicon glyphicon-list-alt"></span></a> </td>
                    <td> <a href="{{action('PatrimonioController@editar', $p->id)}}"><span class="glyphicon glyphicon-pencil"></span></a> </td>
                    <td> <a href="{{action('PatrimonioController@prepararTransferir', $p->id)}}"><span class="glyphicon glyphicon-transfer"></span></a> </td>
                </tr>
                @endforeach
                </tbody>
        </table>
        {{ $patrimonio->appends(Request::except('page'))->links() }}
        <!--{{$patrimonio->links()}}-->
    @endif

    @if(old('descricao'))
        <div class="alert alert-success">
            <strong>Sucesso !</strong>O {{ old('descricao')}} foi adicionado.
        </div>
    @endif

@stop