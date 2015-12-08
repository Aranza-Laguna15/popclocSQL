<?php
    $username = "popcloc@b63ioz7h2m"; 
    $password = "Manuel_$%&"; 
    $host = "b63ioz7h2m.database.windows.net,1433"; 
    $dbname = "databasepopcloc";
 
    $con = new PDO("sqlsrv:server=$host;Database=$dbname", $username, $password);
session_start();
$user_check=$_SESSION['login_user'];
$res=$con -> prepare ("SELECT * FROM usuarios WHERE correo= :user_check");
$res -> bindParam(':user_check',$user_check);
?>
