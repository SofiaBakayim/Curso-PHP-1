<?php

namespace system\support;

use Twig\Lexer;
use system\core\helpers;

class Template
{
    //atributo
    private \Twig\Environment $twig;

    //construtor
    public function __construct(string $diretorio)
    {
        $loader = new \Twig\Loader\FilesystemLoader($diretorio);
       $this->twig = new \Twig\Environment($loader);

       //chamar a função helpers
       $lexer = new Lexer($this->twig, array(
        $this->helpers()
       ));
    }

    ///metodo de renderizacao
    public function renderizar(string $view, array $dados = []){
        return $this->twig->render($view, $dados);
    }

    private function helpers(): void {
        array(
            $this->twig->addFunction( new \Twig\TwigFunction('saudacao', function(){
                return Helpers::saudacao();
            })
        ),
    );

     array(
            $this->twig->addFunction( new \Twig\TwigFunction('url', function(string $url = ''){
                return Helpers::url( $url);
            })
        ),
    );
}
}