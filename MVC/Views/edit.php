<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Empleado</title>
</head>
<body>
    <h1>Editar Empleado</h1>
    <form method="POST" action="index.php?action=edit&id=<?= $empleado['id']?>">

        <label for="nombre">Título:</label>
        <input type="text" name="nombre" value="<?= $empleado['nombre'] ?>"
        required>
        <br>

        <label for="edad">Género:</label>
        <input type="text" name="edad" value="<?= $empleado['edad'] ?>"
        required>
        <br>

        <label for="sexo">Sexo:</label>
        <input type="text" name="sexo" value="<?= $empleado['sexo'] ?>
        " required>

        <label for="telefono">Telefono:</label>
        <input type="text" name="telefono" value="<?= $empleado['telefono'] ?>
        " required>

        <label for="cargo">Cargo:</label>
        <input type="text" name="cargo" value="<?= $empleado['cargo'] ?>
        " required>

        <label for="avatar">Avatar:</label>
        <input type="text" name="avatar" value="<?= $empleado['avatar'] ?>
        " required>
        <br>
        
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>