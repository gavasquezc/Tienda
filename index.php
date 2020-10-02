<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  	<link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/tienda.css">

	<title>Web</title>
</head>

<body>

<nav class="navbar navbar-expand-md sticky-top navbar-light" style="background-color: #ddeeff;" >
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="submenu">
         <img src="imagenes/shopping-cart.png" width=33 id="img-carrito">
            <div id="carrito">

                <table id="lista-carrito" class="u-full-width">
                    <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>

                <a href="#" id="vaciar-carrito" class="button u-full-width">Vaciar Carrito <img class="img-thumbnail" src="imagenes/vacio.png" width="35" height="35"></a>
             </div>
        </li>

    </ul>

  </div>
</nav>

<!-- fin nav bar -->



<div id="hero">
        <div class="container">
            <div class="row">
                <div class="six columns">
                    <div class="contenido-hero">
                    	<img src="imagenes/home_banner.jpg" class="img-fluid" alt="Responsive image">
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- fin banner -->

<div id="lista-cursos" class="container">
    <h1 id="encabezado" class="encabezado" style="text-shadow: 1px 2px #999;">Libros en Línea</h1>
    <div class="row">
	<div class="card-group">
	  	<div class="card">
            <img class="card-img-top img-thumbnail articulo" src="imagenes/libro3.jpg" alt="Card image cap">
            <div class="card-body">
                <div class="info-card">
                        <h4>Literatura</h4>
                        <p>Libros</p>
                        <img class="card-img-top img-thumbnail articulo" src="imagenes/libro3.jpg" alt="Card image cap" hidden="">
                        <p class="precio"><span class="u-pull-right ">$15</span></p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="1">Agregar
                            Al Carrito <img class="img-thumbnail" src="imagenes/agrega.png" width="35" height="35"></a>
                    </div>
            </div>
        </div>

		<div class="card">
            <img class="card-img-top img-thumbnail articulo" src="imagenes/libro2.jpg" alt="Card image cap">
            <div class="card-body">
                <div class="info-card">
                        <h4>Música</h4>
                        <p>Libros</p>
                        <img class="card-img-top img-thumbnail articulo" src="imagenes/libro2.jpg" alt="Card image cap" hidden="">
                        <p class="precio"><span class="u-pull-right ">$15</span></p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="2">Agregar
                            Al Carrito <img class="img-thumbnail" src="imagenes/agrega.png" width="35" height="35"></a>
                    </div>
            </div>
        </div>

		<div class="card">
            <img class="card-img-top img-thumbnail articulo" src="imagenes/libro3.jpg" alt="Card image cap">
            <div class="card-body">
                <div class="info-card">
                        <h4>Misterio</h4>
                        <p>Libros</p>
                        <img class="card-img-top img-thumbnail articulo" src="imagenes/libro3.jpg" alt="Card image cap" hidden="">
                        <p class="precio"> <span class="u-pull-right ">$15</span></p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="3">Agregar
                            Al Carrito <img class="img-thumbnail" src="imagenes/agrega.png" width="35" height="35"></a>
                    </div>
            </div>
        </div>
	</div>


    <div class="card-group">
        <div class="card">
            <img class="card-img-top img-thumbnail articulo" src="imagenes/libro4.jpg" alt="Card image cap">
            <div class="card-body">
                <div class="info-card">
                        <h4>Universidad</h4>
                        <p>Cuadernos</p>
                        <img class="card-img-top img-thumbnail articulo" src="imagenes/libro4.jpg" alt="Card image cap" hidden="">
                        <p class="precio"> <span class="u-pull-right ">$15</span></p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="4">Agregar
                            Al Carrito <img class="img-thumbnail" src="imagenes/agrega.png" width="35" height="35"></a>
                    </div>
            </div>
        </div>

        <div class="card">
            <img class="card-img-top img-thumbnail articulo" src="imagenes/libro2.jpg" alt="Card image cap">
            <div class="card-body">
                <div class="info-card">
                        <h4>Juvenil</h4>
                        <p>Cuadernos</p>
                        <img class="card-img-top img-thumbnail articulo" src="imagenes/libro2.jpg" alt="Card image cap" hidden="">
                        <p class="precio"><span class="u-pull-right ">$15</span></p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="5">Agregar
                            Al Carrito <img class="img-thumbnail" src="imagenes/agrega.png" width="35" height="35"></a>
                    </div>
            </div>
        </div>

        <div class="card">
            <img class="card-img-top img-thumbnail articulo" src="imagenes/libro4.jpg" alt="Card image cap" >
            <div class="card-body">
                <div class="info-card">
                        <h4>Infantil</h4>
                        <p>Cuadernos</p>
                        <img class="card-img-top img-thumbnail articulo" src="imagenes/libro4.jpg" alt="Card image cap" hidden="">
                        <p class="precio"><span class="u-pull-right ">$30</span></p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="6">Agregar
                            Al Carrito <img class="img-thumbnail" src="imagenes/agrega.png" width="35" height="35"></a>
                    </div>
            </div>
        </div>





    </div>
	</div>
</div>





<footer class="jumbotron text-center">
  <div class="container">
    <p style="color:#888">Elaborado por <a href="#">Génesis Vásquez</a></p>
    </div>
  </footer>

































</body>

</html>
<script src="assets/bootstrap/js/jquery.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

<script src="assets/bootstrap/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/tienda.js"></script>

<style>

.nav-link{

color:white;

}

</style>