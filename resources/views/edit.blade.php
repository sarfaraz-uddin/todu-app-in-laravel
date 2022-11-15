<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Edit page</title>
</head>
<body>
    <div class="container">
        <h1 style="text-align: center">Edit the Todo</h1>
    </div><br<br>
    <div class="container">
        <form action="{{route('updateTodo')}}" method="post">
            @csrf
            <input style="width:80%" type="text" placeholder="Edit your todo" name="todo" value="{{$data->title}}">
            <input type="hidden" name="id" value="{{$data->id}}">
            <button type="submit">Update</button>
        </form>
    </div>
    
</body>
</html>