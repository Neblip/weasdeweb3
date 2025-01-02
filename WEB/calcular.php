<?php
$nombre = $_GET['n'];
$peso = $_GET['p'];
$estatura = $_GET['e'];
echo "Nombre: $nombre";
$total = $peso / pow($estatura, 2);
echo "<br>IMC: $total";

    
    
?>