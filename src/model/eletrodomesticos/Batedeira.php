<?php
require_once(getcwd() . '/src/model/Produto.php');

class Batedeira extends Produto {
    public function umMetodoDeBatedeira()
    {
        echo "Você comprou uma batedeira.\n";
    }
}
?>
