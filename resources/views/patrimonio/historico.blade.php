@extends('layout.principal')
@section('conteudo')

@if(empty($patrimonio))
<div class="alert alert-danger">
    <h3> Você não tem nenhum usuarios cadastrado. </h3>
</div>
@else

<h2>Bem Permanente - Histórico</h2> <br>

<table class="tini table table table-hover table-striped table-bordered" id="patrimonio-table"  >
    <thead>
    <td class="col-lg-1 text-center">@lang('ID')</td>
    <td class="col-lg-1 text-center">@lang('Setor')</td>
    <td class="col-lg-1 text-center">@lang('Data')</td>
    <td class="col-lg-1 text-center">@lang('Status')</td>
</thead>
<tbody>
    @foreach($setor as $s)
    <tr>
        <td></td>
        <td>{{$s->descricao}}</td>
        <td></td>
        <td></td>
    </tr>
    @endforeach

</tbody>
</table>
@endif

@stop
