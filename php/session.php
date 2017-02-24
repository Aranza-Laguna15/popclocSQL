<?php
     $username = "popcloc@*******"; 
    $password = "*******"; 
    $host = "********.database.windows.net,****"; 
    $dbname = "databasepopcloc";
 
    $con = new PDO("sqlsrv:server=$host;Database=$dbname", $username, $password);

session_start();
$user_check=$_SESSION['login_user'];
$res=$con -> prepare ("SELECT * FROM usuarios WHERE correo= :user_check");
$res -> bindParam(':user_check',$user_check);
$res->execute();
$rows = $res->fetch(PDO::FETCH_ASSOC);
$login_session=$rows['correo'];
$user_id=$rows['id'];
$clave=$rows['claveusuario'];
$contrasena=$rows['contrasena'];
$nombreUsuario=$rows['nombreusuario'];
$edad=$rows['edad'];
$sexo=$rows['sexo'];
if(!isset($login_session))
        {
            $con = null; 
            header('Location: ../index.php');
        }
?>
