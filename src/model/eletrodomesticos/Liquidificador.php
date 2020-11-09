<?php
require_once(getcwd() . '/src/model/Produto.php');

class Liquidificador extends Produto {
    public function umMetodoDeLiquidificador()
    {
        echo "Você comprou um liquidificador.\n";
    }
}
?>
