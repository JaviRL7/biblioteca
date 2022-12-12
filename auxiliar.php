<?php

function conectar()
{
    return new PDO('pgsql:host=localhost;dbname=bilioteca', 'biblioteca', 'biblioteca');
}

function insertar_prestamo($codigo, $denominacion)
{
    $pdo = conectar();
    $sent = $pdo->prepare("INSERT
                             INTO prestamo (lector_id, libro_id, creado_en)
                           VALUES (:codigo, :denominacion)");
    $sent->execute([
        ':codigo' => $codigo,
        ':denominacion' => $denominacion,
    ]);
}

?>