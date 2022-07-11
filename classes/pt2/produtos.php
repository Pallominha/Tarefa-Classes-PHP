<?php
    class Produtos{
        public $nome;
        public $valorUN;
        public $qtd;
        public $valortotal;

        public function calcularvalor(){
            $this->valortotal = $this->valorUN * $this->qtd;
            return $this->valortotal;
        }
    }

?>