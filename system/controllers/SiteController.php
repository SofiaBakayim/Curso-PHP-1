<?php
//O controlador SiteController é responsável por gerenciar
//  as páginas do site, como a página inicial, sobre, contato, login e registro.
namespace system\controllers;

use system\core\Controller;

class SiteController extends Controller{

    //chamar o construtor da classe pai
    public function __construct(){
        parent::__construct('templates/site/views');
    }
    public function index(){
        //echo "<h1 style='color: blue;'>Página Inicial</h1> ";
        echo $this->template->renderizar('index.html', [
            'titulo' => 'Pagina inicial com Twig',
            'subtitulo' => 'Subtitulo da pagina inicial Twig',
            'descricao' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'data' => date('d/m/Y H:i:s'),
        ]);
       
    }
    public function sobre(){
        echo $this->template->renderizar('sobre.html', [
            'titulo' => 'Pagina sobre com Twig',
            'subtitulo' => 'Subtitulo da pagina sobre Twig',
            'descricao' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'data' => date('d/m/Y H:i:s'),
        ]);
        echo "<h1 style='color: blue;'>Página Sobre</h1> ";
        echo "<p>lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>";
    }
    public function contato(){
         echo $this->template->renderizar('contato.html', [
            'titulo' => 'Pagina contato com Twig',
            'subtitulo' => 'Subtitulo da pagina sobre Twig',
            'descricao' => 'Loremmmmmmmmmmmmmmmm Ipsum is simply dummy text of the printing and typesetting industry.',
            'data' => date('d/m/Y H:i:s'),
        ]);
    }
    public function login(){
        echo "<h1 style='color: blue;'>Formulário de Login</h1> ";
       
    }
    public function registo(){
        echo "<h1 style='color: blue;'>Formulário de Registo</h1> ";
       
    }
    public function erro404(){
        echo $this->template->renderizar('404.html', [
            'titulo' => 'Pagina não Econtrada, VOLTA PARA TRÁS PAH!!',
            'subtitulo' => 'A Página que querias não existe, capitché?!'
        ]);   
    }
}