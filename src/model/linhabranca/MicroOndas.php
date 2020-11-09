<?php
require_once(getcwd() . '/src/model/Produto.php');

class MicroOndas extends Produto {
    public function umMetodoDeMicroOndas() : void
    {
        echo "Você comprou um micro-ondas.\n";
    }
}
?>