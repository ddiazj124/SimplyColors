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
        <div align="right"><button><a href="../paginaAdministrador/Login.php">Cancelar</a></button></div>    
        <div id="Cuerpo">
                <h4>Mantenedor Usuario - Modificar</h4>
           
            <form action="../controladores/EliminarUsuario.php" method="POST">
                <div><label>ID Usuario</label><input type="number" name="idUsuario"></div>
                <input type="submit" value="Eliminar">
            </form>
        </div> 
                
            
        </form>
    </body>
</html>

