<?php

namespace system\model;
use system\core\Connection;

class NewsletterModel{

    //Metodo para registar um email na newsletter
    public function registarEmail(string $email): bool{
        try {
            //code...
            $query = " INSERT INTO Tb_Newsletter ( Email ) VALUES ( :email )";
            $stmt = Connection::getInstancia()->prepare($query);
            return $stmt->execute(['email' => $email]);
        } catch (\Throwable $th) {
            echo "Email duplicado";
            return false;
        }
    }

    public function lista():array {
        $query = "SELECT * FROM Tb_Newsletter";
        $stmt = Connection::getInstancia()->prepare($query);
        return $stmt->fetchAll();
    }
}