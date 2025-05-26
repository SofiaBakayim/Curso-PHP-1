<?php
//ficheiro de rotas - suporte a uRL amigáveis (SLUG - URL amigável)


use Pecee\SimpleRouter\SimpleRouter;

try{

// Definindo o namespace para os controladores
SimpleRouter::setDefaultNamespace('system\controllers');

//--inicio de rotas
SimpleRouter::get('/', 'SiteController@index');//classe@metodo
SimpleRouter::get('/index.php', 'SiteController@index');//classe@metodo
SimpleRouter::get('/sobre', 'SiteController@sobre');//classe@metodo
SimpleRouter::get('/contato', 'SiteController@contato');//classe@metodo
SimpleRouter::get('/login', 'SiteController@login');//classe@metodo
SimpleRouter::get('/registo', 'SiteController@registo');//classe@metodo

//rota de erro 404
SimpleRouter::get('/404', 'SiteController@erro404');

//--fim de rotas
SimpleRouter::start();

}

catch(Pecee\SimpleRouter\Exceptions\NotFoundHttpException $e){
    ///rederecionar para a página de erro 404
    SimpleRouter::response()->redirect('/404');
}

/*catch(Exception $e)
{
    echo $e->getMessage();
}*/
