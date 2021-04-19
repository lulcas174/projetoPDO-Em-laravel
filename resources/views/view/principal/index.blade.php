    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Meu css-->
    <link href = {{asset('css/style.css')}} rel="stylesheet">
    <!-- fontawsome -->
    <script src="https://kit.fontawesome.com/27c6a2b325.js" crossorigin="anonymous"></script>
    <title>index</title>
    </head>
    <body>
        <div class="body-colorir">
        <div class = "container">
        <div class="content_formulario">
            <h1>Lista de tarefas</h1>
            <form class="formulario" action="{{route('tarefa_insert')}}" method="POST">
            @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="tarefa">
                    <label for="floatingInput">Tarefa</label>
                <div class = "butao">
                <button class="btn btn-success">adicionar</button>
                </div>
                </div>
            @foreach ( $lista as $list)
                <td><br>{{$list['tarefa']}}
                <a  href="{{route('tarefa_delete',$list['id'])}}"><i class="fas fa-trash-alt"></a></i>
                <a  href="{{route('tarefa_view',$list['id'])}}"><i class="fas fa-edit"></a></i>
            </td>
            @endforeach
        </form>
        </div>
        </div>
        </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>
    </html>
