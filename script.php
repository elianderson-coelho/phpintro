<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Script page</title>
</head>
<body>
    
</body>
</html>

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

echo '<div class="container">';
echo '<h1>FICHA DE INSCRIÇÃO</h1>';
echo '<p> NOME: ' .$competidor->getNome(); '</p>';
echo '<p> IDADE: ' .$competidor->getIdade(); '</p>';
echo '<p> CATEGORIA: ' .$competidor->getCategoria(); '</p> </div></div></div>';
