<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir um fundo</title>
</head>
<body>
    <form action="{{ route('excluir_fundo', ['cod_fundo' => $fundo->cod_fundo]) }}" method="post">
        @csrf
        <a href="{{ url('/') }}">Voltar</a> <br>
        <label for="">Excluir fundo?</label> <br>
        <input type="text" name="nome_fundo" value="{{ $fundo->nome_fundo }}" disabled> <br>
        <button>Sim</button>
    </form>
</body>
</html>