<?php

namespace system\support;

class Template
{
    //atributo
    private \Twig\Environment $twig;

    //construtor
    public function __construct(string $diretorio)
    {
        $loader = new \Twig\Loader\FilesystemLoader($diretorio);
       $this->twig = new \Twig\Environment($loader);
    }

    ///metodo de renderizacao
    public function renderizar(string $view, array $dados = []){
        return $this->twig->render($view, $dados);
    }
}