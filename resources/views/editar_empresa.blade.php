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
    
<h1>EDITANDO: {{$empresa->nome}}</h1>

<form action="{{route('empresa.edit', $empresa->id)}}" method="POST">
    @csrf
    @method('PATCH')
    <input type="text" name="nome" placeholder="nome" value="{{$empresa->nome}}">
    <input type="text" name="cnpj" placeholder="cnpj" value="{{$empresa->tipo}}">
    <input type="text" name="cep" placeholder="cep" value="{{$empresa->tipo}}">
    <input type="text" name="status" placeholder="status" value="{{$empresa->tipo}}">
    <input type="submit" value="add">
</form>

</body>
</html>