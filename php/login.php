<?php
session_start();
include('config.inc.php');
$error='';
if(isset($_POST['submit'])){
if(empty($_POST['correo']) || empty($_POST['contraseña'])){
$error= "Correo o contraseña invalidos";
}else{

     $correo= $_POST['correo'];
     $contraseña = $_POST['contraseña'];
     $con;
     $tsql="SELECT * FROM usuarios WHERE correo = '$correo'  AND contraseña = '$contraseña'";
     $res= $con->prepare($tsql);
     $res->execute($params);
     if($res == true){
    $_SESSION['valid_user'] = true;
    $_SESSION['correo'] = $correo;
    header('Location: intro-page.html');
    die();
}else{
    header('Location: error.html');
    die(print_r( sqlsrv_errors(), true));
}
//$con = sqlsrv_connect($host, $connectinfo);
 if($con == true){
 echo "Conexión establecida";
 header('Location: registro.php');
 }else{
 echo "Error al conectar la base de datos\n";
  die(print_r( sqlsrv_errors(), true));
 }
    $nombreusuario = $_REQUEST['nombreusuario'];
    $contraseña = $_REQUEST['contraseña'];
    $consulta = "SELECT * FROM usuarios WHERE nombreusuario = 'nombreusuario'  AND contraseña = 'contraseña'";
    $res = sqlsrv_query($con , $consulta);
    if($res == true){
    $_SESSION['valid_user'] = true;
    $_SESSION['nombreusuario'] = $nombreusuario;
    header('Location: intro-page.html');
    die();
}else{
    header('Location: error.html');
    die(print_r( sqlsrv_errors(), true));
}
