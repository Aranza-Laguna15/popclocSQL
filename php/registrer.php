<?php
    $username = "popcloc@b63ioz7h2m"; 
    $password = "Manuel_$%&"; 
    $host = "b63ioz7h2m.database.windows.net,1433"; 
    $dbname = "databasepopcloc";
    
     $con = new PDO("sqlsrv:server=$host;Database=$dbname", $username, $password);
     
   // $users_array=array(':claveusuario'=>$clave, ':nombreusuario'=>$_POST['nombre'], ':correo'=>$_POST['correo'],':contrasena'=>$_POST['contrasena'],':sexo'=>$_POST['sexo'], ':edad'=>$_POST['edad']);
$claveusuario='PopClocUser002';
$nombreusuario='Aranza Laguna';
$correo='aranzzita@gmail.com';
$contrasena='aranza';
$sexo='Femenino';
$edad='19';
//if(isset($_POST['submit'])){
$sql=$con -> prepare ("INSERT INTO usuarios (claveusuario,nombreusuario,correo,contrasena,sexo,edad) VALUES (?, ?, ?, ?, ?, ?)");
$result=$sql -> execute(array($claveusuario,$nombreusuario,$correo,$contrasena,$sexo,$edad));
    if($result){
       header('Location: error.php');  
    }else{
    header('Location: error.html');
    die(print_r( sqlsrv_errors(), true));
    }
//}

 /*  $sql -> bindParam(':claveusuario',$claveusuario,PDO::PARAM_STR);  
    $sql -> bindParam(':nombreusuario',$_POST['nombre'],PDO::PARAM_STR);  (:claveusuario, :nombreusuario, :correo, :contrasena, :sexo, :edad)
    $sql -> bindParam(':correo',$_POST['correo'],PDO::PARAM_STR);  
    $sql -> bindParam(':contrasena',$_POST['contrasena'],PDO::PARAM_STR);  
    $sql -> bindParam(':sexo',$_POST['sexo'],PDO::PARAM_STR);  
    $sql -> bindParam(':edad',$_POST['edad'],PDO::PARAM_STR);*/
?>
