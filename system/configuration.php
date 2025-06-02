<?php
//echo "<h2> Ficheiro de configuração</h2>";

//fuso horário
date_default_timezone_set("Europe/Lisbon");

/* Definicao de constantes ***/
define("SITE_NOME", "Blog de estudo de IA");
define("SITE_DESCRICAO", "Sistema de gestão de Posts categorizados sobre IA");

//URL de producao
define("URL_PRODUCAO","https://www.blogia.com/");

//URL de desenvolvimento
const URL_DESENVOLVIMENTO = "http://cursophp.localhost";


//Acesso a base de dados
define("DB_HOST", "localhost");
define("DB_PORT", "3306");
define("DB_NAME", "CursoPHP");
define("DB_USER", "root");
define("DB_PASSWORD", "123456789Abc");