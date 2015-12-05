<?php 

$username = "popcloc"; 
    $password = "Manuel_$%&"; 
    $host = "b63ioz7h2m.database.windows.net,1433"; 
    $dbname = "databasepopcloc"; 
    //$connectinfo = array("Database"=>$dbname, "UID"=>$username, "PWD"=>$password, "MultipleActiveResultSets"=>true);
    //sqlsrv_configure('WarningsReturnAsErrors',0);
    try {
$con = new PDO("sqlsrv:server=$host,Database=$dbname", $username, $password);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
//$con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

}catch ( PDOException $e ) {
print( "Error connecting to SQL Server.\n" );
die(print_r($e->getMessage()));
}

if(function_exists('get_magic_quotes_gpc') && get_magic_quotes_gpc()) 
    { 
        function undo_magic_quotes_gpc(&$array) 
        { 
            foreach($array as &$value) 
            { 
                if(is_array($value)) 
                { 
                    undo_magic_quotes_gpc($value); 
                } 
                else 
                { 
                    $value = stripslashes($value); 
                } 
            } 
        } 
     
        undo_magic_quotes_gpc($_POST); 
        undo_magic_quotes_gpc($_GET); 
        undo_magic_quotes_gpc($_COOKIE); 
    } 
     $params = array($_POST['query']);
     $correo= $_REQUEST['correo'];
     $contraseña = $_REQUEST['contraseña'];
     $tsql="SELECT * FROM usuarios WHERE correo = 'correo'  AND contraseña = 'contraseña'";
     $res= $con->prepare($tsql);
     $res->execute($params);
     if($res == true){
    $_SESSION['valid_user'] = true;
    $_SESSION['nombreusuario'] = $nombreusuario;
    header('Location: intro-page.html');
    die();
}else{
    header('Location: error.html');
    die(print_r( sqlsrv_errors(), true));
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
session_start();

