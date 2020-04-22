<?php 
    $title = "Listado de personas";
    include('templates/header.php');
    $sql = "select * from personas";
    
    $result = DB::query($sql);

?>

<div>
    Listado de Personas <a href="crear.php" class="btn btn-outline-primary">Nuevo</a>
</div>
<!-- 
    m = Margin
    t = Top - Arriba
    l = Left - Izquierda
    r = Right - Derecha
    b = Bottom - Abajo

    Separación: 1 - 5
    mt-5 mb-3 ml-2
    -->
<div class="mt-3">
    <table class="table table-hover">
        <tr>
            <td>Nombres</td>
            <td>Email</td>
            <td>Acciones</td>
        </tr>
        
        <?php while($mostrar=mysqli_fetch_array($result)){ ?>
            <tr>
                <td><?= $mostrar['nombres'] ?></td>
                <td><?= $mostrar['email'] ?></td>
                <td>
                    <a href="editar.php?id=<?= $mostrar['id'] ?>" class="btn btn-success btn-sm">Editar</a>
                    <a href="" class="btn btn-danger btn-sm ">Eliminar</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>

<?php include('templates/footer.php') ?>