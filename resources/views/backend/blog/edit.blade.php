<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>

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


  <form action="{{route('admin.blog.update' , $data->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="title">Title:-</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="{{$data->title}}">
    </div>
    <div class="form-group">
      <label for="description"> Description:-</label>
    <textarea  class="form-control" id="description" name="description" placeholder="Write something.."  value="{{$data->description}}">{!!$data->description!!}</textarea>
      </div>
    <div class="form-group">
    <label for="image">Image:-</label>
    <input type="file" id="image" name="image" >

    </div>
    <button type="submit" class="btn btn-success">Submit</button>
  </form>
</div>
<script>
    ClassicEditor
        .create( document.querySelector( '#description' ) )
        .catch( error => {
            console.error( error );
        } );
</script>


</body>
</html>
