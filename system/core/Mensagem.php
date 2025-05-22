<?php
namespace system\core;
enum Role
{
    case  primary;
    case danger;
    case warning;
    case secondary;
    case info;
}
class Mensagem
{
    //atributos (propriedades)
    /*
    public - visível em toda a aplicação
    private - visível apenas dentro da classe
    protected - visível apenas dentro da classe e nas classes que herdam

    */
    private $texto;
    private $css;

    //metodos
    public function renderizar():string
    {
        //return "mensagem";
        return "<div class='{$this->css}' role='alert'>{$this->texto}
        </div>";
    }
    private function filtrar(string $texto):string
    {
        return filter_var(strip_tags($texto), FILTER_SANITIZE_SPECIAL_CHARS);
    }
    public function sucesso(string $texto):Mensagem
   {
    $this->css ="alert alert-success";
    $this->texto = $this->filtrar($texto);
    return $this;
   } 
 public function alertaGeral(string $role,string $texto):Mensagem
   {
    $this->css ="alert alert-{$role}";
    $this->texto = $this->filtrar($texto);
    return $this;
   } 
   public function alerta(string $texto):Mensagem
   {
        $this->css ="alert alert-danger";
        $this->texto = $texto;
        return $this;
   }
   //Metodo ToString
   public function __tostring(){
        return $this->renderizar();
   }

}