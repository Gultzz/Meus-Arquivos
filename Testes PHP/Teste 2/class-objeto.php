<?php
 class CD {
    var $titulo;
    var $banda;
    var $ano_lancamento;
 }

 $disco = new CD();
    $disco ->titulo = "Titulo é isso memo";
    $disco ->banda = "Iron Maiden";
    $disco ->ano_lancamento = 1982;

echo $disco->titulo;
?>