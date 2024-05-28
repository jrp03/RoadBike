<?php

    $db =  mysqli_connect("localhost", "root", "", "roadbike");
    if(!$db){
        echo "error al conectarse a la base de datos";
        mysqli_close($db);
    }

?>