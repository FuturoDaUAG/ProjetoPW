@extends('layout.principal')
@section('conteudo')
<h1>Detalhamento de Bem Permanente</h1>
<ul>
    <li>
        <b> Patrimômio: </b>{{ $patrimonio->descricao }}
    </li>
    <li>
        <b> Valor: </b>{{ $patrimonio->valor }}
    </li>
    <li>
        <b> Número do Patrimônio:</b> {{ $patrimonio->numeropatrimonio }}
    </li>
    <li>
        <b> Número do Patrimônio Antigo </b> {{ $patrimonio->numeropantigo}}
    </li>
    <li>
        <b> Marca: </b> {{ $patrimonio->marca->descricao}}
    </li>
</ul>
@stop