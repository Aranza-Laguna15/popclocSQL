<?php 
session_start();
$username = "popcloc"; 
    $password = "Manuel_$%&"; 
    $host = "tcp:b63ioz7h2m.database.windows.net,1433"; 
    $dbname = "databasepopcloc"; 
    //$connectinfo = array("Database"=>$dbname, "UID"=>$username, "PWD"=>$password, "MultipleActiveResultSets"=>true);
    //sqlsrv_configure('WarningsReturnAsErrors',0);
    try {
$con = new PDO("sqlsrv:server=$host,Database=$dbname", $username, $password);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
$con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
print( "Correct connecting to SQL Server." );
}catch ( PDOException $e ) {
print( "Error connecting to SQL Server.\n" );
die(print_r($e));
}
//$con = sqlsrv_connect($host, $connectinfo);
 /*if($con == true){
 echo "Conexión establecida";
 header('Location: registro.php');
 }else{
 echo "Error al conectar la base de datos\n";
  die(print_r( sqlsrv_errors(), true));
 }
    $nombreusuario = $_REQUEST['nombreusuario'];
    $contraseña = $_REQUEST['contraseña'];
    $consulta = "SELECT * FROM usuarios WHERE nombreusuario = 'nombreusuario'  AND contraseña = 'contraseña'";
    $res = sqlsrv_query($con , $consulta);
    if($res == true){
    $_SESSION['valid_user'] = true;
    $_SESSION['nombreusuario'] = $nombreusuario;
    header('Location: intro-page.html');
    die();
}else{
    header('Location: error.html');
    die(print_r( sqlsrv_errors(), true));
}*/
?>
