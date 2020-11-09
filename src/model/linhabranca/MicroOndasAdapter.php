<?php
require_once(getcwd() . '/src/model/IProduto.php');
require_once(__DIR__ . "/MicroOndas.php");

class MicroOndasAdapter implements IProduto {
    private MicroOndas $microondas;

    function __construct(MicroOndas $microondas)
    {
        $this->microondas = $microondas;
    }

    public function execute() : void
    {
        $this->microondas->umMetodoDeMicroOndas();
    }
}
