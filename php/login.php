<?php
session_start();
    $username = "popcloc@b63ioz7h2m"; 
    $password = "Manuel_$%&"; 
    $host = "b63ioz7h2m.database.windows.net,1433"; 
    $dbname = "databasepopcloc";
    $correo= $_POST['correo'];
    $contraseña = $_POST['contraseña'];
if(isset($_POST['submit'])){
if(empty($_POST['correo']) || empty($_POST['contraseña'])){
print("Error Correo o contraseña invalidos");
}else{
try{
    $con = new PDO("sqlsrv:server=$host;Database=$dbname", $username, $password);
     $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

}catch( PDOException $e ) {
print( "Error connecting to SQL Server.\n" );
die(print_r($e->getMessage()));
}
//,':contraseña'=>$contraseña
$res = $con ->prepare("SELECT * FROM usuarios WHERE correo = :correo AND contraseña = :contraseña");
$res -> bindParam(':correo',$correo);
$res -> bindParam(':contraseña',$contraseña);
$res->execute();
$rows = $res->fetch(PDO::FETCH_NUM);
     if( $rows > 0){
   header('Location: intro-page.html');
}else{
   header('Location: error.html');
    die(print_r( sqlsrv_errors(), true));
}
}
 }
 ?>
