<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="http://localhost/Tienda/resources/css/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>inicio</title>

</head>
<style>
  
</style>

<body>
    <div class="container-fluid  barra-arriba">
        <div class="row ">
            <div class="col-11"></div>
            <div class="col align-self-end">
                <nav aria-label=" breadcrumb nav1">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item active" aria-current="page"><a href="#"><i class="bi bi-person-fill"></i> LOGIN</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="text-center">
                <img src="http://localhost/Tienda/resources/views/img/logo.png" style="width: 175px; height: 175px;" class="rounded" alt="...">
            </div>
            
        </div>
    </div>

    @section('barra_menu')
    <ul class="nav justify-content-center barra-menu">
  <li class="nav-item ">
    <a class="nav-link active" aria-current="page" href="#">HOME</a>
  </li>
  <li class="nav-item dropdown ">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">CATEGORIAS</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">TOPS</a></li>
      <li><a class="dropdown-item" href="#">VESTIDOS</a></li>
      <li><a class="dropdown-item" href="#">ROPA DE DEPORTE</a></li>
      <li><a class="dropdown-item" href="#">CAMISETAS</a></li>
      <li><a class="dropdown-item" href="#">BLUSAS</a></li>
      <li><a class="dropdown-item" href="#">PANTALONES</a></li>
      <li><a class="dropdown-item" href="#">SHORT</a></li>
      <li><a class="dropdown-item" href="#">PIJAMA</a></li>
      <li><a class="dropdown-item" href="#">FALDAS</a></li>
      <li><a class="dropdown-item" href="#">BIKINIS</a></li>
    </ul>
  </li>
  <li class="nav-item ">
    <a class="nav-link" href="#">PRECIOS</a>
  </li>
  <li class="nav-item ">
    <a class="nav-link" href="#">MEJORES VALORADOS</a>
  </li>
 
</ul>
    @stop
    @yield('barra_menu')
    <br>
    <br>

    <div class="row">
        <div class="col-3">

        </div>
        <div class="col-6 " >
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="http://localhost/Tienda/resources/views/img/logo.png"  class="d-block w-100" alt="..." style="width: 70%; height:auto">>
    </div>
    <div class="carousel-item">
      <img src="http://localhost/Tienda/resources/views/img/promo1.png" class="d-block w-100" salt="..." style="width: 70%; height:600px">
    </div>
    <div class="carousel-item">
      <img src="http://localhost/Tienda/resources/views/img/promo2.png" class="d-block w-100" alt="..." style="width:70%; height:600px">>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>