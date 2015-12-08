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
  /*$res -> bindParam(':claveusuario',$clave);  
  $res -> bindParam(':nombreusuario',$nombreusuario);  
  $res -> bindParam(':correo',$correo);  
  $res -> bindParam(':contrasena',$contrasena);  
  $res -> bindParam(':sexo',$sexo);  
  $res -> bindParam(':edad',$edad,PDO::PARAM_INT);*/
  $rows=$res->execute(array(':claveusuario'=>$clave, ':nombreusuario'=>$nombreusuario,
  ':correo'=>$correo, ':contrasena'=>$contrasena, ':sexo'=>$sexo,':edad'=>$edad));
  if($rows == 1){
     alert('Usuario registrado, inicia sesión');
  header('Location: ../index.php'); 
  }else{
     header('Location: error.php');  
  }
    }catch( PDOException $e ) {
print( "Error insert into database: " );
die(print_r($e->getMessage()));
}
}
}
?>
