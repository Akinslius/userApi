<html lang="en">    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
     <!-- bootstrap css link -->  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  
</head>
<body>
<form method="GET" action="/api/user/login">
    <main>
        <div class="row">
            <div class="">
                <div class="form-outline">
                    <input type="text" placeholder="Email address" id="email" name="email">
                    <input type="password" placeholder="Password" id="password" name="password">
                    <button  type="submit" name="login">Login</button>
                    
                </div>
            </div>
        </div>
    </main>
</form>
</body>
</html>