<?php
require_once(__DIR__ . "/model/IProduto.php");
require_once(__DIR__ . "/model/eletrodomesticos/LiquidificadorAdapter.php");
require_once(__DIR__ . "/model/eletrodomesticos/Liquidificador.php");
require_once(__DIR__ . "/model/linhabranca/FogaoAdapter.php");
require_once(__DIR__ . "/model/linhabranca/Fogao.php");
require_once(__DIR__ . "/model/linhabranca/GeladeiraAdapter.php");
require_once(__DIR__ . "/model/linhabranca/Geladeira.php");

class Client {
    public function main()
    {
        echo "Produtos";
        echo "\n1-Liquidificador";
        echo "\n2-Fogão";
        echo "\n3-Geladeira";
        echo "\n:";

        $optionProdutos = fgets(STDIN);
        if ($optionProdutos == 1)
        {
            $produto = new LiquidificadorAdapter(new Liquidificador());
            $produto->execute();
        }

        else if ($optionProdutos == 2)
        {
            $produto = new FogaoAdapter(new Fogao());
            $produto->execute();
        }

        else if ($optionProdutos == 3)
        {
            $produto = new GeladeiraAdapter(new Geladeira());
            $produto->execute();
        }
        else {
            echo "Produto não encontrado.\n";
        }
    }
}

$client = new Client();
$client->main();
?>
