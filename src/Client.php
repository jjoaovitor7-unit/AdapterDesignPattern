<?php
require_once(__DIR__ . "/model/IProduto.php");

// Eletrodomésticos
require_once(__DIR__ . "/model/eletrodomesticos/BatedeiraAdapter.php");
require_once(__DIR__ . "/model/eletrodomesticos/Batedeira.php");

require_once(__DIR__ . "/model/eletrodomesticos/CafeteiraAdapter.php");
require_once(__DIR__ . "/model/eletrodomesticos/Cafeteira.php");

require_once(__DIR__ . "/model/eletrodomesticos/LiquidificadorAdapter.php");
require_once(__DIR__ . "/model/eletrodomesticos/Liquidificador.php");

require_once(__DIR__ . "/model/eletrodomesticos/SanduicheiraAdapter.php");
require_once(__DIR__ . "/model/eletrodomesticos/Sanduicheira.php");

require_once(__DIR__ . "/model/eletrodomesticos/TorradeiraAdapter.php");
require_once(__DIR__ . "/model/eletrodomesticos/Torradeira.php");

// Eletrodomésticos Linha Branca
require_once(__DIR__ . "/model/linhabranca/ArCondicionadoAdapter.php");
require_once(__DIR__ . "/model/linhabranca/ArCondicionado.php");

require_once(__DIR__ . "/model/linhabranca/FogaoAdapter.php");
require_once(__DIR__ . "/model/linhabranca/Fogao.php");

require_once(__DIR__ . "/model/linhabranca/GeladeiraAdapter.php");
require_once(__DIR__ . "/model/linhabranca/Geladeira.php");

require_once(__DIR__ . "/model/linhabranca/LavadoraAdapter.php");
require_once(__DIR__ . "/model/linhabranca/Lavadora.php");

require_once(__DIR__ . "/model/linhabranca/MicroOndasAdapter.php");
require_once(__DIR__ . "/model/linhabranca/MicroOndas.php");

class Client {

    public $carrinhoDeCompras = array();
    public $isTrue = true;

    public function main()
    {
        while ($this->isTrue)
        {
            echo "\nProdutos";
            echo "\n1-Eletrodomésticos";
            echo "\n2-Eletrodomésticos Linha Branca";
            echo "\n:";
            $optionProdutos = fgets(STDIN);

            if ($optionProdutos == 1)
            {
                echo "\nEletrodomésticos";
                echo "\n1-Batedeira";
                echo "\n2-Cafeteira";
                echo "\n3-Liquidificador";
                echo "\n4-Sanduicheira";
                echo "\n5-Torradeira";
                echo "\n:";

                $optionEletrodomesticos = fgets(STDIN);
                if ($optionEletrodomesticos == 1)
                {
                    $produto = new BatedeiraAdapter(new Batedeira());
                    $produto->execute();
                    array_push($this->carrinhoDeCompras, "Batedeira");
                }
                
                else if ($optionEletrodomesticos == 2)
                {
                    $produto = new CafeteiraAdapter(new Cafeteira());
                    $produto->execute();
                    array_push($this->carrinhoDeCompras, "Cafeteira");
                }
                
                else if ($optionEletrodomesticos == 3)
                {
                    $produto = new LiquidificadorAdapter(new Liquidificador());
                    $produto->execute();
                    array_push($this->carrinhoDeCompras, "Liquidificador");
                }
                
                else if ($optionEletrodomesticos == 4)
                {
                    $produto = new SanduicheiraAdapter(new Sanduicheira());
                    $produto->execute();
                    array_push($this->carrinhoDeCompras, "Sanduicheira");
                }
                
                else if ($optionEletrodomesticos == 5)
                {
                    $produto = new TorradeiraAdapter(new Torradeira());
                    $produto->execute();
                    array_push($this->carrinhoDeCompras, "Torradeira");
                }
                
                else {
                    echo "Opção não encontrada.\n";
                }

            }
            
            else if ($optionProdutos == 2)
            {
                echo "\nEletromésticos Linha Branca";
                echo "\n1-ArCondicionado";
                echo "\n2-Fogão";
                echo "\n3-Geladeira";
                echo "\n4-Lavadora";
                echo "\n5-MicroOndas";
                echo "\n:";

                $optionEletrodomesticos = fgets(STDIN);
                if ($optionEletrodomesticos == 1)
                {
                    $produto = new ArCondicionadoAdapter(new ArCondicionado());
                    $produto->execute();
                    array_push($this->carrinhoDeCompras, "ArCondicionado");
                }
                
                else if ($optionEletrodomesticos == 2)
                {
                    $produto = new FogaoAdapter(new Fogao());
                    $produto->execute();
                    array_push($this->carrinhoDeCompras, "Fogão");
                }
                
                else if ($optionEletrodomesticos == 3)
                {
                    $produto = new GeladeiraAdapter(new Geladeira());
                    $produto->execute();
                    array_push($this->carrinhoDeCompras, "Geladeira");
                }
                
                else if ($optionEletrodomesticos == 4)
                {
                    $produto = new LavadoraAdapter(new Lavadora());
                    $produto->execute();
                    array_push($this->carrinhoDeCompras, "Lavadora");
                }
                
                else if ($optionEletrodomesticos == 5)
                {
                    $produto = new MicroOndasAdapter(new MicroOndas());
                    $produto->execute();
                    array_push($this->carrinhoDeCompras, "MicroOndas");
                }
                
                else {
                    echo "Opção não encontrada.\n";
                }
            }
            
            else {
                echo "Opção não encontrada.\n";
            }

            echo "\nDeseja exibir o carrinho de compras? <S/n>\n:";
            $carrinhoDeComprasCond = fgets(STDIN);
            if (strtok($carrinhoDeComprasCond, "\n") == "S" || strtok($carrinhoDeComprasCond, "\n") == 's')
            {
                echo "\nCarrinho de compras:\n";
                // print_r($this->carrinhoDeCompras);

                // Iterator
                $obj = new ArrayObject($this->carrinhoDeCompras);
                $it = $obj->getIterator();

                while ($it->valid())
                {
                    echo $it->current() . "\n";
                    $it->next();
                }
            }

            echo "\nDeseja parar o programa? <S/n>\n:";
            $stopCond = fgets(STDIN);
            if (strtok($stopCond, "\n") == "S" || strtok($stopCond, "\n") == "s")
            {
                $this->isTrue = false;
            }
        }
    }
}

$client = new Client();
$client->main();
?>
