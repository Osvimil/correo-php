<?php

if(isset($_POST['nombre']) && !empty($_POST['nombre']) &&
   isset($_POST['correo']) && !empty($_POST['correo'])&&
   isset($_POST['telefono']) && !empty($_POST['telefono']) &&
   isset($_POST['mensaje']) && !empty($_POST['mensaje']))
{
   
$destino = 'oswaldoadidas@hotmail.com';
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$contenido = "Nombre: " . $nombre. "\nCorreo: " . $correo . "\nTelefono: ". $telefono . "\nMensaje: " . $mensaje;
            
    
    mail($destino,'Contacto',$contenido);
    header('Location:gracias.html');
  }else{
    echo "problemas checa";
}


?>