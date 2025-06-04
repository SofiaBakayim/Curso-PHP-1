<?php

namespace system\model;

use system\core\Connection;

class PostModel{
    //metodo selecionar todos os post - SELECT
    public function buscarPosts(): array{
        $query = "SELECT * FROM 
                    Tb_Posts
                  WHERE
                  status = 1 
                  ORDER BY
                    ID ASC";
        $stmt = Connection::getInstancia()->query( $query);
        $result = $stmt->fetchAll();
        return $result;
    }

    //metodo selecionar um post por ID - SELECT
    public function buscarPostsPorID(int $ID):bool | Object
    {
        $query = "SELECT * FROM 
                    Tb_Posts
                  WHERE
                    ID = {$ID}";
        $stmt = Connection::getInstancia()->query( $query);
        $result = $stmt->fetch(); //Só têm um registo
        return $result;
    }
}
