<?php
require_once(getcwd() . '/src/model/IProduto.php');
require_once(__DIR__ . "/Geladeira.php");

class GeladeiraAdapter implements IProduto {
    private Geladeira $geladeira;

    function __construct(Geladeira $geladeira)
    {
        $this->geladeira = $geladeira;
    }

    public function execute() : void
    {
        $this->geladeira->umMetodoDeGeladeira();
    }
}
