<?php
    include '../Constantes.php';
    include '../Librerias.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../CSS/estilos.css" rel="stylesheet" type="text/css"/>
        <title>Administracion Simply Colors</title>
    </head>
    <body>
        
        <div id="Cabecera">
            <img src="../IMG/logo_SC.png" alt=""/>
            
        </div>
        <?php if(isset($_SESSION['USR'])){ ?>
        <div align="right"><a href="../controladores/CerrarSesion.php">Cerrar Sesión</a></div>
        <div align="right"><a href="Login.php">Volver a Home</a></div> 
        <div id="Cuerpo">
            <h3>Cambiar Contraseña</h3> 
            <form action="../controladores/CambiarContrasenna.php" method="POST">
                <div><label>Contraseña Antigua</label><input type="password" name="passAntigua"></div>
                <div><label>Contraseña Nueva</label><input type="password" name="passNueva"></div>
                <div><label>Confirma Contraseña</label><input type="password" name="passConfirma"></div>
                <input type="submit" value="Cambiar">
            </form>
        </div>
        <?php } ?> 
    </body>
</html>