<?php
    class Empresa{
        public $vendas;

        public function imprimir(){
            echo "Vendas";
            for ($x=0; $x<count($this->vendas); $x++){
                echo "<br>" .
                "ID: " . $this->vendas[$x]->id .
                "<br>" .
                "Objetivo: " . $this->vendas[$x]->finalidade .
                "<br>" . 
                "Paga: " . $this->vendas[$x]->paga .
                "<br>" . "<br>";
            }
        }
    }