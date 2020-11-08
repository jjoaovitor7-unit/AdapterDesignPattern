<?php
require_once(getcwd() . '/src/model/Produto.php');

class Batedeira extends Produto {
    public function umMetodoDeBatedeira()
    {
        echo "Sou uma batedeira.\n";
    }
}
?>
