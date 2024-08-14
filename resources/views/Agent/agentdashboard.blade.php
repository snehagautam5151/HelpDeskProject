<!DOCTYPE html>
<html>
<head>
  <title>Custom Auth in Laravel</title>
  {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
  {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>--}}
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.17/js/bootstrap-select.min.js"></script>
  
</head>



<body>
  
  <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
    <div class="container">
      <a class="navbar-brand mr-auto" href="#">Help Desk</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register-user') }}">Register</a>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link" href="{{ route('signout') }}">Logout</a>
        </li>
        @endguest
      </ul>
    </div>
    
    
    
  </div>
</nav>
<div class="container-fluid">
  <div class="row">
    <nav
    id="sidebarMenu"
    class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse"
    >
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a
          class="nav-link active"
          aria-current="page"
          href="{{ route('agent.index') }}"
          >New Tickets</a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('alltickets.index') }}"
          >All Tickets</a
          >
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link" href=""
          >Closed Tickets</a
          >
        </li> --}}
        <li class="nav-item">
          <a class="nav-link" href=""
          >Notifications</a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('signout') }}">Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div id="content-container">
      <h2>Welcome to the Agent dashboard, {{ Auth::user()->name }}!</h2>
      
    </div>
    <div>
      
      @yield('contentagent')
      {{-- <x-newtickets/> --}}
    </div>
  </main>
</div>
</div>




{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js"></script> --}}

</body>

</html>