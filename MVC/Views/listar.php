<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Empleados</title>
    <style>
        h1{
            text-align:center;
        }

        table{
            border-collapse: collapse;
            margin: auto;
            width: 60%;
        }

    </style>
</head>
<body>
    <h1>Lista de Empleados</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Sexo</th>
            <th>Cargo</th>
            <th>Telefono</th>
            <th>Avatar</th>
            <th>Acciones</th>
        
        </tr>
        <?php foreach ($empleados as $emp): ?>
            <tr>
                    <td><?= $emp['id'] ?></td>
                    <td><?= $emp['nombre'] ?></td>
                    <td><?= $emp['edad'] ?></td>
                    <td><?= $emp['sexo'] ?></td>
                    <td><?= $emp['cargo'] ?></td>
                    <td><?= $emp['telefono'] ?></td>
                    <td><?= $emp['avatar'] ?></td>
                <td>
                    <a href="index.php?action=edit&id=<?= $emp['id'] ?>
                    ">Editar</a>
                    <a href="index.php?action=delete&id=<?= $emp['id']
                    ?>" onclick="return confirm('¿Estás seguro?')">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>


