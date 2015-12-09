<?php
session_start();
    $username = "popcloc@b63ioz7h2m"; 
    $password = "Manuel_$%&"; 
    $host = "b63ioz7h2m.database.windows.net,1433"; 
    $dbname = "databasepopcloc";
    $users_array=array(':claveusuario'=>$clave, ':nombreusuario'=>$_POST['nombre'], ':correo'=>$_POST['correo'],':contrasena'=>$_POST['contrasena'],':sexo'=>$_POST['sexo'], ':edad'=>$_POST['edad']);
$clave='PopClocUser002';
$query="INSERT INTO usuarios (claveusuario,nombreusuario,correo,contrasena,sexo,edad) VALUES (:claveusuario, :nombreusuario, :correo, :contrasena, :sexo, :edad)";

if(isset($_POST['submit'])){
    try{
    $con = new PDO("sqlsrv:server=$host;Database=$dbname", $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch (PDOException $ex) {
    print( "Error al insertar usuario: " );
    die(print_r($e->getMessage()));
    }
    $stmt=$con -> prepare ($query);
    $result=$stmt -> execute($users_array);
    $ro = $result->fetch(PDO::FETCH_NUM);
    if($ro == 1){
       header('Location: ../index.php');  
    }else{
    header('Location: error.html');
    die(print_r( sqlsrv_errors(), true));
    }
    
}

 /*$res -> bindParam(':claveusuario',$clave,PDO::PARAM_STR);  
  $res -> bindParam(':nombreusuario',$_POST['nombre'],PDO::PARAM_STR);  
  $res -> bindParam(':correo',$_POST['correo'],PDO::PARAM_STR);  
  $res -> bindParam(':contrasena',$_POST['contrasena'],PDO::PARAM_STR);  
  $res -> bindParam(':sexo',$_POST['sexo'],PDO::PARAM_STR);  
  $res -> bindParam(':edad',$_POST['edad'],PDO::PARAM_INT);*/
?>
