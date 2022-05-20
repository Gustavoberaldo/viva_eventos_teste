<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar um novo fundo</title>
</head>
<body>
    <form action="{{ route('registrar_fundo') }}" method="POST">
    @csrf
    <a href="{{ url('/') }}">Voltar</a> <br>
        <label for="">Nome do Fundo</label> <br>
        <input type="text" name="nome_fundo" id="" maxlength="80"> <br>
        <label for="">Quantidade de integrantes</label> <br>
        <input type="number" name="qdt_integrantes" id=""> <br>
        <label for="">Status OK</label> <br>
        Sim<input type="radio" name="status" id="" value="1"> 
        Não<input type="radio" name="status" id="" value="0"> <br>
        <button>Salvar</button> <br>
    </form>
</body>
</html>