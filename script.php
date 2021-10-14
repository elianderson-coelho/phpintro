<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if ($idade >=6 && $idade <= 12){
    echo "Competidor da categoria infantil";
    }elseif ($idade > 12 && $idade<= 18){
        echo $nome . " - Competidor da categoria adolescente";
    } elseif ($idade > 18 && $idade<= 60) { 
        echo $nome . " - Competidor da categoria adulto";
    } elseif ($idade > 60) {
        echo $nome . " - Competidor da categoria idoso";
    } else {
        echo "IDADE INVÁLIDA";
    
};