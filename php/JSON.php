<?php
include('login.php');
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
$response["success"] = 0;
        $response["message"] = "Problema con la base de datos, vuelve a intetarlo";
        die(json_encode($response));
}
$res = $con ->query("SELECT * FROM usuarios");
foreach($res as $registro){
     $users= array("id"=>$registro[0], "claveusuario"=>$registro[1],"nombreusuario"=>$registro[2], "correo"=>$registro[3], "contrasena"=>$registro[4], "edad"=>$registro[5], "sexo"=>$registro[6]);
    print_r(json_encode($users)); 
}
    if($login_ok){
        $response["success"] = 1;
        $response["message"] = "Login correcto!";
        die(json_encode($response));
    }else{
        $response["success"] = 0;
        $response["message"] = "Login INCORRECTO";
       die(json_encode($response));
    }

?>
