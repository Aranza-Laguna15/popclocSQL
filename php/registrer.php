<?php
session_start();
    $username = "popcloc@b63ioz7h2m"; 
    $password = "Manuel_$%&"; 
    $host = "b63ioz7h2m.database.windows.net,1433"; 
    $dbname = "databasepopcloc";
    
     $con = new PDO("sqlsrv:server=$host;Database=$dbname", $username, $password);
     
   // $users_array=array(':claveusuario'=>$clave, ':nombreusuario'=>$_POST['nombre'], ':correo'=>$_POST['correo'],':contrasena'=>$_POST['contrasena'],':sexo'=>$_POST['sexo'], ':edad'=>$_POST['edad']);
$claveusuario='PopClocUser002';
$query="INSERT INTO usuarios (claveusuario,nombreusuario,correo,contrasena,sexo,edad) VALUES (:claveusuario, :nombreusuario, :correo, :contrasena, :sexo, :edad)";

if(isset($_POST['submit'])){
   
    $sql=$con -> prepare ($query);
    $sql -> bindParam(':claveusuario',$claveusuario,PDO::PARAM_STR);  
    $sql -> bindParam(':nombreusuario',$_POST['nombre'],PDO::PARAM_STR);  
    $sql -> bindParam(':correo',$_POST['correo'],PDO::PARAM_STR);  
    $sql -> bindParam(':contrasena',$_POST['contrasena'],PDO::PARAM_STR);  
    $sql -> bindParam(':sexo',$_POST['sexo'],PDO::PARAM_STR);  
    $sql -> bindParam(':edad',$_POST['edad'],PDO::PARAM_STR);
    $result=$sql -> execute();
    if($result){
       header('Location: error.php');  
    }else{
    header('Location: error.html');
    die(print_r( sqlsrv_errors(), true));
    }
}

 /**/
?>
