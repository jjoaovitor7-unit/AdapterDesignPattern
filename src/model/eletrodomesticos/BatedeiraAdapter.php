<?php
require_once(__DIR__ . '/Liquidificador.php');
require_once(getcwd() . '/src/model/IProduto.php');

class BatedeiraAdapter implements IProduto {
    private Batedeira $batedeira;

    function __construct(Batedeira $batedeira)
    {
        $this->batedeira = $batedeira;
    }

    public function execute() : void
    {
        $this->batedeira->umMetodoDeBatedeira();
    }
}
