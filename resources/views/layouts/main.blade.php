<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpustakaan</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<style>
   .main{
    height: 100vh;
   }

   .sidebar{
    background-color: #FF8E9E;
    color:white;
    padding: 30px 30px;
   }

   .sidebar a{
    text-decoration: none;
    display: block;
    color: white;
    padding: 20px 40px;
   }

   .sidebar a:hover{
    background-color: #FB2576;
   }

   .content{
    padding: 10px;
   }
 </style>
<body>
    <div class="main d-flex flex-column justify-content-between">
      <!-- Nav -->
    <nav class="navbar navbar-dark navbar-expand-lg bg-danger opacity-50">
        <div class="container">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Rents books</a> 
          <button class="navbar-toggler" type="button" 
          data-bs-toggle="collapse" 
          data-bs-target="#navbarSupportedContent" 
          aria-controls="navbarSupportedContent" aria-expanded="false" 
          aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>
      <!-- End Nav -->
      <!-- Content -->
      <div class="body main h-100" style="background-color: white;">
        <div class="row g-0 h-100">
            <div class="sidebar col-2 collapse d-lg-block">
                <a href="/dashboard" class="i class=bi bi-house-check p-2">Dashboard</a>
                <a href="/user" class="i class=bi bi-person-check-fill p-2">User</a>
                <a href="/book" class="i class=bi bi-book-half p-2">Books</a>
                <a href="/category" class="bi bi-tags-fill p-2">Category</a>
                <a href="/rent-log" class="bi bi-gear-fill p-2">Rent Logs</a>
                <a href="/" class="bi bi-box-arrow-right p-2">Logout</a>
                </div> 
                <div class="content col-10">
                   @yield('content')
                </div>
            </div>
        </div>

      <!-- End Content -->
    </div>



   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>