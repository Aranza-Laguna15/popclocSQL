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
$user_check=$_SESSION['login_user'];
$res=$con -> prepare ("SELECT * FROM usuarios WHERE correo= :correo");
$res -> bindParam(':correo',$user_check);
$res->execute();
$rows = $res->fetch(PDO::FETCH_ASSOC);
$login_session=$row['correo'];
if(!isset($login_session))
        {
            $con = null; 
            header('Location: ../index.php');
        }
?>
