<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
 <h1>Todo list</h1>
 <form action="{{ route('store') }}" method="POST" autocomplete="off">
 @csrf
    <div class="input-group">
      <input type="text" name="content" class="form-control" placdeholder  ="Add your new todo">
      <button type="submit" class="btn btn-dark btn-sm px-4"><i class="fas fas-plus"></i></button>
    </div>
    </form>
    @if (count($todolists))
        <ul class="list-group list-group-flush" >
        @foreach($todolists as $todolist)
              <li  class="list-group-item"> 
                <form action="{{route('destroy' , $todolist->id) }}" method="POST">
                  {{$todolists->content}}
                 @csrf
                 @method('delete')
                  <button  type="submit" class="btn btn-link btn-sm float-end"> <i class="fas fa-trash" ></i> </button>
                    
                </form>
              </li>
         @endforeach
        </ul>
     @else
     <p class="text-center mt-3"> No task</p>
     @endif
      <div>
        @if(count($todlists))
           <div class="card-footer">
YOu have {{ count ($todolists)}}
            </div>
            @else 
        @endif
      </div>
</html>