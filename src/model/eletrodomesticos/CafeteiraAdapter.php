<?php
require_once(__DIR__ . '/Cafeteira.php');
require_once(getcwd() . '/src/model/IProduto.php');

class CafeteiraAdapter implements IProduto {
    private Cafeteira $cafeteira;

    function __construct(Cafeteira $cafeteira)
    {
        $this->cafeteira = $cafeteira;
    }

    public function execute() : void
    {
        $this->cafeteira->umMetodoDeCafeteira();
    }
}
