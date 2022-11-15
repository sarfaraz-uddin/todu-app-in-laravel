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
    <title>Document</title>
</head>
{{$Sn=1}}
<body>
    <h1 style="text-align: center">Todo List</h1><br><br>
    <div class="container">
        <form action="{{route('saveTodo')}}" method="post" style="text-align: center">
            @csrf
            <input type="text" placeholder="Enter your todo" name="todo" style="width: 80%">
            <button type="submit">Add</button>
        </form>
    </div>
    <br>
    <br>
<div class="container">            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    @foreach($list as $value)
    <tr>
        <td>{{$Sn++}}}</td>
        <td>{{$value->title}}</td>
        <td>
            <a href="/edit/{{$value->id}}" class="btn btn-success">Edit</a>
        </td>
        <td>
            <a href="/delete/{{$value->id}}" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    @endforeach
    </tbody>
  </table>
</div>
    
</body>
</html>