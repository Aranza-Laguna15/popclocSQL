<?php
session_start();
if(isset($_POST['submit'])){
if(empty($_POST['correo']) || empty($_POST['contraseña'])){
print("Error Correo o contraseña invalidos");
}else{
try{
     $username = "popcloc"; 
    $password = "Manuel_$%&"; 
    $host = "b63ioz7h2m.database.windows.net,1433"; 
    $dbname = "databasepopcloc"; 
    
     $correo= $_POST['correo'];
     $contraseña = $_POST['contraseña'];
     $con = new PDO("sqlsrv:server=$host,Database=$dbname", $username, $password);
     $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

     $tsql="SELECT * FROM usuarios WHERE correo = '$correo'  AND contraseña = '$contraseña'"; 
     $stmt= $con->prepare($tsql);
     $stmt->execute(array('$correo'=>$_POST['correo'],'$contraseña'=>$_POST['contraseña']));
     $num=$stmt->rowCount();
     if($num>=1){
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
