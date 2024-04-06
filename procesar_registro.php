<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $numero = $_POST['numero'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $rol = $_POST['rol'];
    
    $query = "INSERT INTO usuarios (nombre, correo, numero, usuario, contraseña, id_cargo) 
              VALUES ('$nombre', '$correo', '$numero', '$usuario', '$contraseña', '$rol')";
    
    if (mysqli_query($conexion, $query)) {
        echo "<script>alert('Registro exitoso. Ya puedes iniciar sesión.'); window.location.href = 'index.php';</script>";
        header("Location: index.php");
        exit();
    } else {
        echo "Error al registrar: " . mysqli_error($conexion) . ". Vuelve a realizar el registro.";
        header("Location: registro.php");
        exit();
    }
    
    mysqli_close($conexion);
}
?>

