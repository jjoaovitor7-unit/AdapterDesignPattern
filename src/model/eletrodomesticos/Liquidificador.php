<?php
require_once(getcwd() . '/src/model/Produto.php');

class Liquidificador extends Produto {
    public function umMetodoDeLiquidificador()
    {
        echo "Sou um liquidificador.\n";
    }
}
?>
