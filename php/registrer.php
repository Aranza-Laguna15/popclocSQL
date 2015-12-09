<?php
    $username = "popcloc@b63ioz7h2m"; 
    $password = "Manuel_$%&"; 
    $host = "b63ioz7h2m.database.windows.net,1433"; 
    $dbname = "databasepopcloc";
    
if(isset($_POST['submit'])){
    try{
        $con = new PDO("sqlsrv:server=$host;Database=$dbname", $username, $password);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $newID=$con->lastInsertId();
        $newID++;
        $claveusuario='PopClocUser'.$newID;
        $sql="INSERT INTO usuarios (id,claveusuario,nombreusuario,correo,contrasena,sexo,edad) VALUES (:newID, :claveusuario, :nombreusuario, :correo, :contrasena, :sexo, :edad)";
        $consulta=$con->prepare($sql);
        $consulta -> bindParam(':newID',$newID,PDO::PARAM_STR);
        $consulta -> bindParam(':claveusuario',$claveusuario,PDO::PARAM_STR);  
        $consulta -> bindParam(':nombreusuario',$_POST['nombre'],PDO::PARAM_STR);  
        $consulta -> bindParam(':correo',$_POST['correo'],PDO::PARAM_STR);  
        $consulta -> bindParam(':contrasena',$_POST['contrasena'],PDO::PARAM_STR);  
        $consulta -> bindParam(':sexo',$_POST['sexo'],PDO::PARAM_STR);  
        $consulta -> bindParam(':edad',$_POST['edad'],PDO::PARAM_STR);
        $consulta -> exec();
        
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
