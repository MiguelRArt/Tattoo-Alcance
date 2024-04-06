<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="styleL.css">
</head>
<body>
    <div class="left container">
        <h2>TU PRÓXIMO <br><span class="outlined">TATTOO-ALCANCE</span><br> A UN SOLO MATCH </h2>
        <p>¿QUIERES UN TATTOO? TE AYUDAMOS A ENCONTRAR QUÉ,<br> CON QUIÉN Y CUÁNDO ;)</p>   
        
        <div class="botones container">
            <button id="LoginBTN" class="LoginBTN">Login</button>
            <button id="RegisterBTN" class="LoginBTN">Register</button>
        </div>
        <img class="svg1 noselect" src="2291450.svg" alt="" draggable="false">        
    </div>
    
    <div class="rigth"></div>   

    <div class="Login container hidden">    
        <form class="container" action="procesar_sesion.php" method="post">
            <h2>Inicia Sesión</h2>
            <label for="usuario">Usuario:</label><br>
            <input type="text" id="usuario" name="usuario" required placeholder="Ingrese su usuario"><br>
            
            <label for="contraseña">Contraseña:</label><br>
            <input type="password" id="contraseña" name="contraseña" required placeholder="Ingrese su contraseña"><br>
            
            <input type="submit" value="Iniciar Sesión">

            
        </form>                   
        <ion-icon class="closeLogin" name="close-circle-outline"></ion-icon>
    </div>    
    
    <div class="Register container hidden">    
        <form class="container" action="procesar_registro.php" method="post">
            <h2>Regístrate</h2>

            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre" required placeholder="Ingrese su nombre"><br>
            
            <label for="correo">Correo electrónico:</label><br>
            <input type="email" id="correo" name="correo" required placeholder="Ingrese su correo electrónico"><br>
            
            <label for="numero">Número de teléfono:</label><br>
            <input type="text" id="numero" name="numero" required placeholder="Ingrese su número de teléfono"><br>
            
            <label for="usuario">Usuario:</label><br>
            <input type="text" id="usuarioR" name="usuario" required placeholder="Ingrese su usuario"><br>
            
            <label for="contraseña">Contraseña:</label><br>
            <input type="password" id="contraseñaR" name="contraseña" required placeholder="Ingrese su contraseña"><br>
            
            <label for="rol">Rol:</label><br>
            <select id="rol" name="rol">
                <option value="1">Tatuador</option>
                <option value="2">Cliente</option>
            </select><br>
            
            <input type="submit" value="Registrarse">
        </form>
        <ion-icon class="closeRegister" name="close-circle-outline"></ion-icon>
    </div>


    <script src="LoginApp.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
