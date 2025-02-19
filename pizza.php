

<?php

    $usuario = "root"; //en este caso root por ser localhost
    $password = "";  //contraseña por si tiene algun servicio de hosting 
    $servidor = "localhost"; //localhost por lo del xampp
    $basededatos ="pizza"; //nombre de la base de datos


//por si hay errors de conexion un mensaje "Error con el servidor de la Base de datos".
$conexion = mysqli_connect  ($servidor,$usuario,"") or die ("Error con el servidor de la Base de datos"); 


//por si hay errors de conexion un mensaje "Error al conectarse a la Base de datos".
$db = mysqli_select_db($conexion, $basededatos) or die ("Error conexion al conectarse a la Base de datos");


        //recuperar las variables
    $nombre=$_POST['nombre']; //name="nombre"
    $tamaño=$_POST['tamaño']; //name="correo"
    $cantidad=$_POST['cantidad']; //name="mensaje"
    $direccion=$_POST['direccion']; //name="mensaje"
    $telefono=$_POST['telefono']; //name="mensaje"
    $tipopan=$_POST['tipopan']; //name="mensaje"
    $tipopizza=$_POST['tipopizza']; //name="mensaje"
    $ingredientes=$_POST['ingredientes']; //name="mensaje"


    //sentencia sql
    $sql="INSERT INTO datos VALUES ('$nombre','$tamaño','$cantidad','$direccion','$telefono','$tipopan', '$tipopizza', '$ingredientes')"; //manda a traer los valores de '$nombre','$correo','$mensaje'
    
    //ejecutamos la centencia de sql
    $ejecutar=mysqli_query($conexion, $sql);


    //verificacion de la ejecucioon
    if(!$ejecutar){
    	 echo '<script>alert("huvo algun error")</script> ';////si algo sale mal mandanos este mensaje
         echo "<script>location.href='compra.php'</script>";	
    }else{
        echo '<script>alert("Su orden ya esta en camino")</script> ';//si todo sale bien mandanos este mensaje
        
        echo "<script>location.href='tiempo.php'</script>";	
    }
     
?>﻿