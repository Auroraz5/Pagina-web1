<?php
//coneccion con el servidor
$servidor="localhost";
$usuario="root";
$clave="";
$baseDeDatos="mydb";
 $enlace =
 mysqli_connect($servidor, $usuario,$clave,$baseDeDatos);
 //verificacion de la coneccion
 if(!$enlace){
     echo"no se pudo conectar al servidor";
    }


 ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	<title>Cromatic</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-sacale=1.0">
	<meta http-equiv="x-ua-compatible" content="ie-edge">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>
    <header > 
		<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
			  <div class="carousel-item active">
				  <img src="img/logo-playera chromatic.jpg" class="d-block w-100" alt="logo">
			  </div>
			  <div class="carousel-item">
				<img  src="img/_DSC0188.JPG" class="d-block w-100 " alt="foto1">
			  </div>
			  <div class="carousel-item">
				<img  src="img/_DSC0075.JPG" class="d-block w-100" alt="foto2">
			  </div>
			</div>
		  </div>
    </header>
    <br><br>
    
    <div class="barranav">
        <div class="navegador" id="navbarToggleExternalContent">
             <div class="bg-dark p-4">
                <div class="btn-group-vertical" role="group" aria-label="">
                <a href="Usuario.html">
                    <button type="submit" class="btn btn-dark">
                        <svg class="bi bi-person-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" alt="usuario">
                            <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                </a>
                <a href="Portafolio.html">
                    <button type="button" class="btn btn-dark">
                        <svg class="bi bi-camera" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" alt="camara">
                            <path d="M9 5C7.343 5 5 6.343 5 8a4 4 0 014-4v1z"/>
                            <path fill-rule="evenodd" d="M14.333 3h-2.015A5.97 5.97 0 009 2a5.972 5.972 0 00-3.318 1H1.667C.747 3 0 3.746 0 4.667v6.666C0 12.253.746 13 1.667 13h4.015c.95.632 2.091 1 3.318 1a5.973 5.973 0 003.318-1h2.015c.92 0 1.667-.746 1.667-1.667V4.667C16 3.747 15.254 3 14.333 3zM1.5 5a.5.5 0 100-1 .5.5 0 000 1zM9 13A5 5 0 109 3a5 5 0 000 10z" clip-rule="evenodd"/>
                            <path d="M2 3a1 1 0 011-1h1a1 1 0 010 2H3a1 1 0 01-1-1z"/>
                        </svg>
                    </button>
                </a>
                <a href="Contacto.html">
                    <button type="button" class="btn btn-dark">
                        <svg class="bi bi-phone" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M11 1H5a1 1 0 00-1 1v12a1 1 0 001 1h6a1 1 0 001-1V2a1 1 0 00-1-1zM5 0a2 2 0 00-2 2v12a2 2 0 002 2h6a2 2 0 002-2V2a2 2 0 00-2-2H5z" clip-rule="evenodd"/>
                            <path fill-rule="evenodd" d="M8 14a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                          </svg>
                    </button>
                </a>
                <a href="Agenda.html">
                    <button type="button" class="btn btn-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" fill="currentColor" alt="agenda">
                            <path d="M0 0h24v24H0V0z" fill="none"/>
                            <path d="M21 13H2v8h19v-8zm0-10H2v8h19V3z"/>
                        </svg>
                    </button>
                </a>
                <a href="Conocenos.html">
                    <button type="button" class="btn btn-dark">
                        <svg class="bi bi-info-circle-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 16A8 8 0 108 0a8 8 0 000 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                          </svg>
                    </button>
                </a>
                </div>
             </div>
        </div>
    <nav class="navbar navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    </div>
    <section>
        <article>
           <div class="container">
               <div class="row">
                 <div class="col"><br> DE LOS SERVICIOS QUE SE OFRECEN ------------------------------
                   --------------------------------------------------------------------------------
                   ---------------------------------------------------------------------------------
                   ----------------------------------------------------------------------------------
                   ----------------------------------------------------------------------------------
                   ----------------------------------------------------------------------------------
                   -----------------------------------------------------------------------------------
                   -----------------------------------------------------------------------------------
                   ---------------------------</div>
                
                 <div class="w-100"></div>
               </div>
             </div>
        </article>
    </section>
    <br>
    <div class="container">
        <form action="" method="POST">
            <div class="form-group">
              <label for="exampleInputEmail1">Correo electronico</label>
              <input type="email" name="cor"  class="form-control" id="correo" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="text"  name="nom" class="form-control" id="nombre" aria-describedby="emailHelp">
              </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Contraseña</label>
              <input type="password"  name="con" class="form-control" id="contraseña">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Telefono</label>
                <input type="number"   name="tel" class="form-control" id="telefono">
              </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit"  name="sum" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>



















    <script src="js/jquery-3.4.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php
//recuperar las variables
 if (isset($_POST['sum'])) {
 $correo=$_POST['cor'];
 $nombre=$_POST['nom'];
 $contraseña=$_POST['con'];
 $telefono=$_POST['tel'];
// sentecia sql
$sql="INSERT INTO usuario (correo, nombre, contraseña, telefono) VALUES ('cor','nom','con','tel')";
//ejecutar la sentecia sql
$ejecutar=mysqli_query($enlace, $sql);
//verificar ejecucion
if(!$ejecutar){
    echo"hubo un error";
}
}
?>