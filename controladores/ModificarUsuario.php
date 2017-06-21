<?php
include("../Constantes.php");
include("../Librerias.php");
?>
<?php

$nick = $_POST['nickName'];
$pass = $_POST['pass'];
$nombreUsuario = $_POST['nombreUsuario'];
$apUsuario = $_POST['apUsuario'];
$idUsuario = $_POST['idUsuario'];

$oUsuario = new Usuario();

$oUsuario->idAcceso = $idUsuario;
$oUsuario->nomUsuario = $nick;
$oUsuario->pwdUsuario = $pass;
$oUsuario->nombre = $nombreUsuario;
$oUsuario->apellido = $apUsuario;



if($oUsuario->ModificarUsuario())
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
                <h4>Mantenedor Usuario - Modificar</h4>
                Usuario Modificado!
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
                <h4>Mantenedor Usuario - Modificado</h4>
                Usuario no Modificado!
                <a href="../formulariosMantenedorUsuario/ModificarUsuario.php.php">Intenta de nuevo!</a><br>
                <a href="../paginaAdministrador/Login.php">Volver a Home</a>
           
            
        </div> 
                
            
        </form>
    </body>
</html>
<?php
}
