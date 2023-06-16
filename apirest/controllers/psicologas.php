<?php

    header('Content-Type: application/json');

    require_once('../config/conectar.php');
    require_once('../models/psicologa.php');

    $psicologa = new Psicologas();

    $body = json_decode(file_get_contents("php://input"),true);

    switch ($_GET["op"]) {
        case "getAll":
            $datos = $psicologa-> getPsicologas();
            echo json_encode($datos);
            break;
        case "getId":
            $datos = $psicologa-> getPsicologasId($body['id_psicologas']);
            echo json_encode($datos);
            break;
        case "insert":
            $datos = $psicologa-> insertPsicologas($body['id_psicologas'],$body['nombre_psicologas'],$body['edad_psicologas'],$body['especialidad'], $body['cargo']);
            echo json_encode("Ha sido insertado correctamente");

            header("Location: http://localhost/SkylAb-104/Clase/psychology/psychologists");

            break;
    }

    ?>
