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
            <h3>Cambiar Contraseña en proceso</h3> 
            
        </div>
        <?php } ?> 
    </body>
</html>
