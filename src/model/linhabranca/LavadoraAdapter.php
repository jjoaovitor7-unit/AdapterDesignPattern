<?php
require_once(getcwd() . '/src/model/IProduto.php');
require_once(__DIR__ . "/Lavadora.php");

class LavadoraAdapter implements IProduto {
    private Lavadora $lavadora;

    function __construct(Lavadora $lavadora)
    {
        $this->lavadora = $lavadora;
    }

    public function execute() : void
    {
        $this->lavadora->umMetodoDeLavadora();
    }
}
