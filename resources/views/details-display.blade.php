
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
      
<div class="container">
<div class="container">
    <div class="text-center">
    <h1 class="text-primary"> Datbasedetails</h1>
    </div>
    <div class="float-right">
  
    <button type="button" class="btn btn-primary">Add</button>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Email</th>
                <th>Password</th>
                <th>confirmpassword</th>
                <th>Address</th>
                <th>Date</th>
                <th>Gender</th>
            </tr>
        </thead>
        <tbody>
        @foreach($details as $details)
                
            <tr>
               
                <td>{{$details->email}}</td>
                <td>{{$details->password}}</td>
                <td>{{$details->confirmpassword}}</td>
                <td>{{$details->address}}</td>
                <td>{{$details->date}}</td>
                <td>{{$details->Gender}}</td>
              
                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
  </body>
</html>