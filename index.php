<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpotyAPP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200&display=swap" rel="stylesheet">
</head>
<body>

    <header>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                  </li>
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-info" type="submit">Search</button>
                </form>
              </div>
            </div>
        </nav>

          <section id="banner">

            <div>
               <h1>BIENVENIDOS</h1>
               <a href="" class="btn btn-info">Conoce más</a> 
            </div>

          </section>

    </header>
    
    <main>
      
    <div class="container ">
        <div class="row">
            <div class="col-4 p-5">
            <form class="border p-5" action="index.php"  method="POST">
            <h3>CALCULA TU IMC</h3>
                <div class="mb-3">
                <label class="form-label">Peso(KG)</label>
                <input type="number" class="form-control" name="peso">

            </div>
            <div class="mb-3">
                <label  class="form-label">Altura(cm)</label>
                <input type="number" class="form-control" name="altura" >
            </div>
        
            <button type="Submit" class="btn btn-primary" name="botonCalcular">Calcular</button>
            </form>
            
            
            </div> 
            <div class="col-8">
            <img src="deportistas.png" alt=""  class="img-fluid w-100"
            </div>   
            </div>    
        </div>
    </main>



    <footer class="bg-secondary mt-5 fondofooter">
        <div class="container-fluid">
          <div class="row p-5">
            <div class="col-12 col-md-6 text-white text-end">

              <p>Sebastian Rubio Jimenez &copy;</p>
              <p>Medellín-Colombia</p>
              <p>rubiosebas4@gmail.com</p>
              <p>3113673481</p>

            </div>
            <div class="col-12 col-md-6 border-start">
              
              <a href="https://www.instagram.com/champagnepapikl/"><i class="fab fa-instagram iconos fa-5x"></i></a>
              <a href="https://www.facebook.com/bas.jime.12/"><i class="fab fa-linkedin iconos fa-5x"></i></a>
              <a href="https://www.linkedin.com/in/sebastian-rubio-jimenez-957042207/"><i class="fab fa-twitter iconos fa-5x"></i></a>
              
            </div>
          </div>
        </div>


    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7b642ec699.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/3675f85246.js" crossorigin="anonymous"></script> 
</body>
</html>