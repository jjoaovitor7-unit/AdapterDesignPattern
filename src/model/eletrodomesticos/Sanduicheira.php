<?php
require_once(getcwd() . '/src/model/Produto.php');

class Sanduicheira extends Produto {
    public function umMetodoDeSanduicheira()
    {
        echo "Sou uma sanduicheira.\n";
    }
}
?>
