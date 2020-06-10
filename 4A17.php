<?php
include "conexion.php";
	$nombre = $_POST['iNombre'];
        $correo = $_POST['iCorreo'];
        $contraseña = $_POST['iContraseña'];
	$vBoton = $_POST['enviar'];
	$resConectar = conecta();
	$sqlTipo="SELECT iCorreo,iNombre,iContraseña FROM usuario
		WHERE tipo=´$correo´;";
	$sqlCveTipo = mysql_query($sqlTipo,$resConectar);
	$resulCveTipo = mysql_fetch_array($sqlCveTipo);
	$vCveTipo = $resulCveTipo["icorreo"];

    if (isset($_POST['enviar'])) {
       
        $insertarDatos = "INSERT INTO clientes (correo, nombre, contraseña,) VALUES(
                                                    '$correo', 
                                                    '$nombre',
                                                    '$contraseña')";

        $ejecutarInsertar = mysqli_query($insertarDatos,$resConectar);

        if(!$ejecutarInsertar){
            echo "<SCRIPT LANGUAJE='Javascript' TYPE='txt/Javascript'>
            alert("Ocurrio un error...")
            Javascript:history.back(1)
            </SCRIPT>";
        } else{
             echo "<SCRIPT LANGUAGE='Javascript' TYPE='text/Javascript'>
                alert("Mensaje enviado")
                window.location='../index.html'
                </SCRIPT>";
        }
    } else{
        $modi="UPDATE clientes SET tipoH = ´$vNomArea´ WHERE cveA = ´$vNomArea´;";
                    $modificar=mysql_query($modi,$resConectar);
                    if(!$modificar){
                    echo "<SCRIPT LANGUAJE = 'Javascript' TYPE='text/Javascript'>
                    alert("Ocurrio un error...No se guardo el registro")
                    Javascript:history.back(1)
                    </SCRIPT>";
                    }
        else{
            echo "<SCRIPT LANGUAJE='Javascript' TYPE='text/Javascript'>
            alert("Registro modificado")
            window.location='contacto.php'
            </SCRIPT>";
        }
    }
?>
