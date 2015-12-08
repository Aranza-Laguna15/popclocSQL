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
$res = $con ->prepare("SELECT * FROM usuarios WHERE correo = :correo AND contrasena = :contrasena");
$rows = $res->fetch(PDO::FETCH_ASSOC);
$row=$res->fetch(PDO::FETCH_NUM);
$login_session=$rows['correo'];
$user_id=$rows['id'];
$clave=$rows['claveusuario'];
$contrasena=$rows['contrasena'];
$nombreUsuario=$rows['nombreusuario'];
$edad=$rows['edad'];
$sexo=$rows['sexo'];
for($i=0;$i<=$row;$i++){
}
?>
