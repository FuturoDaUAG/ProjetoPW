<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Cadastrar Servidor</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>
<form action="/servidor/salvar" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    @if (count($errors) > 0)
        <div class=”alert alert-danger”>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
    @endif

    Nome: <input type="text" name="nome"/>
    Cargo: <input type="text" name="cargo"/>
    Matrícula: <input type="text" name="matricula"/>
    <input type="hidden" name="usuario_id" value="1" />

    <br/>
    <p>
        <input type="submit" value="Cadastrar"/>
        <a href="/servidor/listar"> Visualizar Servidores</a>
    </p>
</form>

<br/><br/>

</body>
</html>