<?php
$usu = $_POST['usu'];
$con = $_POST['con'];
//echo "$usu - $con"
if ($usu=="miau" && $con=="222555")
    echo "Bienvenido: $usu";
else
{
    echo "Error en Usuario o Contraseña";
    echo "<br> <a href='login.php'> Volver a Intentar</a>";
}    
?>