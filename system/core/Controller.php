<?php

namespace system\core;
/// chamar o mecanismo de template
use system\support\Template;

class Controller{
    //atributo para as subclasses
    protected Template $template;
    public function __construct(string $diretorio){//metodo construtor (magico)
        //echo "<h1>Controller</h1>";
       $this->template = new Template($diretorio);
    }
}