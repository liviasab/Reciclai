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
    
<h1>EDITANDO: {{$pontocoleta->id}}</h1>

<form action="{{route('pontocoleta.edit', $pontocoleta->id)}}" method="POST">
    @csrf
    @method('PATCH')
    <input type="text" name="status" placeholder="status" value="{{$pontocoleta->status}}">
    <input type="text" name="latitude" placeholder="latitude" value="{{$pontocoleta->latitude}}">
    <input type="text" name="longitude" placeholder="longitude" value="{{$pontocoleta->longitude}}">
    <input type="submit" value="add">
</form>

</body>
</html>