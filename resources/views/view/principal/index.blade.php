<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
</head>
<body>
    <h1>Lista de tarefas</h1>
    <form action="{{route('tarefa_insert')}}" method="POST">
        @csrf
        <input type="text" placeholder="insira sua tarefa" name="tarefa">
        <button>adicionar</button>
        <!--<a href="">Enviar</a> -->
    </form>
    @foreach ( $lista as $list)
        <td><br>{{$list['tarefa']}}</td>
        <a href="{{route('tarefa_delete',$list['id'])}}">Deletar</a>
        <a href="{{route('tarefa_view',$list['id'])}}">Editar</a>
    @endforeach
</body>
</html>
