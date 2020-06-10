<?php
 //coneccion con el servidor
 $servidor="localhost";
 $usuario="root";
 $clave="";
 $baseDeDatos="usuarios2";
  $enlace =
  mysqli_connect($servidor, $usuario,$clave,$baseDeDatos)
  //verificacion de la coneccion
  if(!$enlace){
      echo"no se pudo conectar al servidor";
     }
  }
  //recuperar las variables
  $correo=$_POST['iCorreo'];
  $nombre=$_POST['iNombre'];
  $contraseña=$_POST['iContraseña'];
 // sentecia sql
 $sql="INSERT INTO datos VALUES ('iCorreo','iNombre','iContraseña')";
 //ejecutar la sentecia sql
 $ejecutar=mysql_query($sql);
 //verificar ejecucion
 if(!$ejecutar){
     echo"hubo un error";
 }else{
     echo"datos guardados  correctamente <br><a href='Registrate.php'>volver</a>";
 }
?>



