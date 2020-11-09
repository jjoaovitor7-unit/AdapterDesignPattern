<?php
require_once(getcwd() . '/src/model/Produto.php');

class Fogao extends Produto {
    public function umMetodoDeFogao() : void
    {
        echo "Você comprou um fogão.\n";
    }
}
?>