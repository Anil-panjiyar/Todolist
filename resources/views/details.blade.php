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
  <form action="{{url('/')}}/details" method="post">
  @csrf 
<div class="container">
    <div class="text-center">
    <h1 class="text-primary"> Enter details</h1>
    </div>
    <button type="button" class="btn btn-primary">Add</button>
        
    
    <div class="form-group">
    <label >Email address</label>
    <input type="email" class="form-control" id=""  name="email" placeholder="Enter email">
    <span class="text-warning"> 
      @error('email')
      {{$message}}
      @enderror
    </span>
      </div>

    <div class="form-group">
    <label for>Password</label>
    <input type="password" class="form-control" id="" name="password" placeholder="Password">
    <span class="text-warning"> 
      @error('name')
      {{$message}}
      @enderror
    </span>
    </div>

    <div class="form-group">
    <label for>Confirm Password</label>
    <input type="password" class="form-control" id="" name="confirmpassword" placeholder="Password">
    </div>

    <div class="form-group">
    <label for>Address</label>
    <input type="text" class="form-control" id="" name="address" placeholder="Address">
    <span class="text-warning"> 
      @error('address')
      {{$message}}
      @enderror
    </span>
    </div>

     <div class="form-group">
     <label >Date:</label>
   <input type="date" class="form-control" name="date" placeholder="date">
    </div>  
     
     <div class="form-group">
     <label > Select you gender</label>
     <select name="Gender">
	<option value="Male">Male</option>
	<option value="Female">Feamle</option>
	<option value="Others">Others</option>
    </select>
     </div>

    
     <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
     
  
</div>
 
    </form>
      
    
  </body>
</html>