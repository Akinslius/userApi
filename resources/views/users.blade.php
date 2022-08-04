<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Get All User page</title>
    <!-- bootstrap css link -->  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-info mb-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">User Management System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
      </ul>
      
    </div>

  </div>
</nav>

<div class="container">
    <div class="row">
    <div class="col-md-8">
    <div class="text-center">
        <h2>Get All User in the Database</h2>
    </div>
<table class="table">
  <thead class="table-dark text-center">
  <tr>
      <th scope="col">S/N</th>
      <th scope="col">Name</th>
      <th scope="col">Email Address</th>      
      <th scope="col">Action </th>
    </tr>
    
  </thead>
  <tbody class="table-danger text-center">

    @foreach($all as $user)    
  <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>      
      <td>
      <div class="d-grid gap-2 d-md-block">
      <a href="{{url('api/user/update/'. $user->id)}}" ><button class="btn btn-info mb-3" type="button">Edit</button> </a>
      <a href="{{url('api/user/delete/'. $user->id)}}"><button class="btn btn-danger" type="button">Delete</button></a>
 
  
</div>
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>
<div class="text-center">
<a href="/createuser" class="btn btn-secondary">Create User</a>
</div>
<div class="">
<a href="/" class="btn btn-primary">Home</a>
</div>


    </div>

    </div> 
   
</div>
    
</body>
</html>