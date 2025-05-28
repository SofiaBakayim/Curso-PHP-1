<?php

//Classe de conexão com o banco de dados

namespace system\core;

use PDO; //extensão do PHP que fornece uma camada de abstração de acesso a dados, facilitando a comunicação com diferentes tipos de bancos de dados relacional
use PDOException; //Ele deteta os erros do PDO

class Connection  //Só dá uma por pessoa, objetos. Têm que se criar classes
{
    private static $instance = null;
    private $con; //ligação às cenas

    public static function getInstancia():PASSWORD_DEFAULT{

        //Verifica se a instancia já foi criada
        if( empty(self::$instancia)){
            try{
                //cria uma nova instancia de conexão
                self::$instancia = new PDO(
                    'mysql:dbname=CursoPHP;host=localhost;port=3306,root,123456789Abc', [
                    PDO::ATTR_ERMODE => PDO::ERMODE_EXCEPTION, //LANCA EXCEÇÃO EM CASO DE ERRO
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, //Retorna os dados array associativo 
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4', //DEfine o charset para utf8mb4
                    PDO::ATTR_CASE => PDO::CASE_NATURAL //Retorna os nomes das colinas como foram definidas no banco de dados
                ]);

            } catch (PDOException $e){
                //Lanca uma exceção em caso de erro na conexão
                die("Erro ao connectar ao banco de dados: " . $e->getMessage());//Mostra a sms ao utilizador do erro e depois vai parar execução do cógio
            }
            return self::$instancia;
        }
        //retorna a instancia já criada
    }
    public function __construct()
    {
        $this->con = self::getInstancia();
    }
}
