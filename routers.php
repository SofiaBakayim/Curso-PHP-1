<?php
//ficheiro de rotas - suporte a uRL amigáveis (SLUG - URL amigável)


use Pecee\SimpleRouter\SimpleRouter;

// Definindo o namespace para os controladores
SimpleRouter::setDefaultNamespace('system\controllers');

//--inicio de rotas
SimpleRouter::get('/', 'SiteController@index');//classe@metodo
SimpleRouter::get('/index.php', 'SiteController@index');//classe@metodo
SimpleRouter::get('/sobre', 'SiteController@sobre');//classe@metodo
SimpleRouter::get('/contato', 'SiteController@contato');//classe@metodo
SimpleRouter::get('/login', 'SiteController@login');//classe@metodo
SimpleRouter::get('/registo', 'SiteController@registo');//classe@metodo

//--fim de rotas
SimpleRouter::start();
