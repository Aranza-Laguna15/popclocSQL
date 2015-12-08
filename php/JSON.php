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
$res = $con ->query("SELECT * FROM usuarios");
$connection= array("username"=>$username,"password"=>$password, "host"=>$host, "dbname"=>$dbname);
print_r(json_encode($connection));
foreach($res as $registro){
     $users= array("id"=>$registro[0], "claveusuario"=>$registro[1],"nombreusuario"=>$registro[2], "correo"=>$registro[3], "contrasena"=>$registro[4], "sexo"=>$registro[5], "edad"=>$registro[6]);
    print_r(json_encode($users)); 
}
   
}
?>
