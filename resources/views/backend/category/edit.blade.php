<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Blog Application</h2>
  <!-- validation error -->
  @if($errors->any())
<ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
@endif


  <form action="{{route('admin.category.update' , $data->id)}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="title">Title:-</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="{{$data->title}}">

    </div>
    <button type="submit" class="btn btn-success">Update</button>
  </form>
</div>

</body>
</html>
