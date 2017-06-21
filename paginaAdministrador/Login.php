<?php
    include '../Constantes.php';
    include '../Librerias.php';
?>
<html>
    <head>
        <!--
        Integrantes: Diego Díaz, Jacob Olivares, Pool Rosales
        -->
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
                <div id="MantenedorTienda"> 
                    <h3>Mantenedor Tienda</h3>
                    <a href="MantenedorProducto.php">Mantenedor Producto</a><br>
                    <a href="MantenedorCategoria.php">Mantenedor de Categorías</a><br>
                    <a href="MantenedorDisenno.php">Mantenedor de Diseño del Producto</a><br>
                    <a href="MantenedorMetodoPago.php">Mantenedor de Metodo de Pago</a><br>
                </div>
                <div id="MantenedorUser"> 
                    <h3>Mantenedor Usuario</h3>
                    <a href="CambiarContrasenna.php">Modificar Contraseña</a>
                    <h3>Privilegios Adicionales</h3>
                    <h3>---------------------------------------------------</h3>
                    <a href="../formulariosMantenedorUsuario/AgregarUsuario.php">Agregar Usuario</a><br>
                    <a href="../formulariosMantenedorUsuario/ModificarUsuario.php">Modificar Usuario</a><br>
                    <a href="../formulariosMantenedorUsuario/EliminarUsuario.php">Eliminar Usuario</a><br>
                </div>          
            <?php } ?>       
         <?php if(!isset($_SESSION['USR'])){ ?>
        <form action="../controladores/IniciarSesion.php" method="post">
            <div id="Login">
                <div><label>Usuario</label><input type="text" name="nombre"></div>
                <div><label>Clave</label><input type="password" name="clave"></div>
                <input type="submit" value="Acceder">
                
            </div>
                
            
        </form>
        <?php
         }
        ?>
    </body>
</html>

