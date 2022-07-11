<?php

class Venda {
    public $produtos;
    public $valor;
    public $numPdt=0;

    public function imprimir(){
        echo "Venda com o valor: " . $this->valor . "</br>";
        for ($x=0; $x<$this->numPdt; $x++){
            echo "Produto: " . $this->produtos[$x]->nome . 
            " - Valor UN: " . $this->produtos[$x]->valor . 
            " - QTD: " . $this->produtos[$x]->qtd . 
            " - Valor Total: " . $this->produtos[$x]->valorT . "</br>";
        }
    }

    public function calcularV(){
        $this->valor = 0;
            for ($x=0; $x<$this->numPdt; $x++){
            $this->valor += $this->produtos[$x]->valorT;
        }
    }

    public function gerarPdt(){
        $pdt1 = new Produto();
        $pdt1->id = 1;
        $pdt1->nome = "Café";
        $pdt1->valor = 10;
        $pdt1->qtd = 10;
        $this->numPdt++;
        $pdt1->calcular();

        $pdt2 = new Produto();
        $pdt2->id = 2;
        $pdt2->nome = "Desodorante";
        $pdt2->valor = 5;
        $pdt2->qtd = 2;
        $this->numPdt++;
        $pdt2->calcular();

        $pdt3 = new Produto();
        $pdt3->id = 3;
        $pdt3->nome = "Iogurte";
        $pdt3->valor = 3;
        $pdt3->qtd = 5;
        $this->numPdt++;
        $pdt3->calcular();

        $pdt4 = new Produto();
        $pdt4->id = 4;
        $pdt4->nome = "Vinho";
        $pdt4->valor = 4000;
        $pdt4->qtd = 1;
        $this->numPdt++;
        $pdt4->calcular();

        $this->produtos[0] = $pdt1;
        $this->produtos[1] = $pdt2;
        $this->produtos[2] = $pdt3;
        $this->produtos[3] = $pdt4;

    }
}

?>