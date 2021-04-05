<!DOCTYPE html>
<html lang="en">
<head>
    <title>Alterar Tarefa</title>
</head>
<body>
    <form action="{{route('tarefa_update',['id'=> $lista->id])}}" method="post">
        @csrf
        @method('PUT')
    <input type="text" value="{{$lista->tarefa}}" placeholder="Altere sua tarefa" name="tarefa">
    <input type="hidden" value="{{$lista->id}}" name="id">
    <button>Alterar</button>
</form>
</body>
</html>
