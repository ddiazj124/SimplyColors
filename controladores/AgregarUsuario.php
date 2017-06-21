<?php
include("../Constantes.php");
include("../Librerias.php");
?>
<?php

$nick = $_POST['nickName'];
$pass = $_POST['pass'];
$nombreUsuario = $_POST['nombreUsuario'];
$apUsuario = $_POST['apUsuario'];

$oUsuario = new Usuario();

$oUsuario->nomUsuario = $nick;
$oUsuario->pwdUsuario = $pass;
$oUsuario->nombre = $nombreUsuario;
$oUsuario->apellido = $apUsuario;



if($oUsuario->AgregarUsuario())
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
                <h4>Mantenedor Usuario - Agregar</h4>
                Usuario Agregado!
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
                <h4>Mantenedor Usuario - Agregar</h4>
                Usuario no Agregado!
                <a href="../formulariosMantenedorUsuario/AgregarUsuario.php.php">Intenta de nuevo!</a><br>
                <a href="../paginaAdministrador/Login.php">Volver a Home</a>
           
            
        </div> 
                
            
        </form>
    </body>
</html>
<?php
}

