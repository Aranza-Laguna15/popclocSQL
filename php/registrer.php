<?php
    $username = "popcloc@b63ioz7h2m"; 
    $password = "Manuel_$%&"; 
    $host = "b63ioz7h2m.database.windows.net,1433"; 
    $dbname = "databasepopcloc";
    
if(isset($_POST['submit'])){
    //$sexo=$_POST['sexo'];
    //$edad=$_POST['edad'];
    $claveusuario='PopClocUser';
    try{
        $con = new PDO("sqlsrv:server=$host;Database=$dbname", $username, $password);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql="INSERT INTO usuarios (claveusuario,nombreusuario,correo,contrasena,edad,sexo) VALUES (:claveusuario, :nombreusuario, :correo, :contrasena, :edad, :sexo)";
        $consulta=$con->prepare($sql);
        $consulta -> bindParam(':claveusuario',$claveusuario);  
        $consulta -> bindParam(':nombreusuario',$_POST['nombre']);  
        $consulta -> bindParam(':correo',$_POST['correo']);  
        $consulta -> bindParam(':contrasena',$_POST['contrasena']);  
        $consulta -> bindParam(':edad',$_POST['edad']);
        $consulta -> bindParam(':sexo',$_POST['sexo']);  
        $consulta -> execute();
       /* $newID=$con->lastInsertId();
        $newID++;*/
        
       header('Location: error.php');  
   
}catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
}

 /*  $sql -> bindParam(':claveusuario',$claveusuario,PDO::PARAM_STR);  
    $sql -> bindParam(':nombreusuario',$_POST['nombre'],PDO::PARAM_STR);  (:claveusuario, :nombreusuario, :correo, :contrasena, :sexo, :edad)
    $sql -> bindParam(':correo',$_POST['correo'],PDO::PARAM_STR);  
    $sql -> bindParam(':contrasena',$_POST['contrasena'],PDO::PARAM_STR);  
    $sql -> bindParam(':sexo',$_POST['sexo'],PDO::PARAM_STR);  
    $sql -> bindParam(':edad',$_POST['edad'],PDO::PARAM_STR);*/
// $users_array=array(':claveusuario'=>$clave, ':nombreusuario'=>$_POST['nombre'], ':correo'=>$_POST['correo'],':contrasena'=>$_POST['contrasena'],':sexo'=>$_POST['sexo'], ':edad'=>$_POST['edad']);

?>
