<?php 
    $title = "Crear persona";
    include('templates/header.php'); 
?>

<form action="guardar_persona.php" method="post">
    <div>
        <h3>Crear Usuarios</h1>
    </div>
    <div class="form-group">
        <label for="">Nombre</label>
        <input type="text" name="nombre">
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="text" name="email">
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="index.php">Volver</a>
    </div>
</form>

<?php include('templates/footer.php') ?>