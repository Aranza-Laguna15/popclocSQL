<?php

    $username = "popcloc@b63ioz7h2m"; 
    $password = "Manuel_$%&"; 
    $host = "b63ioz7h2m.database.windows.net,1433"; 
    $dbname = "databasepopcloc";
    
    $con = new PDO("sqlsrv:server=$host;Database=$dbname", $username, $password);
 
session_start();
$query="INSERT INTO usuarios (claveusuario,nombreusuario,correo,contrasena,sexo,edad) VALUES (:claveusuario, :nombreusuario, :correo, :contrasena, :sexo, :edad)";

$clave='PopClocUser';
$users_array=array(':claveusuario'=>$clave, ':nombreusuario'=>$_POST['nombre'],
':correo'=>$_POST['correo'],':contrasena'=>$_POST['contrasena'],':sexo'=>$_POST['sexo'],
':edad'=>$_POST['edad']);

 /*$res -> bindParam(':claveusuario',$clave,PDO::PARAM_STR);  
  $res -> bindParam(':nombreusuario',$_POST['nombre'],PDO::PARAM_STR);  
  $res -> bindParam(':correo',$_POST['correo'],PDO::PARAM_STR);  
  $res -> bindParam(':contrasena',$_POST['contrasena'],PDO::PARAM_STR);  
  $res -> bindParam(':sexo',$_POST['sexo'],PDO::PARAM_STR);  
  $res -> bindParam(':edad',$_POST['edad'],PDO::PARAM_INT);*/
if(isset($_POST['submit'])){
    try{
  $stmt=$con -> prepare ($query);
  $result=$stmt -> execute($users_array);
  
  header('Location: ../index.php'); 
    }catch (PDOException $ex) {
    print( "Error al insertar usuario: " );
    die(print_r($e->getMessage()));
    }
}
?>
