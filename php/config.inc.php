<?php 
 $username = "popcloc@*******"; 
    $password = "*******"; 
    $host = "********.database.windows.net,****"; 
    $dbname = "databasepopcloc"; 
    //$connectinfo = array("Database"=>$dbname, "UID"=>$username, "PWD"=>$password, "MultipleActiveResultSets"=>true);
    //sqlsrv_configure('WarningsReturnAsErrors',0);
    try {
$con = new PDO("sqlsrv:server=$host,Database=$dbname", $username, $password);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
$con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

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
    
session_start();

