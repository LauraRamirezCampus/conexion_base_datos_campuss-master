<?php
    require "../vendor/autoload.php"; //se trae el autoload desde el vendor creado por composer
    $router = new \Bramus\Router\Router();
    

/** 1-Tabla Areas------------------------------------------------------------------------------------------------------------------------------------------------- */

    $router->get("/camper", function(){
        $cox = new \App\connect();
        $res = $cox->con->prepare("SELECT * FROM areas");
        $res -> execute();
        $res = $res->fetchAll(\PDO::FETCH_ASSOC);
         // retorna la consulta como un array asociativo 
        echo json_encode($res);
    });
    // $router->get("/cam", function(){
    //     echo "llega aqui";
    // });


    $router->put("/camper", function(){
        $_DATA = json_decode(file_get_contents("php://input"), true);
        $cox = new \App\connect();
        $res = $cox->con->prepare("UPDATE areas SET name_area = :NAME_AREA WHERE id =:CEDULA");
        $res-> bindValue("NAME_AREA", $_DATA['name_area']); //para editar se debe escribir la sentencia dentro del $_DATA["nom"] es decir { nom: Wilfer, id: 1}
        $res-> bindValue("CEDULA", $_DATA['id']);
        $res -> execute();
        $res = $res->rowCount();
        echo json_encode($res);
    });
    // "name_level": "super",
    // "group_level": "marte"
    $router -> delete("/camper", function(){
        $_DATA = json_decode(file_get_contents("php://input"), true);
        $cox = new \App\connect();
        $res = $cox->con->prepare("DELETE FROM areas WHERE id =:CEDULA");
        $res->bindValue("CEDULA", $_DATA["id"]);
        $res->execute();
        $res = $res->rowCount();
        echo json_encode($res);
    });

    $router->post("/camper", function(){
        $_DATA = json_decode(file_get_contents("php://input"), true);
        $cox = new \App\connect();
        $res = $cox->con->prepare("INSERT INTO areas (name_area) VALUES (:NAME_AREA)");
        $res-> bindValue("NAME_AREA", $_DATA['name_area']); //para editar se debe escribir la sentencia dentro del $_DATA["nom"] es decir { nom: Wilfer, id: 1}
        $res -> execute();
        $res = $res->rowCount();
        echo json_encode($res);
    });

    /**-------------------------------------------------------------------------------------------------------------------------------------------------- */
    
    /**2-Tabla campers--------------------------------------------------------------------------------------------------------------------------------------*/
    $router->get("/campers", function(){
        $cox = new \App\connect();
        $res = $cox->con->prepare("SELECT * FROM campers");
        $res -> execute();
        $res = $res->fetchAll(\PDO::FETCH_ASSOC);
         // retorna la consulta como un array asociativo 
        echo json_encode($res);
    });
    

    $router->put("/campers", function(){
        $_DATA = json_decode(file_get_contents("php://input"), true);
        $cox = new \App\connect();
        $res = $cox->con->prepare("UPDATE campers SET id_trainer = :ID_TRAINER WHERE id =:CEDULA");
        $res-> bindValue("ID_TRAINER", $_DATA['id_trainer']); //para editar se debe escribir la sentencia dentro del $_DATA["nom"] es decir { nom: Wilfer, id: 1}
        $res-> bindValue("CEDULA", $_DATA['id']);
        $res -> execute();
        $res = $res->rowCount();
        echo json_encode($res);
    });

    $router -> delete("/campers", function(){
        $_DATA = json_decode(file_get_contents("php://input"), true);
        $cox = new \App\connect();
        $res = $cox->con->prepare("DELETE FROM campers WHERE id =:CEDULA");
        $res->bindValue("CEDULA", $_DATA["id"]);
        $res->execute();
        $res = $res->rowCount();
        echo json_encode($res);
    });

    $router->post("/campers", function(){
        $_DATA = json_decode(file_get_contents("php://input"), true);
        $cox = new \App\connect();
        $res = $cox->con->prepare("INSERT INTO campers (id_trainer) VALUES (:ID_TRAINER)");
        $res-> bindValue("NAME_AREA", $_DATA['name_area']); //para editar se debe escribir la sentencia dentro del $_DATA["nom"] es decir { nom: Wilfer, id: 1}
        $res -> execute();
        $res = $res->rowCount();
        echo json_encode($res);
    });

    /**------------------------------------------------------------------------------------------------------------------------------------------------------- */

    /**3-tabla cities------------------------------------------------------------------------------------------------------------------------------------------- */

    $router->get("/cities", function(){
        $cox = new \App\connect();
        $res = $cox->con->prepare("SELECT * FROM cities");
        $res -> execute();
        $res = $res->fetchAll(\PDO::FETCH_ASSOC);
         // retorna la consulta como un array asociativo 
        echo json_encode($res);
    });

    $router->put("/cities", function(){
        $_DATA = json_decode(file_get_contents("php://input"), true);
        $cox = new \App\connect();
        $res = $cox->con->prepare("UPDATE cities SET name_city = :NAME_CITY SET id_region= :ID_REGION    WHERE id =:CEDULA");
        $res-> bindValue("NAME_CITY", $_DATA['name_city']);
        $res-> bindValue("ID_REGION", $_DATA['id_region']); //para editar se debe escribir la sentencia dentro del $_DATA["nom"] es decir { nom: Wilfer, id: 1}
        $res-> bindValue("CEDULA", $_DATA['id']); 
        $res -> execute();
        $res = $res->rowCount();
        echo json_encode($res);
    });

    $router -> delete("/cities", function(){
        $_DATA = json_decode(file_get_contents("php://input"), true);
        $cox = new \App\connect();
        $res = $cox->con->prepare("DELETE FROM cities WHERE id =:CEDULA");
        $res->bindValue("CEDULA", $_DATA["id"]);
        $res->execute();
        $res = $res->rowCount();
        echo json_encode($res);
    });

    $router->post("/cities", function(){
        $_DATA = json_decode(file_get_contents("php://input"), true);
        $cox = new \App\connect();
        $res = $cox->con->prepare("INSERT INTO cities (name_city,id_region) VALUES (:NAME_CITY,:ID_REGION)");
        $res-> bindValue("NAME_CITY", $_DATA['name_city']); 
        $res-> bindValue("ID_REGION", $_DATA['id_region']); //para editar se debe escribir la sentencia dentro del $_DATA["nom"] es decir { nom: Wilfer, id: 1}
        $res -> execute();
        $res = $res->rowCount();
        echo json_encode($res);
    });
    /**4-Tabla leves---------------------------------------------------------------- */

    $router->get("/nivel", function(){
        $cox = new \App\connect();
        $res = $cox->con->prepare("SELECT * FROM levels");
        $res -> execute();
        $res = $res->fetchAll(\PDO::FETCH_ASSOC);
         // retorna la consulta como un array asociativo 
        echo json_encode($res);
    });

    $router->put("/camper", function(){
        $_DATA = json_decode(file_get_contents("php://input"), true);
        $cox = new \App\connect();
        $res = $cox->con->prepare("UPDATE areas SET name_area = :NAME_AREA WHERE id =:CEDULA");
        $res-> bindValue("NAME_AREA", $_DATA['name_area']); //para editar se debe escribir la sentencia dentro del $_DATA["nom"] es decir { nom: Wilfer, id: 1}
        $res-> bindValue("CEDULA", $_DATA['id']);
        $res -> execute();
        $res = $res->rowCount();
        echo json_encode($res);
    });

    $router->put("/nivel", function(){
        $_DATA = json_decode(file_get_contents("php://input"), true);
        $cox = new \App\connect();
        $res = $cox->con->prepare("UPDATE levels SET name_level = :NAME_LEVEL, group_level= :GROUP_LEVEL  WHERE id =:CEDULA");
        $res-> bindValue("NAME_LEVEL", $_DATA['name_level']);
        $res-> bindValue("GROUP_LEVEL", $_DATA['group_level']); //para editar se debe escribir la sentencia dentro del $_DATA["nom"] es decir { nom: Wilfer, id: 1}
        $res-> bindValue("CEDULA", $_DATA['id']); 
        $res -> execute();
        $res = $res->rowCount();
        echo json_encode($res);
    });

    $router -> delete("/nivel", function(){
        $_DATA = json_decode(file_get_contents("php://input"), true);
        $cox = new \App\connect();
        $res = $cox->con->prepare("DELETE FROM levels WHERE id =:CEDULA");
        $res->bindValue("CEDULA", $_DATA["id"]);
        $res->execute();
        $res = $res->rowCount();
        echo json_encode($res);
    });

    $router->post("/nivel", function(){
        $_DATA = json_decode(file_get_contents("php://input"), true);
        $cox = new \App\connect();
        $res = $cox->con->prepare("INSERT INTO levels (name_level,group_level) VALUES (:NAME_LEVEL,:GROUP_LEVEL)");
        $res-> bindValue("NAME_LEVEL", $_DATA['name_level']); 
        $res-> bindValue("GROUP_LEVEL", $_DATA['group_level']); //para editar se debe escribir la sentencia dentro del $_DATA["nom"] es decir { nom: Wilfer, id: 1}
        $res -> execute();
        $res = $res->rowCount();
        echo json_encode($res);
    });

