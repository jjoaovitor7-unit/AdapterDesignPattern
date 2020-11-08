<?php
require_once(__DIR__ . "/model/IProduto.php");
require_once(__DIR__ . "/model/eletrodomesticos/LiquidificadorAdapter.php");
require_once(__DIR__ . "/model/eletrodomesticos/Liquidificador.php");
require_once(__DIR__ . "/model/linhabranca/FogaoAdapter.php");
require_once(__DIR__ . "/model/linhabranca/Fogao.php");
require_once(__DIR__ . "/model/linhabranca/GeladeiraAdapter.php");
require_once(__DIR__ . "/model/linhabranca/Geladeira.php");
require_once(__DIR__ . "/model/linhabranca/ArCondicionadoAdapter.php");
require_once(__DIR__ . "/model/linhabranca/ArCondicionado.php");
require_once(__DIR__ . "/model/eletrodomesticos/BatedeiraAdapter.php");
require_once(__DIR__ . "/model/eletrodomesticos/Batedeira.php");
require_once(__DIR__ . "/model/eletrodomesticos/CafeteiraAdapter.php");
require_once(__DIR__ . "/model/eletrodomesticos/Cafeteira.php");

class Client {
    public function main()
    {
        echo "Produtos";
        echo "\n1-Liquidificador";
        echo "\n2-Fogão";
        echo "\n3-Geladeira";
        echo "\n4-Ar-Condicionado";
        echo "\n5-Batedeira";
        echo "\n6-Cafeteira";
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

        else if ($optionProdutos == 4)
        {
            $produto = new ArCondicionadoAdapter(new ArCondicionado());
            $produto->execute();
        }

        else if ($optionProdutos == 5)
        {
            $produto = new BatedeiraAdapter(new Batedeira());
            $produto->execute();
        }

        else if ($optionProdutos == 6)
        {
            $produto = new CafeteiraAdapter(new Cafeteira());
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
