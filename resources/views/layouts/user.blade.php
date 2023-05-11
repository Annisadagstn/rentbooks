<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example | @yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Rents Books</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">

</div>

<div class="row my-4 ms-5">
  <div class="col-lg-4 mb-3">
   
   <div class="card ms-5" style="width: 18rem;"  a href="#" class="btn btn-primary w-100">Read This Book</a>
          <img src="https://www.bukukita.com/babacms/displaybuku/109963_f.jpg" alt="..." style="max-height: 400px">
          <div class="card-body">
            <h5 class="card-title">Mariposa</h5>
            <p class="card-text"></p>
            <a href="#" class="btn btn-primary w-100">Read More</a>
          </div>
        </div>
  </div>
  <div class="col-lg-4 mb-3">
    
      <div class="card" style="width: 18rem;" a href="#" class="btn btn-primary w-100">Read This Book</a>
          <img src="https://i.pinimg.com/564x/4c/99/de/4c99dead7b29be058b475b0fac6cba1a.jpg" alt="..."  style="max-height: 400px ">
          <div class="card-body">
            <h5 class="card-title">Teluk Alaska 1</h5>
            <p class="card-text"></p>
            <a href="#" class="btn btn-primary w-100">Read More</a>
          </div>
        </div>
  </div>
  <div class="col-lg-4 mb-3">
   
      <div class="card" style="width: 18rem;"  a href="#" class="btn btn-primary w-100">Read This Book</a>
          <img src="https://i.pinimg.com/564x/02/06/bf/0206bf6ad1810e9d141b257437ba47b0.jpg" alt="..."  style="max-height: 400px ">
          <div class="card-body">
            <h5 class="card-title">Tripped</h5>
            <p class="card-text"></p>
            <a href="#" class="btn btn-primary w-100">Read More</a>
          </div>
        </div>
  </div>
</body>
</html>