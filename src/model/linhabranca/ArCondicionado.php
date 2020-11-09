<?php
require_once(getcwd() . '/src/model/Produto.php');

class ArCondicionado extends Produto {
    public function umMetodoDeArCondicionado() : void
    {
        echo "Você comprou um ar-condicionado.\n";
    }
}
?>