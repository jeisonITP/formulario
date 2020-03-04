<?php 
    //Datos de conexión
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "personas";

    //Crear la conexión
    $con = new mysqli($host, $user, $password, $db);

    //Prueba conexión
    if($con->connect_error){
        echo "base de datos no disponible";
    }else{
        echo "conectados a la base de datos <br>";
    }

    $nombre = $_POST["nombre"];
    $email = $_POST["email"];

    $query = "insert into personas(nombres,email) 
        values('$nombre', '$email')";
    
    
    if($con->query($query)){ //if($con->query($query) == true)
        echo "Persona guardada correctamente";
    }else{
        echo "No se ha podido guardar la persona. " . $con->error;
    } 



    $con->close();

    header('Location: crear.php');
?>