/**5-tabla ------------------------------------------------------------------------------------------*/
$router->get("/location", function(){
    $cox = new \App\connect();
    $res = $cox->con->prepare("SELECT * FROM locations");
    $res -> execute();
    $res = $res->fetchAll(\PDO::FETCH_ASSOC);
     // retorna la consulta como un array asociativo 
    echo json_encode($res);
});




$router->put("/location", function(){
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $cox = new \App\connect();
    $res = $cox->con->prepare("UPDATE locations SET name_location = :NAME_LOCATION WHERE id =:CEDULA");
    $res-> bindValue("NAME_LOCATION", $_DATA['name_location']); 
    $res-> bindValue("CEDULA", $_DATA['id']);
    $res -> execute();
    $res = $res->rowCount();
    echo json_encode($res);
});
// "name_level": "super",
// "group_level": "marte"
$router -> delete("/location", function(){
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $cox = new \App\connect();
    $res = $cox->con->prepare("DELETE FROM locations WHERE id =:CEDULA");
    $res->bindValue("CEDULA", $_DATA["id"]);
    $res->execute();
    $res = $res->rowCount();
    echo json_encode($res);
});

$router->post("/location", function(){
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $cox = new \App\connect();
    $res = $cox->con->prepare("INSERT INTO locations (name_location) VALUES (:NAME_LOCATION)");
    $res-> bindValue("NAME_LOCATION", $_DATA['name_location']); //para editar se debe escribir la sentencia dentro del $_DATA["nom"] es decir { nom: Wilfer, id: 1}
    $res -> execute();
    $res = $res->rowCount();
    echo json_encode($res);
});
/**6-tabla maint area---------------------------------------------------------------------------------------- */

