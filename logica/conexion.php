<?php
    $host = "localhost";
    $user = "root";
    $clave = "";
    $bd = "hospital";
    $conectar = mysqli_connect($host,$user,$clave,$bd);
    mysqli_set_charset($conectar,'utf8'); 
 ?>