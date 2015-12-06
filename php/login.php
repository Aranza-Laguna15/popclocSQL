<?php
session_start();
if(isset($_POST['submit'])){
if(empty($_POST['correo']) || empty($_POST['contraseña'])){
print("Error Correo o contraseña invalidos");
}else{
try{
    $username = "popcloc@b63ioz7h2m"; 
    $password = "Manuel_$%&"; 
    $host = "b63ioz7h2m.database.windows.net,1433"; 
    $dbname = "databasepopcloc"; 
    $tablename="usuarios";
     $correo= $_POST['correo'];
     $contraseña = $_POST['contraseña'];
     $con = new PDO("sqlsrv:server=$host,Database=$dbname", $username, $password);
     $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
//,':contraseña'=>$contraseña
     $tsql="SELECT correo FROM [$tablename] WHERE 'correo' = :correo "; 
     $stmt= $con->prepare($tsql);
     $stmt->execute(array(':correo'=>$correo));
     $user=$stmt->fetch(PDO::FETCH_ASSOC);
     if($stmt->rowCount() > 0){
   header('Location: intro-page.html');
   
}else{
   header('Location: error.html');
    die(print_r( sqlsrv_errors(), true));
}
}catch( PDOException $e ) {
print( "Error connecting to SQL Server.\n" );
die(print_r($e->getMessage()));
}
}
 }
 ?>
