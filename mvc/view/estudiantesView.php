<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Estudiantes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .estudiante-list {
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <div class="estudiante-list">
        <form action="index.php" method="get>
        <label>Introduce la ID:</label><input type="text" name="id">
        <input type="submit" value="Buscar">
    </form>
<a href="index.php">Ver listado completo</a>

        <?php if(isset($estudiantes)):?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($estudiantes-> estudiante as $estudiante): ?>
                        <tr>
                            <td><?= $estudiante->id; ?></td>
                            <td><?= $estudiante->name; ?></td>
                            <td><?= $estudiante->age; ?></td>
                            <td><?= $estudiante->email; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?php elseif(isset($estudiante)): ?>
                <h2>Detalle del estudiante</h2>
                <p><strong>ID:</strong> <?= $estudiante->id; ?></p>
                <p><strong>Name:</strong> <?= $estudiante->nombre; ?></p>
                <p><strong>Age:</strong> <?= $estudiante->Edad; ?></p>
                <p><strong>Email:</strong> <?= $estudiante->email; ?></p>
                <?php else: ?>
                    <p>No se encontraron estudiantes.</p>
                    <?php endif; ?>


       
    </div>

</body>
</html>