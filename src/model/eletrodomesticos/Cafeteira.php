<?php
require_once(getcwd() . '/src/model/Produto.php');

class Cafeteira extends Produto {
    public function umMetodoDeCafeteira()
    {
        echo "Você comprou uma cafeteira.\n";
    }
}
?>
