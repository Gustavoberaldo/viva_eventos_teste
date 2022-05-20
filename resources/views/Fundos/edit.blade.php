<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar um fundo</title>
</head>
<body>
    <form action="{{ route('alterar_fundo', ['cod_fundo' => $fundo->cod_fundo]) }}" method="post">
        @csrf
        <a href="{{ url('/') }}">Voltar</a> <br>
        <label for="">Nome do fundo</label> <br>
        <input type="text" name="nome_fundo" value="{{ $fundo->nome_fundo }}" maxlength="80"> <br>
        <label for="">Quantidade de integrantes</label> <br>
        <input type="number" name="qdt_integrantes" value="{{ $fundo->qdt_integrantes }}"> <br>
        <label for="">Status OK</label> <br>
        Sim<input type="radio" name="status" id="" value="1" {{ ($fundo->status=="1")? "checked" : "" }}> 
        Não<input type="radio" name="status" id="" value="0" {{ ($fundo->status=="0")? "checked" : "" }}> <br>
        <button>Salvar</button> <br>
    </form>
</body>
</html>