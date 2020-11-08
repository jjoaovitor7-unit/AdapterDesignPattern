<?php
require_once(__DIR__ . '/Torradeira.php');
require_once(getcwd() . '/src/model/IProduto.php');

class TorradeiraAdapter implements IProduto {
    private Torradeira $torradeira;

    function __construct(Torradeira $torradeira)
    {
        $this->torradeira = $torradeira;
    }

    public function execute() : void
    {
        $this->torradeira->umMetodoDeTorradeira();
    }
}
?>