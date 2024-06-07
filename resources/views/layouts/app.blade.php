<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
  <title>@yield('title', 'Weather App')</title>
</head>

<body>
  <!-- header -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
    <div class="container">

    <!-- Navbar title -->
    <a class="navbar-brand" href="#">WEATHER</a>

    <!-- Navbar for small screens -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav ms-auto">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button class="btn btn-primary" type="button">Button</button>
                    </div>
                    <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                </div>
                <div class="vr bg-white mx-2 d-none d-lg-block"></div>
                <a class="nav-link active" href="#">Login</a>
                <a class="nav-link active" href="#">Register</a>
            </ul>
        </div>



        <!--<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav me-auto">
                
                <div class="vr bg-white mx-2 d-none d-lg-block"></div>
                @guest
                    <a class="nav-link active" href="#">Login</a>
                    <a class="nav-link active" href="#">Register</a>
                @else
                    
                @endguest
        <form id="search" action="#" method="POST">
            <a role="button" class="nav-link active"
               onclick="document.getElementById('search').submit();">Search</a>
            @csrf
        </form>
          <a class="nav-link active" href="#">Home</a>
          <a class="nav-link active" href="#">Products</a>
          <a class="nav-link active" href="#">Cart</a>
          <a class="nav-link active" href="#">About</a>
          <div class="vr bg-white mx-2 d-none d-lg-block"></div>
          @guest
          <a class="nav-link active" href="#">Login</a>
          <a class="nav-link active" href="#">Register</a>
          @else
          <a class="nav-link active" href="#">My Orders</a>
          
          @endguest-->
    </div>
  </nav>

  <div class="container my-4">
    @yield('content')
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
  </script>
</html>