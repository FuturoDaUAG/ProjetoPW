<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Edição Servidor</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>

<form action="/servidor/atualizar" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <input type="hidden" name="id" value="{{ $servidor->id }}" />

    Nome: <input type="text" name="nome" value="{{ $servidor->nome }}" />
    Cargo: <input type="text" name="cargo" value="{{ $servidor->cargo }}" />
    Matrícula: <input type="text" name="matricula" value="{{ $servidor->matricula }}" />

    <input type="submit" value="Atualizar" />
</form>

</body>
</html>