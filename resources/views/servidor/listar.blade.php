<!DOCTYPE html>
<html lang = "{{ app()->getLocale() }}">
<head>
    <title>Servidores</title>
</head>
<body>

<table border="1">
    @foreach ($servidores as $servidor)
        <tr>
            <td>{{ $servidor->id }}</td>
            <td>{{ $servidor->nome }}</td>
            <td>{{ $servidor->cargo }}</td>
            <td>{{ $servidor->matricula }}</td>
            <td>{{ $servidor->usuario_id }}</td>
            <td><a href="/servidor/recuperar/{{ $servidor->id }}">Editar</a> -
                <a href="/servidor/remover/{{ $servidor->id }}">Remover</a></td>
        </tr>
    @endforeach
</table>
<br/>
<a href="/servidor/adicionar">Adicionar um novo <b>Servidor</b></a>
<br/>
<!-- <a href="/index/">Home</a> -->

</body>
</html>