@extends('layout.principal')
@section('conteudo')

@if(empty($patrimonio))
<div class="alert alert-danger">
    <h3> Você não tem nenhum usuarios cadastrado. </h3>
</div>
@else

<h2>Bens Permanentes - Relatório por Nota Fical</h2> <br>

<table class="tini table table table-hover table-striped table-bordered" id="patrimonio-table"  >
    <thead>
    <td class="col-lg-1 text-center"><b>@lang('Descrição')</b></td>
    <td class="col-lg-1 text-center"><b>@lang('Número Patrimônio')</b></td>
    <td class="col-lg-1 text-center"><b>@lang('Valor')</b></td>
    <td class="col-lg-1 text-center"><b>@lang('Nota Fiscal')</b></td>
</thead>

@foreach ($patrimonio as $p)
<tbody>
    <tr >
        <td> {{$p -> descricao}} </td>
        <td> {{$p -> numeropatrimonio}}  </td>
        <td> {{$p -> valor}}  </td>
        <td> {{$p -> numeronotafiscal}}  </td>
    </tr>
    @endforeach
</tbody>
</table>
{{ $patrimonio->appends(Request::except('page'))->links() }}
@endif
@stop

