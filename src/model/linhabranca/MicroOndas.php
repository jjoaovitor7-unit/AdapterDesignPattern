<?php
require_once(getcwd() . '/src/model/Produto.php');

class MicroOndas extends Produto {
    public function umMetodoDeMicroOndas() : void
    {
        echo "Sou um micro-ondas.\n";
    }
}
?>