<?php
require_once(getcwd() . '/src/model/IProduto.php');
require_once(__DIR__ . "/ArCondicionado.php");

class ArCondicionadoAdapter implements IProduto {
    private ArCondicionado $arcondicionado;

    function __construct(ArCondicionado $arcondicionado)
    {
        $this->arcondicionado = $arcondicionado;
    }

    public function execute() : void
    {
        $this->arcondicionado->umMetodoDeArCondicionado();
    }
}
?>