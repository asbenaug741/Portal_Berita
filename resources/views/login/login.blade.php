<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- icon web -->
    <link rel="shortcut icon" href="logo/logo2.png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <title>BUTON | {{ $title }}</title>
</head>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color: #57A4FF;">
    <div class="container">
        <a class="navbar-brand ms-5" href="/">
            <img src="logo/logo.png" alt="logo" height="70em" class="d-inline-block align-text-top">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item ">
                    <a class="nav-link active" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/news">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/buletin">Buletin</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<body>
    <div class="login">
        <h1 class="text-center mt-5">LOGIN</h1>

        <form action='/login' method='post'>
            @csrf
            <div class="mb-3 mx-5">
                <label for="username">Username</label>
                <input type="username" name="username" class="form-control @error('username') is-invalid @enderror" id="exampleInputUsername1" placeholder="username" autocomplete="off">
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3 mx-5">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="password" autocomplete="off">
                @error('password')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <button type=" submit" class="btn btn-dark ms-5 mb-5" style="background-color:#57A4FF; border: 1px solid #57A4FF">Submit</button>
        </form>

        <div class="failed mt-3">
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-b5-dismiss="alert" aria-label="Close">
                    </button>
                </div>
            @endif
    
            @if(session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show text-center col-lg" role="alert">
                    {{ session('loginError') }}
                    
                </div>
            @endif
        </div>
    </div>

</body>

</html>