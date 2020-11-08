<?php
require_once(__DIR__ . '/Liquidificador.php');
require_once(getcwd() . '/src/model/IProduto.php');

class LiquidificadorAdapter implements IProduto {
    private Liquidificador $liquidificador;

    function __construct(Liquidificador $liquidificador)
    {
        $this->liquidificador = $liquidificador;
    }

    public function execute() : void
    {
        $this->liquidificador->umMetodoDeLiquidificador();
    }
}
?>