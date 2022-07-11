<?php
    include("produto.php");
    include("venda.php");

    $venda = new Venda();
    $venda->gerarPdt();
    $venda->calcularV();

    echo "</br>";
    echo $venda->imprimir();
    
?>