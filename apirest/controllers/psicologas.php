<?php

header('Content-Type: application/json');

    require_once('../config/conectar.php');
    require_once('../models/psicologa.php');

    $psicologa = new Psicologa();

    $body = json_decode(file_get_contents("php://input"),true);

    switch ($_GET["op"]) {
        case "getAll":
            $datos = $psicologa-> getPsico();
            echo json_encode($datos);
            break;
        case "getId":
            $datos = $psicologa-> getCamperId($body['id_psico']);
            echo json_encode($datos);
            break;
        case "insert":
            $datos = $psicologa-> insertPsico($body['id_psico'],$body['nombre_psico'],$body['edad_psico'],$body['especialidad_psico']);
            echo json_encode("insertado correctamente");

            header("Location: http://localhost/SkylAb-158/Psychology/psychology/psychologists");

            break;
    }

    ?>
