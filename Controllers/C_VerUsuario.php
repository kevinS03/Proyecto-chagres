<?php
    require('Models/Conexion.php');

    $con = new ConexionBaseDeDatos();
    $contenido = $con->get_titulos();
   
    require('Views/V_VerChagres.php');

?>