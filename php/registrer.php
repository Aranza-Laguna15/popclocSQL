<?php
    $username = "popcloc@b63ioz7h2m"; 
    $password = "Manuel_$%&"; 
    $host = "b63ioz7h2m.database.windows.net,1433"; 
    $dbname = "databasepopcloc";
 
    $con = new PDO("sqlsrv:server=$host;Database=$dbname", $username, $password);
    
session_start();
$nombreusuario=$_POST['nombre'];
$correo=$_POST['correo'];
$sexo=$_POST['sexo'];
$edad=$_POST['edad'];
$contrasena=$_POST['contrasena'];
$clave="PopClocUser"+srand(time());;
if(isset($_POST['submit'])){
if(empty($_POST['correo']) || empty($_POST['contrasena']) || empty($_POST['nombre']) || empty($_POST['sexo'])){
  print( "Error complete los campos" );
}else{
    try{
  $res=$con -> prepare ("INSERT INTO usuarios (claveusuario,nombreusuario,correo,contrasena,sexo,edad) VALUES (:clave , :nombreusuario , :correo , :contrasena , :sexo , :edad)");
  $res -> bindParam(':claveusuario',$clave);  
  $res -> bindParam(':nombreusuario',$nombreusuario);  
  $res -> bindParam(':correo',$correo);  
  $res -> bindParam(':contrasena',$contrasena);  
  $res -> bindParam(':sexo',$sexo);  
  $res -> bindParam(':edad',$edad);
  $rows=$res->execute();
  if($rows == 1){
     alert('Usuario registrado, inicia sesión');
  header('Location: ../index.php'); 
  }
    }catch( PDOException $e ) {
print( "Error insert into database: " );
die(print_r($e->getMessage()));
}
}
}
?>
