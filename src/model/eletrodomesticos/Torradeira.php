<?php
require_once(getcwd() . '/src/model/Produto.php');

class Torradeira extends Produto {
    public function umMetodoDeTorradeira()
    {
        echo "Você comprou uma torradeira.\n";
    }
}
?>
