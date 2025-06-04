<?php

namespace system\model;

use system\core\Connection;

class CategoriaModel{
    public function buscarCategorias():array{
        //Lista as categorias ordenadas por ordem alfabetica
        $sql = "SELECT * FROM `Tb_Categorias` ORDER BY Tb_Categorias.Titulo ASC ";
        $stmt = Connection::getInstancia()->query($sql);
        $result = $stmt->fetchAll();
        return $result;
    }

    public function postsPorCategoria(int $ID):array{
        $sql = "SELECT * FROM `Tb_Posts` WHERE Categoria_ID = {$ID} ORDER BY Tb_Posts.ID DESC";
        $stmt = Connection::getInstancia()->query($sql);
        $result = $stmt->fetchAll();
        return $result;
    }

    public function buscaNomeCategoria(int $ID):string{
        $sql = "SELECT Titulo FROM Tb_Categorias WHERE ID = {$ID}";
        $stmt = Connection::getInstancia()->query($sql);
        $result = $stmt->fetch()->Titulo;
        return $result;
    }
}
