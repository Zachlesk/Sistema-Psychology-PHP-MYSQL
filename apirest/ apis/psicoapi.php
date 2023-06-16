<?php

        $psicologas = '[
            {
            "id_psicologas": 1,
            "nombre_psicologas": "Angie Suarez",
            "edad_psicologas": "26",
            "especialidad": "Psico-analisis"
            "cargo": "Jefe de area"
            },
            {
            "id_psicologas": 2,
            "nombre_psicologas": "Vanessa",
            "edad_psicologas": "25",
            "especialidad": "Psicologia del desarrollo",
            "cargo": "Jefe de area"
            }
        ]';
    
        $datosPsicologas = json_decode($psicologas, true);
            
        $server = "localhost";
        $user = "campus";
        $pass = "campus2023";
        $bd = "psychology";

        $conexion = mysqli_connect($server, $user, $pass, $bd) 
        or die("Ha sucedido un error inesperado en la conexion de la base de datos");

        foreach ($datosPsicologas as $psicologas) {
            mysqli_query($conexion, "INSERT INTO psicologas (id_psicologas, nombre_psicologas, edad_psicologas, especialidad, cargo) VALUES ('".$psicologas['id_psicologas']."','".$psicologas['nombre_psicologas']."','".$psicologas['edad_psicologas']."','".$psicologas['especialidad']."','".$psicologas['cargo']."',)");
        }

        mysqli_close($conexion);

?>