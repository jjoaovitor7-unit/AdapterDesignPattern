<?php
require_once(getcwd() . '/src/model/IProduto.php');
require_once(__DIR__ . "/Fogao.php");

class FogaoAdapter implements IProduto {
    private Fogao $fogao;

    function __construct(Fogao $fogao)
    {
        $this->fogao = $fogao;
    }

    public function execute() : void
    {
        $this->fogao->umMetodoDeFogao();
    }
}