$router->get("/maint", function(){
    $cox = new \App\connect();
    $res = $cox->con->prepare("SELECT * FROM maint_area");
    $res -> execute();
    $res = $res->fetchAll(\PDO::FETCH_ASSOC);
     // retorna la consulta como un array asociativo 
    echo json_encode($res);
});




$router->put("/maint", function(){
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $cox = new \App\connect();
    $res = $cox->con->prepare("UPDATE maint_area SET id_area = :ID_AREA,id_staff = :ID_STAFF,id_position = :ID_POSITION,id_journey = :ID_JOURNEY WHERE id =:CEDULA");
    $res-> bindValue("ID_AREA", $_DATA['id_area']); 
    $res-> bindValue("ID_STAFF", $_DATA['id_staff']); 
    $res-> bindValue("ID_POSITION", $_DATA['id_position']); 
    $res-> bindValue("ID_JOURNEY", $_DATA['id_journey']); 
    $res-> bindValue("CEDULA", $_DATA['id']);
    $res -> execute();
    $res = $res->rowCount();
    echo json_encode($res);
});
// "name_level": "super",
// "group_level": "marte"
$router -> delete("/maint", function(){
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $cox = new \App\connect();
    $res = $cox->con->prepare("DELETE FROM maint_area WHERE id =:CEDULA");
    $res->bindValue("CEDULA", $_DATA["id"]);
    $res->execute();
    $res = $res->rowCount();
    echo json_encode($res);
});
/////
$router->post("/nivel", function(){
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $cox = new \App\connect();
    $res = $cox->con->prepare("INSERT INTO levels (name_level,group_level) VALUES (:NAME_LEVEL,:GROUP_LEVEL)");
    $res-> bindValue("NAME_LEVEL", $_DATA['name_level']); 
    $res-> bindValue("GROUP_LEVEL", $_DATA['group_level']); //para editar se debe escribir la sentencia dentro del $_DATA["nom"] es decir { nom: Wilfer, id: 1}
    $res -> execute();
    $res = $res->rowCount();
    echo json_encode($res);
});


