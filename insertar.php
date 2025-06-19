<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'conexion.php';
    $conexion = new Conexion();
    $conexion = $conexion->conecc_BD();
    $username = $_POST['name'];
    $surname = $_POST['apellido'];
    $option = $_POST['action'];
    switch ($option) {
        case 'Insert':
            insert_user($conexion, $username, $surname);
            break;
        case 'Update':
            
            break;
    }
}
function insert_user($conexion, $username, $surname){
    $sql= $conexion->prepare("INSERT INTO user (nombre, apellido) VALUES (?, ?)");
    $sql->bind_param("ss", $username, $surname);
    if ($sql->execute()) {
        echo "Usuario insertado correctamente.";
    } else {
        echo "Error al insertar usuario: " . $sql->error;
    }

}

?>