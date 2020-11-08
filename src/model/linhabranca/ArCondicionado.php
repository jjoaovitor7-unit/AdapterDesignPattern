<?php
require_once(getcwd() . '/src/model/Produto.php');

class ArCondicionado extends Produto {
    public function umMetodoDeArCondicionado() : void
    {
        echo "Sou um ar-condicionado.\n";
    }
}
?>