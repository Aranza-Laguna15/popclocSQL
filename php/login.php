<?php
session_start();
include('config.inc.php');
$error='';
if(isset($_POST['submit'])){
if(empty($_POST['correo']) || empty($_POST['contraseña'])){
print( "Error Correo o contraseña invalidos");
}else{

     $correo= $_POST['correo'];
     $contraseña = $_POST['contraseña'];
     
     $tsql="SELECT * FROM usuarios WHERE correo = '$correo'  AND contraseña = '$contraseña'";
     $res= $con->prepare($tsql);
     $res->execute($params);
     if($res == true){
    $_SESSION['valid_user'] = true;
    $_SESSION['correo'] = $correo;
    header('Location: intro-page.html');
}else{
    header('Location: error.html');
    die(print_r( sqlsrv_errors(), true));
}
}
 }

 ?>
