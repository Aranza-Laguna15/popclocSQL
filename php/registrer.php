<?php
    $username = "popcloc@b63ioz7h2m"; 
    $password = "Manuel_$%&"; 
    $host = "b63ioz7h2m.database.windows.net,1433"; 
    $dbname = "databasepopcloc";
    
if(isset($_POST['submit'])){
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
       
       header('Location: ../index.php');  
   
}catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
}

?>
