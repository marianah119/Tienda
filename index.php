<!DOCTYPE html>
<html lang="ES">
    <head>
        
        <script src="https://kit.fontawesome.com/458fc00363.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/styles.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Inter&family=Odibee+Sans&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Boca Juniors - Potrero digital</title>
    </head>
    <body>
        <!--Main contendrá todo el sitio web.-->
        <main role="main">
            <!--El header contendrá el menú-->
            <header role="header" class="headercontainer">
                <!--Menú-->
                <nav class="navbar navbar-expand-lg navbar-light" style="background-color: var(--second-color);">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img src="Imagenes/logo.png" alt="No image" width="40" class="d-inline-block align-text-top">
                        </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        <div class="collapse navbar-collapse" id="navbarNav" >
                            <div class="navbar-nav ms-auto"  > 
                                <a class="nav-link"style="color:var(--first-color);" href="#informacion">informacion</a>
                                <a class="nav-link"style="color:var(--first-color);" href="#Contacto">tienda</a>
                                <a class="nav-link" style="color:var(--first-color);"href="login.html">ADMINISTRADOR</a>
                                
                            </div>
                        </div>



                       <!-- <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">

                          <a href="login.html">Vendedores
                                                  </a>
                        </button>
                    </form> -->

                    </div> 
                    </div>
                </nav>
                <!--Fin del menú-->
            </header>
            <!--Fin del header-->

            <!--Este section contendrá el carrousel--> 
            <section role="carrousel-section" id="futbol" role="carrousel">
                <div id="carouselExampleDark" class="carousel carousel-light slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 0"></button>
                       
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="Imagenes/b1.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="title">BOCA CAMPEÓN 2022 </h5>
                                </div>
                        </div>
                       <div class="carousel-item" data-bs-interval="2000">
                            <img src="Imagenes/b2.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="title">BOCA CAMPEÓN DEL MUNDO</h5>
                                </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="Imagenes/diapo-2.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="title">La Bombonera</h5>
                                </div>
                        </div>
                      
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previo</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                    </button>
                </div>
                
            </section>
            <!--Fin del section-->

            <!-- section que contendrá las cards-->
            <section role="cards-section" id="informacion" class="container-fluid cards-background">
                <div class="row">
                    <!--Centro las columnas-->
                    <div class="col-12 col-md-3 mt-5 d-flex justify-content-center">
                        <!--Cada CARD será un articulo,
                        que estará dividida por su header y el cuerpo-->
                        <article class="cards card-A">
                            <header class="card-header">
                                <div class="circle-icon">
                                    <i class="fas fa-hand-holding-usd"></i>
                                </div>
                                <h3 class="title">Métodos de Pago</h3>
                            </header>
                            <div class="card-text">
                                <p class="text">
                                 Para comodidad del cliente en cada producto se dispone de un link de pago.
                                </p>
                            </div>
                        </article>
                    </div>
                    <div class="col-12 col-md-3 mt-5 d-flex justify-content-center">
                        <article class="cards card-B">
                            <header class="card-header">
                                <div class="circle-icon">
                                    <i class="fas fa-landmark"></i>
                                </div>
                                <h3 class="title">Política de cambios</h3>
                            </header>
                            <div class="card-text">
                                <p class="text">
                                    No realizamos cambios
                                </p>
                            </div>
                        </article>
                    </div>
                    <div class="col-12 col-md-3 mt-5 d-flex justify-content-center">
                        <article class="cards card-C">
                            <header class="card-header">
                                <div class="circle-icon">
                                    <i class="fas fa-bell"></i>
                                </div>
                                <h3 class="title">Contacto</h3>
                            </header>
                            <div class="card-text">
                                <p class="text">
                                    Por cualquier inconveniente o dudas puedes contactarnos a nuestro email bocasport@gmail.com                             
                                </p>
                            </div>
                        </article>
                    </div>
                    <div class="col-12 col-md-3 mt-5 d-flex justify-content-center">
                        <article class="cards card-D">
                            <header class="card-header">
                                <div class="circle-icon">
                                    <i class="	fas fa-undo"></i>
                                </div>
                                <h3 class="title">Talles</h3>
                            </header>
                            <div class="card-text">
                                <p class="text">
                                    Si el talle que usted desea no aparece lamentamos informale que no disponemos de otras tallas.
                                </p>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
            <!--Fin del section de cards-->
           
           






            <section class="page-section bg-primary text-white mb-0"  id="adminstrador">
                <div class="container" >
                    <!-- About Section Heading-->
                    <h2 class="page-section-heading text-center text-uppercase text-white">EL MAS GRANDE</h2>
                    <!-- Icon Divider-->
                 
                    <!-- About Section Content
                    <div class="row">
                        <div class="col-lg-4 ml-auto">
                            <p class="lead">La pilcha del mas grande al mejor precio</p>
                        </div>
                        <div class="col-lg-4 mr-auto">
                            <p class="lead">Se optó por el día doce del decimosegundo mes del año, desde 2012 -es decir, el 12/12/12- para darle a su hinchada el lugar que se merecen</p>
                        </div>
                        <div class="col-lg-4 mr-auto">
                            <p class="lead">La Primera, la Reserva y el Femenino, que se consagraron en estas últimas semanas, levantaron sus títulos en La Bombonera y festejaron el Día del Hincha de Boca.</p>
                        </div> -->
                    </div>
                    
                </div>
            </section>    

            <!-- COPIO DE B)-->
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                  <?php
                  // 1) Conexion
                  $conexion = mysqli_connect("localhost", "id19227323_titere", "SantaClarah119@");
                  mysqli_select_db($conexion, "id19227323_tite");

                  // 2) Preparar la orden SQL
                  // Sintaxis SQL SELECT
                  // SELECT * FROM nombre_tabla
                  // => Selecciona todos los campos de la siguiente tabla
                  // SELECT campos_tabla FROM nombre_tabla
                  // => Selecciona los siguientes campos de la siguiente tabla
                  $consulta='SELECT * FROM ropa';

                  // 3) Ejecutar la orden y obtenemos los registros
                  $datos= mysqli_query($conexion, $consulta);

                  //  recorro todos los registros y genero una CARD PARA CADA UNA
                  while ($reg = mysqli_fetch_array($datos)) {?>

                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen'])?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo ucwords($reg['marca']) ?></h5>
                                    <!-- Product price-->
                                  <h2>$<?php echo $reg['precio']; ?></h2>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">

                            <!--boton con link de pago que cargué en la base de datos-->
                                <!--<div class="text-center"> <?php echo $reg['link']; ?></div>-->
                               <br>
                                <!--boton que me lleva a la pagina del producto-->
                                <div class="">
                                  <a href="productos.php?id=<?php echo $reg['id'];?>"> <button type="button" name="button">Ver producto</button></a>
                                </div>
                            </div>
                        </div>
                    </div>

                  <?php } ?>
                </div>
                </div>
           
     

           










            <!--Inicio del footer-->
            <footer role="footer" id="Contacto" class="container-fluid footer-content">
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="d-none d-lg-block col-md-5 offset-1 d-flex align-items-center">
                        <div class="logoimg">
                            <a href="index.php" target="_blank">    
                                <img class="imglogo" src="Imagenes/logo-tienda.jpg" alt="No image"/>
                            </a>
                        </div>
                    </div>

                    <div class="col-12 col-md-5 d-flex justify-content-center">
                        <div class="social-networks d-flex justify-content-evenly">
                            <a href="https://www.facebook.com/BocaJuniors/" target="_blank">
                                <div class="circle-social fb">
                                        <i class="fab fa-facebook-f"></i>
                                </div>
                            </a>
                            <a href="https://www.instagram.com/bocajrsoficial/?hl=es-la" target="_blank">
                                <div class="circle-social insta">
                                    <i class="fab fa-instagram"></i>
                                </div>
                            </a>
                            <a href="https://twitter.com/BocaJrsOficial" target="_blank">
                                <div class="circle-social tw">
                                    <i class="fab fa-twitter"></i>
                                </div>
                            </a>
                            <a href="https://www.youtube.com/channel/UCRtB_RAtKH72CgVAKHFgdIw" target="_blank">
                                <div class="circle-social yt">
                                    <i class="fab fa-youtube"></i>
                                </div>
                            </a>
                        </div>
                    </div> 
                </div>
                <p class=text style="color: var(--first-color);" >  Derechos reservados 2022 &copy;- Hernandez Mariana </p>
            </footer>
            <!--Fin de footer-->
        </main>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>