<?php
require_once(getcwd() . '/src/model/Produto.php');

class Lavadora extends Produto {
    public function umMetodoDeLavadora() : void
    {
        echo "Sou uma lavadora.\n";
    }
}
?>