<?php
require_once(getcwd() . '/src/model/Produto.php');

class Torradeira extends Produto {
    public function umMetodoDeTorradeira()
    {
        echo "Sou uma torradeira.\n";
    }
}
?>
