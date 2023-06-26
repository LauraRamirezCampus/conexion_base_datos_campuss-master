<?php
    require "../vendor/autoload.php"; //se trae el autoload desde el vendor creado por composer
    $router = new \Bramus\Router\Router();
    

/** Tabla Areas------------------------------------------------------------------------------------------------------------------------------------------------- */

    $router->get("/camper", function(){
        $cox = new \App\connect();
        $res = $cox->con->prepare("SELECT * FROM areas");
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
    
    /**Tabla campers--------------------------------------------------------------------------------------------------------------------------------------*/
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

    /**tabla cities------------------------------------------------------------------------------------------------------------------------------------------- */

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
    /**Tabla leves---------------------------------------------------------------- */

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
        $res = $cox->con->prepare("UPDATE leves SET name_level = :NAME_LEVEL   WHERE id =:CEDULA");
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



    $router->run();
    /*
        Preparar -> 
            - Se llama a la conexion    
        Enviar  ->
        Ejecutar ->
        Esperar ->
    */
?>