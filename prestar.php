
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar un nuevo departamento</title>
</head>
<body>
<?php 
$pdo = new PDO('pgsql:host=localhost;dbname=biblioteca', 'biblioteca', 'biblioteca');
$sent = $pdo->query('SELECT * FROM lectores');
?>
    <div>
        <form action="" method="post">
            <div>
            <label>
                Lectores:
        
                <select name="lectores" id="id"></select>
                <?php foreach ($sent as $fila) { ?> 
                <option value="<?= $fila['id']?>"><?= $fila['nombre'] ?></option>
                <?php } ?>
                <input type="text" name="codigo" size="10"
                value="<?= $lector_id ?>">    

                </label>
            </div>
        </form>
    </div>
</body>
</html>