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
require_once(__DIR__ . "/model/eletrodomesticos/TorradeiraAdapter.php");
require_once(__DIR__ . "/model/eletrodomesticos/Torradeira.php");

class Client {
    public function main()
    {
        echo "Produtos";
        echo "\n1-Eletrodomésticos";
        echo "\n2-Eletrodomésticos Linha Branca";
        echo "\n:";
        $optionProdutos = fgets(STDIN);

        if ($optionProdutos == 1) {
            echo "\nEletrodomésticos";
            echo "\n1-Batedeira";
            echo "\n2-Cafeteira";
            echo "\n3-Liquidificador";
            echo "\n4-Torradeira";
            echo "\n:";

            $optionEletrodomesticos = fgets(STDIN);
            if ($optionEletrodomesticos == 1)
            {
                $produto = new BatedeiraAdapter(new Batedeira());
                $produto->execute();
            }

            else if ($optionEletrodomesticos == 2)
            {
                $produto = new CafeteiraAdapter(new Cafeteira());
                $produto->execute();
            }

            else if ($optionEletrodomesticos == 3)
            {
                $produto = new LiquidificadorAdapter(new Liquidificador());
                $produto->execute();
            }

            else if ($optionEletrodomesticos == 4)
            {
                $produto = new TorradeiraAdapter(new Torradeira());
                $produto->execute();
            }

            else {
                echo "Opção não encontrada.\n";
            }
        }

        else if ($optionProdutos == 2){
            echo "\nEletromésticos Linha Branca";
            echo "\n1-ArCondicionado";
            echo "\n2-Fogão";
            echo "\n3-Geladeira";
            echo "\n:";

            $optionEletrodomesticos = fgets(STDIN);
            if ($optionEletrodomesticos == 1)
            {
                $produto = new ArCondicionadoAdapter(new ArCondicionado());
                $produto->execute();
            }

            else if ($optionEletrodomesticos == 2)
            {
                $produto = new FogaoAdapter(new Fogao());
                $produto->execute();
            }

            else if ($optionEletrodomesticos == 3)
            {
                $produto = new GeladeiraAdapter(new Geladeira());
                $produto->execute();                
            }
            
            else {
                echo "Opção não encontrada.\n";
            }
        }
        
        else {
            echo "Opção não encontrada.\n";
        }
    }
}

$client = new Client();
$client->main();
?>
