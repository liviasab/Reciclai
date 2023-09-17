<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<span class="edit">
    <h1>EDITANDO:</h1>
    <h1>{{$empresa->nome}}</h1>
</span>

<form action="{{route('empresa.edit', $empresa->id)}}" method="POST" id="formulario">
    @csrf
    @method('PATCH')
    <input type="text" name="nome" placeholder="nome" value="{{$empresa->nome}}">
    <input type="text" name="cnpj" placeholder="cnpj" value="{{$empresa->cnpj}}">
    <input type="text" name="cep" placeholder="cep" value="{{$empresa->cep}}">
    <input type="text" name="status" placeholder="status" value="{{$empresa->status}}">
    <input type="submit" value="Editar" class="btn">
</form>
<style>
    #formulario{
        display:flex;
        flex-direction: column;
        align-items:center;
    }
    #formulario > input{
        border-radius:25px;
        outline:none;
        border:3px solid #00B830;
        width:450px;
        height:60px;
        font-size:15px;
        margin-top:10px;
        box-shadow:0 3px 4px gray;
    }
    #formulario > .btn{
        background-color: #00B830;
        border:3px solid #3BEC69;
        color:white;
        font-weight: bold;
        font-size: 20px;
    }
    .edit{
        text-align:center;
        color:#00B830;
    }
    .edit h1:nth-child(2){
        color:black;
    }
</style>
</body>
</html>