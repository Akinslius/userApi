<!DOCTYPE html>
<html>
<head>
<title>User API</title>
<!-- bootstrap css link -->  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<style>
  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
           
body {
    font-family:Georgia, 'Times New Roman', Times, serif;
    background-color: wheat;
    color:red ;
}

main {
    height: 90vh;
    width: 100vw;
    position: relative;
    margin: 0 auto;
}

footer {
    height: 10vh;
    background-color: #ffffff;
}

.row {
    display: flex;
    justify-content: space-around;
    align-items: center;
    width: 100%;
    max-width: 1000px;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
}

.colm-logo {
    flex: 0 0 50%;
    text-align: left;
}

.colm-form {
    flex: 0 0 40%;
    text-align: center;
}

.colm-logo img {
    max-width: 400px;
}

.colm-logo h2 {
    font: 26px;
    font-weight: 400;
    padding: 0 30px;
    line-height: 32px;
}

.colm-form .form-container {
    background-color: #ffffff;
    border: none;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1), 0 8px 16px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
    padding: 20px;
    max-width: 200px;
}

.colm-form .form-container input, .colm-form .form-container .btn-login {
    width: 100%;
    margin: 5px 0;
    height: 45px;
    vertical-align: middle;
    font-size: 16px;
}

.colm-form .form-container input {
    border: 1px solid #dddfe2;
    color: #1d2129;
    padding: 0 8px;
    outline: none;
}

.colm-form .form-container input:focus {
    border-color: #1877f2;
    box-shadow: 0 0 0 2px #e7f3ff;
}

.colm-form .form-container .btn-login {
    background-color: #1877f2;
    border: none;
    border-radius: 6px;
    font-size: 20px;
    padding: 0 16px;
    color: #ffffff;
    font-weight: 700;
}

.colm-form .form-container a {
    display: block;
    color: #1877f2;
    font-size: 14px;
    text-decoration: none;
    padding: 10px 0 20px;
    border-bottom: 1px solid #dadde1;
}

.colm-form .form-container a:hover {
    text-decoration: underline;
}

.colm-form .form-container .btn-new {
    background-color: #42b72a;
    border: none;
    border-radius: 6px;
    font-size: 17px;
    line-height: 48px;
    padding: 0 16px;
    color: #ffffff;
    font-weight: 700;
    margin-top: 20px; 
}

.colm-form p {
    font-size: 14px;
}

.colm-form p a {
    text-decoration: none;
    color: #1c1e21;
    font-weight: 600;
}

.colm-form p a:hover {
    text-decoration: underline;
}

.footer-contents {
    position: relative;
    max-width: 1000px;
    margin: 0 auto;
}

footer ol {
    display: flex;
    flex-wrap: wrap;
    list-style-type: none;
    padding: 10px 0;
}

footer ol:first-child {
    border-bottom: 1px solid #dddfe2;
}
           
footer ol:first-child li:last-child button {
    background-color: #f5f6f7;
    border: 1px solid #ccd0d5;
    outline: none;
    color: #4b4f56;
    padding: 0 8px;
    font-weight: 700;
    font-size: 16px;
}

footer ol li {
    padding-right: 15px;
    font-size: 12px;
    color: #385898;
}

footer ol li a {
    text-decoration: none;
    color: #385898;
}

footer ol li a:hover {
    text-decoration: underline;
}

footer small {
    font-size: 11px;
}
</style>
</head>
<body>
<nav class="navbar navbar-info navbar-expand-lg mb-5" >
<div class="container">
<a class="navbar-brand mr-auto" href="#">User API</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav">
@guest
<li class="nav-item">
<a class="nav-link" href="{{ url('/api/log') }}">Login</a>
</li>

<li class="nav-item">
<a class="nav-link" href="{{ url('api/users')}}">Get all Users</a>
</li>

@endguest
</ul>
</div>
</div>
</nav>
@yield('content')
<!-- <p> Okama </p> -->
<form method="POST" id="validateajax" action="/api/user/create" name="registerform">
              <div class="form-group">
              <label>Name</label>
                <input type="text"id = "name" name="name" value="{{ old('name') }}" class="@error('name') is-invalid @enderror form-control" />
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
                <label>Email</label>
                <input type="text" id= "email" name="email" value="{{ old('email') }}" class="@error('email') is-invalid @enderror form-control" />

                @error('email')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                @csrf
              </div>
               <div class="form-group">
                <label>Password</label>
                <input type="password" id="password" name="password"  class="@error('password') is-invalid @enderror form-control" />
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
               <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="password-repeat"  class="@error('password-repeat') is-invalid @enderror form-control" />
                @error('password-repeat')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>

              <div class="form-group m-5">
                <button class="btn btn-success">Register</button>
              </div>
            </form>
</body>
</html>