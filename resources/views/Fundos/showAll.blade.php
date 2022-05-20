<!DOCTYPE html>
<html lang="en">
<style>
.container{
    display: flex;
    flex-direction: column;
}

.header{
    display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
}

.content{
    display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
}

.menu{

}
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos os fundos de formatura</title>
</head>
<body>
        <div class="container">
        <div class="menu">
        <a href="{{ url('fundos/novo/')}}">Novo Fundo</a>
        </div>
            <div class="header">
                <div>Nome do fundo</div>
                <div>Quantidade de integrantes</div>
                <div>status</div>
            </div>
            @foreach($fundo as $f)
            <div class="content">
                <div>{{$fundo[$loop->index]->nome_fundo}}</div>
                <div>{{$fundo[$loop->index]->qdt_integrantes}}</div>
                <div>{{$fundo[$loop->index]->status == 1 ? "OK" : '-'}}</div>    
                <a href="{{ url('fundos/editar/'.$fundo[$loop->index]->cod_fundo) }}">Editar</a>
                <a href="{{ url('fundos/excluir/'.$fundo[$loop->index]->cod_fundo) }}">Excluir</a>
            </div>
            @endforeach
        </div>
</body>
</html>