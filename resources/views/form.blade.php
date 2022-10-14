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
    <form action="{{url('/')}}/register" method="post">
    @csrf 
      
   <div class="container">
    <h1 class="text-center"> Registration </h1>
    <div class="form-check">
      <label class="form-check-label"> Name </label>
        <input type="text" class="form-check-input" name="name" id=""  checked>
        </div>

    <div class="form-check">
      <label class="form-check-label"> Email </label>
        <input type="email" class="form-check-input" name="email" id=""  checked>
        </div>

    <div class="form-check">
      <label class="form-check-label"> Password </label>
    <input type="password" class="form-check-input" name="password" id=""  checked>
         </div>
          <button type="submit" class="btn btn-primary">
          submit

         

   </div>
   </form>
  </body>
</html>