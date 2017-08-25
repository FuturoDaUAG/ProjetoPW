@extends('layout.principal')
@section('conteudo')
<h2>Detalhamento de Bem Permanente</h2>
<br><br>

<ul>
    <li>
        <h4><b> Nome do bem: </b>{{ $patrimonio->descricao }}</h4>
    </li>
    <li>
        <h4><b> Valor: </b>{{ $patrimonio->valor }}</h4>
    </li>
    <li>
        <h4><b> Número do Patrimônio:</b> {{ $patrimonio->numeropatrimonio }}</h4>
    </li>
    <li>
        <h4><b> Número do Patrimônio Antigo: </b> {{ $patrimonio->numeropantigo}}</h4>
    </li>
    <li>
        <h4><b> Marca: </b> {{ $patrimonio->marca->descricao}}</h4>
    </li>
    <li>
        <h4><b> Número Pregão: </b> {{ $patrimonio->numeropregao}}</h4>
    </li>
    <li>
        <h4><b> Número Nota Fiscal: </b> {{ $patrimonio->numeronotafiscal}}</h4>
    </li>
    <li>
        <h4><b> Grupo: </b> {{ $patrimonio->subgrupo->grupo->descricao}}</h4>
    </li>
    <li>
        <h4><b> Subgrupo: </b> {{ $patrimonio->subgrupo->descricao}}</h4>
    </li>
    <li>
        <h4><b> Status: </b> {{$teste->descricao}}</h4>
    </li>
</ul>

@stop