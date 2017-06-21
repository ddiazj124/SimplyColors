<?php
include("../Constantes.php");
include("../Librerias.php");
?>
<?php

$idUsuario = $_POST['idUsuario'];

$oUsuario = new Usuario();

$oUsuario->idAcceso = $idUsuario;



if($oUsuario->EliminarUsuario())
{
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
        <div id="Cuerpo">
                <h4>Mantenedor Usuario - Eliminar</h4>
                Usuario Eliminado!
                <a href="../paginaAdministrador/Login.php">Volver a Home</a>
           
            
        </div> 
                
            
        </form>
    </body>
</html>

<?php
}
else
{
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
        <div id="Cuerpo">
                <h4>Mantenedor Usuario - Eliminar</h4>
                Usuario no Eliminado!
                <a href="../formulariosMantenedorUsuario/EliminarUsuario.php">Intenta de nuevo!</a><br>
                <a href="../paginaAdministrador/Login.php">Volver a Home</a>
           
            
        </div> 
                
            
        </form>
    </body>
</html>
<?php
}
