<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departamentos</title>
</head>
<body>
    <?php
    $pdo = new PDO('pgsql:host=localhost;dbname=biblioteca', 'biblioteca', 'biblioteca');
    $sent = $pdo->query('SELECT * FROM libros ORDER BY titulo');
    ?>
    <div>
        <table style="margin: auto" border="1">
            <thead>
                <th>isbn</th>
                <th>titulo</th>
            </thead>
            <tbody>
                <?php foreach ($sent as $fila): ?>
                    <tr>
                        <td><a href="prestar.php"><?= $fila['isbn'] ?></a></td>
                        <td><?= $fila['titulo'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>
</html>