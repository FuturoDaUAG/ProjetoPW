@extends('layout.principal')
@section('conteudo')

@if(empty($patrimonio))
<div class="alert alert-danger">
    <h3> Você não tem nenhum usuarios cadastrado. </h3>
</div>
@else

<h2>Bens Permanentes - Relatório por Setor</h2> <br>

<table class="tini table table table-hover table-striped table-bordered" id="patrimonio-table"  >
    <thead>
    <td class="col-lg-1 text-center"><b>@lang('Descrição')</b></td>
    <td class="col-lg-1 text-center"><b>@lang('Número Patrimônio')</b></td>
    <td class="col-lg-1 text-center"><b>@lang('Setor')</b></td>
</thead>

@foreach ($patrimonio as $p)
<tbody>
    <tr >
        <td> {{$p -> nomep}} </td>
        <td> {{$p -> numeropatrimonio}}  </td>
        <td> {{$p -> descricao}}  </td>
    </tr>
    @endforeach
</tbody>
</table>

@endif
@stop