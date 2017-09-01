<!DOCTYPE html>
<html lang = "{{ app()->getLocale() }}">
<head>
    <title>Predios Salas</title>
</head>
<body>

<h1 align="center">Universidade Federal Rural de Pernambuco</h1>
<h2 align="center">Unidade Acadêmica de Garanhuns</h2>
<br/>
<h3 align="center">Lista Solicitações cadastradas no <em>Patrimônio</em></h3>
<br/>

<table border="1" align="center" width="100%">

    <tr>
        <td>Nome</td>
        <td>Cargo</td>
        <td>Curso</td>
        <td>Data</td>
        <td>Descricao</td>
    </tr>       
        @foreach ($solicitacao as $s)
				<tr>
            <td>{{$s->nome}}</td>
            <td>{{$s->cargo}}</td>
            <td>{{$s->curso}}</td>
            <td>{{$s->data}}</td>
            <td>{{$s->descricao}}</td>
            </tr>
            @endforeach
</table>


</body>
</html>