<?php
require_once 'competidor.php';

$competidor = new Competidor();


$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

$competidor->setNome($_POST['nome']);
$competidor->setIdade($_POST['idade']);

if ($idade >=6 && $idade <= 12){
    $competidor->setCategoria('Infantil');
    }elseif ($idade > 12 && $idade<= 18){
        $competidor->setCategoria('Adolescente');
    } elseif ($idade > 18 && $idade<= 60) { 
        $competidor->setCategoria('Adulto');
    } elseif ($idade > 60) {
        $competidor->setCategoria('Idoso');
    } else {
        echo "IDADE INVÁLIDA";
    
};

echo '<h1>FICHA DE INSCRIÇÃO</h1>';
echo '<p> NOME: ' .$competidor->getNome(); '</p>';
echo '<p> IDADE: ' .$competidor->getIdade(); '</p>';
echo '<p> CATEGORIA: ' .$competidor->getCategoria(); '</p>';
