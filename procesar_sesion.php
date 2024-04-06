<?php
session_start();
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    
    $query = "SELECT id_cargo FROM usuarios WHERE usuario = '$usuario' AND contraseña = '$contraseña'";
    $resultado = mysqli_query($conexion, $query);
    
    if (mysqli_num_rows($resultado) == 1) {
        $fila = mysqli_fetch_assoc($resultado);
        $id_cargo = $fila['id_cargo'];
        
        if ($id_cargo == 1) {
            header("Location: Tatuador.html");
        } elseif ($id_cargo == 2) {
            header("Location: Portfolio.php");
        }
    } else {
        header("Location: error.html");
    }
    
    mysqli_free_result($resultado);
    mysqli_close($conexion);
}
?>