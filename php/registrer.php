<?php
    $username = "popcloc@b63ioz7h2m"; 
    $password = "Manuel_$%&"; 
    $host = "b63ioz7h2m.database.windows.net,1433"; 
    $dbname = "databasepopcloc";
    try{
    $con = new PDO("sqlsrv:server=$host;Database=$dbname", $username, $password);
     $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
}catch( PDOException $e ) {
print( "Error connecting to SQL Server.\n" );
die(print_r($e->getMessage()));
}
session_start();
$nombreusuario=$_POST['nombre'];
$correo=$_POST['correo'];
$sexo=$_POST['sexo'];
$edad=$_POST['edad'];
$contrasena=$_POST['contrasena'];
$clave="PopClocUser"+srand(time());;
if(isset($_POST['submit'])){
try{
  $res=$con -> prepare ("INSERT INTO usuarios (claveusuario,nombreusuario,correo,contrasena,sexo,edad) VALUES (:clave , :nombreusuario , :correo , :contrasena , :sexo , :edad)");
  $res -> bindParam(':claveusuario',$clave,PDO::PARAM_STR);  
  $res -> bindParam(':nombreusuario',$nombreusuario,PDO::PARAM_STR);  
  $res -> bindParam(':correo',$correo,PDO::PARAM_STR);  
  $res -> bindParam(':contrasena',$contrasena,PDO::PARAM_STR);  
  $res -> bindParam(':sexo',$sexo,PDO::PARAM_STR);  
  $res -> bindParam(':edad',$edad,PDO::PARAM_INT);
  $res->execute();
  header('Location: ../index.php'); 
    }catch( PDOException $e ) {
print( "Error insert into database: " );
die(print_r($e->getMessage()));
}
}
}
?>
