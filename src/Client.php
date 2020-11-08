<?php
require_once(__DIR__ . "/model/IProduto.php");
require_once(__DIR__ . "/model/eletrodomesticos/LiquidificadorAdapter.php");
require_once(__DIR__ . "/model/eletrodomesticos/Liquidificador.php");
require_once(__DIR__ . "/model/linhabranca/FogaoAdapter.php");
require_once(__DIR__ . "/model/linhabranca/Fogao.php");

class Client {
    public function main()
    {
        echo "Produtos";
        echo "\n1-Liquidificador";
        echo "\n2-Fogão";
        echo "\n:";
        $optionProdutos = fgets(STDIN);

        if ($optionProdutos == 1)
        {
            $produto1 = new LiquidificadorAdapter(new Liquidificador());
            $produto1->execute();
        }

        else if ($optionProdutos == 2)
        {
            $produto2 = new FogaoAdapter(new Fogao());
            $produto2->execute();
        }
        else {
            echo "Produto não encontrado.\n";
        }
    }
}

$client = new Client();
$client->main();
?>
