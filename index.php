<?php 
    //Datos de conexión
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "personas";

    //Crear la conexión
    $con = new mysqli($host, $user, $password, $db);

    //Prueba conexión
    
    $query = "select * from personas";
    
    $result = $con->query($query)


    //$con->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Personas</title>
</head>
<body>
    <div>
        Listado de Personas <a href="crear.php">Nuevo</a>
    </div>
        <table style="width: 100%; border: 1px solid black">
            <tr>
                <td>Nombres</td>
                <td>Email</td>
            </tr>
            
            <?php while($mostrar=mysqli_fetch_array($result)){ ?>
                <tr>
                    <td><?= $mostrar['nombres'] ?></td>
                    <td><?= $mostrar['email'] ?></td>
                </tr>
            <?php } ?>
        </table>
</body>
</html>