$router->post("/maint", function(){
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $cox = new \App\connect();
    $res = $cox->con->prepare("INSERT INTO maint_area (id_area,id_staff,id_position,id_journey) VALUES (:ID_AREA,:ID_STAFF,:ID_POSITION,:ID_JOURNEY)");
    $res-> bindValue("ID_AREA", $_DATA['id_area']); 
    $res-> bindValue("ID_STAFF", $_DATA['id_staff']); 
    $res-> bindValue("ID_POSITION", $_DATA['id_position']); 
    $res-> bindValue("ID_JOURNEY", $_DATA['id_journey']);
    $res -> execute();
    $res = $res->rowCount();
    echo json_encode($res);
});
/**6o-tabla contries---------------------------------------- */
$router->get("/countries", function(){
    $cox = new \App\connect();
    $res = $cox->con->prepare("SELECT * FROM countries");
    $res -> execute();
    $res = $res->fetchAll(\PDO::FETCH_ASSOC);
     // retorna la consulta como un array asociativo 
    echo json_encode($res);
});
// $router->get("/cam", function(){
//     echo "llega aqui";
// });


$router->put("/countries", function(){
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $cox = new \App\connect();
    $res = $cox->con->prepare("UPDATE countries SET name_country = :NAME_CONTRY WHERE id =:CEDULA");
    $res-> bindValue(":NAME_CONTRY", $_DATA['name_country']); //para editar se debe escribir la sentencia dentro del $_DATA["nom"] es decir { nom: Wilfer, id: 1}
    $res-> bindValue("CEDULA", $_DATA['id']);
    $res -> execute();
    $res = $res->rowCount();
    echo json_encode($res);
});
// "name_level": "super",
// "group_level": "marte"
$router -> delete("/countries", function(){
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $cox = new \App\connect();
    $res = $cox->con->prepare("DELETE FROM countries WHERE id =:CEDULA");
    $res->bindValue("CEDULA", $_DATA["id"]);
    $res->execute();
    $res = $res->rowCount();
    echo json_encode($res);
});

$router->post("/countries", function(){
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $cox = new \App\connect();
    $res = $cox->con->prepare("INSERT INTO countries (name_country) VALUES (:NAME_CONTRY)");
    $res-> bindValue("NAME_CONTRY", $_DATA['name_country']);
     
    $res -> execute();
    $res = $res->rowCount();
    echo json_encode($res);
});
/**7-tabla journey------------------------------------------------------------------------------------ */
$router->get("/journey", function(){
    $cox = new \App\connect();
    $res = $cox->con->prepare("SELECT * FROM journey");
    $res -> execute();
    $res = $res->fetchAll(\PDO::FETCH_ASSOC);
     // retorna la consulta como un array asociativo 
    echo json_encode($res);
});



$router->put("/journey", function(){
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $cox = new \App\connect();
    $res = $cox->con->prepare("UPDATE journey SET name_journey = :NAME_JOURNEY, check_in= :CHECK_IN, check_out= :CHECK_OUT   WHERE id =:CEDULA");
    $res-> bindValue("NAME_JOURNEY", $_DATA['name_journey']);
    $res-> bindValue("CHECK_IN", $_DATA['check_in']);
    $res-> bindValue("CHECK_OUT", $_DATA['check_out']);
    $res-> bindValue("CEDULA", $_DATA['id']); 
    $res -> execute();
    $res = $res->rowCount();
    echo json_encode($res);
});

$router -> delete("/journey", function(){
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $cox = new \App\connect();
    $res = $cox->con->prepare("DELETE FROM journey WHERE id =:CEDULA");
    $res->bindValue("CEDULA", $_DATA["id"]);
    $res->execute();
    $res = $res->rowCount();
    echo json_encode($res);
});

$router->post("/journey", function(){
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $cox = new \App\connect();
    $res = $cox->con->prepare("INSERT INTO levels (name_journey,group_level) VALUES (:NAME_LEVEL,:GROUP_LEVEL)");
    $res-> bindValue("NAME_LEVEL", $_DATA['name_level']); 
    $res-> bindValue("GROUP_LEVEL", $_DATA['group_level']); //para editar se debe escribir la sentencia dentro del $_DATA["nom"] es decir { nom: Wilfer, id: 1}
    $res -> execute();
    $res = $res->rowCount();
    echo json_encode($res);
});

    $router->run();
    /*
        Preparar -> 
            - Se llama a la conexion    
        Enviar  ->
        Ejecutar ->
        Esperar ->
    */
?>