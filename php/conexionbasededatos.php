<?php
    $localhost="localhost";
    $usuario="root";
    $password="";
    $namedb="university_star";
    $conexion=mysqli_connect($localhost, $usuario, $password, $namedb);
    $selectconexdb=mysqli_select_db($conexion, $namedb);

    if(!$conexion){
        die("Connection failed: " . mysqli_error());
    }else{
        echo "Connection successful";
    }

    mysqli_close($conexion);
?>