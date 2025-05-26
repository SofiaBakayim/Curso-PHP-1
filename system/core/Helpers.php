<?php

namespace system\core;

class Helpers{
        /**
     * Função Saudacao
     * @author paulosilvasantos <paulosilvasantos@gmail.com>
     * @return string saudação de acordo com a hora atual do servidor
     * @version 1.0
     * @since 07/04/2025 
     */
    public static function saudacao():string
    {
    $hora = date("H");
    $mensagem = "";

    if($hora >= 0 && $hora < 12){
        $mensagem = "Bom dia";
    }else if($hora >= 12 && $hora < 20)
    {
        $mensagem = "Boa tarde";
    }else{
        $mensagem = "Boa noite";
    }
    return "Olá, $mensagem";
    }

    /**
     * Função de Resumir Texto
     * @author Paulo Santos <paulosilvasantos@gmail.com>
     * @param string $texto texto a ser resumido
     * @param int $limite opcional numero limite de caracteres a mostrar
     * @param string $continue opcional texto a ser adicionado no final do texto resumido
     * @return string texto resumido
     * @version 1.0
     * @since 07/04/2025
     */
   public static  function resumirTexto(string $texto, int $limite=50, string $continue='...' ): string
    {
    //return $texto;
    $textoLimpo = trim(strip_tags($texto));
    //1. se qtd caracteres for menor que o limite, retorna o texto
    if(mb_strlen($textoLimpo) <= $limite){
    return $textoLimpo;
    }else{
        //2. caso contrario, corta o texto
    return mb_substr($textoLimpo, 0, $limite) . $continue;
    }
    }

    public static function validarEmail(string $email): bool
    {
    return filter_var($email, FILTER_VALIDATE_EMAIL) ? true : false;

    }

    public static function exibirInformacoesServidor():void
    {
    echo "<h2>Informações do Servidor</h2>";
    echo "<pre>";
    echo print_r($_SERVER);
    echo "</pre>";
    }

    public static function url(string $url = ''): string{
    $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');
    $ambiente = str_contains($servidor, 'localhost') ? URL_DESENVOLVIMENTO : URL_PRODUCAO;

    if(str_starts_with($url, '/')){
      return $ambiente . $url;
    }else 
    {
      return $ambiente . '/' . $url;
    }
    //return $ambiente . $url;
    //url('sobre');
    //http:cursophp.localhost/sobre
  }
  }



