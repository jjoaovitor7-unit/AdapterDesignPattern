<?php
require_once(__DIR__ . '/Sanduicheira.php');
require_once(getcwd() . '/src/model/IProduto.php');

class SanduicheiraAdapter implements IProduto {
    private Sanduicheira $sanduicheira;

    function __construct(Sanduicheira $sanduicheira)
    {
        $this->sanduicheira = $sanduicheira;
    }

    public function execute() : void
    {
        $this->sanduicheira->umMetodoDeSanduicheira();
    }
}
?>