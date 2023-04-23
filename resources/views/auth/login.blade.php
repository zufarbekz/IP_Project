
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <title>Sneakers Login</title>

    <link rel="icon" href="img/trainers.png" type="image/png" sizes="16x16">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>

<section class="side">
    <img src="./img/login.svg" alt="">
</section>

<section class="main">
<div class="login-container">
    <p class="title">Login</p>
    <div class="separator"></div>


        <form class="login-form" action="{{ route('login') }}" method="post">
            @csrf

            <div class="form-control">

                <label for="email"></label>
                <input type="email" name="email" placeholder="Username"  {{ old('email') }}" id="email">
                <i style="margin: 10px 5px"  class="fas fa-user"></i>@error('email')
                <div class="inline_error" style="color: red; font-size: small">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-control">
                <label for="password"></label>
                <input type="password" name="password" placeholder="Password" {{ old('password') }}" id="password">
                <i style="margin: 10px 5px" class="fas fa-unlock-alt"></i>
                @error('password')
                <div class="inline_error" style="color: red; font-size: small">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-control">
                <input type="submit" value="Login" class="login-btn">
                <a href="{{ route('register') }}" class="register">Register</a>
            </div>

        </form>

</div>
</section>
</body>






