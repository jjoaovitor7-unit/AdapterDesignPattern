<?php
require_once(__DIR__ . "/model/IProduto.php");
require_once(__DIR__ . "/model/eletrodomesticos/LiquidificadorAdapter.php");
require_once(__DIR__ . "/model/eletrodomesticos/Liquidificador.php");
require_once(__DIR__ . "/model/linhabranca/FogaoAdapter.php");
require_once(__DIR__ . "/model/linhabranca/Fogao.php");

class Client {
    public function main()
    {
        $produto1 = new LiquidificadorAdapter(new Liquidificador());
        $produto1->execute();

        $produto2 = new FogaoAdapter(new Fogao());
        $produto2->execute();
    }
}

$client = new Client();
$client->main();
?>
