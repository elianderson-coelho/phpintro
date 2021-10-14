<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Formulário de inscrição</title>
</head>
<body>
<div class="container">   
    <h1> FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDOR</h1><br>

        <form action="script.php" method="post">
            <label for="idnome">Seu nome</label>    
            <input type="text"  class="form-control" id="idnome" placeholder="Digite o seu nome" name="nome">
            <label for="idnome">Sua idade</label>  
            <input type="text" name="idade" class="form-control" id="ididade" placeholder="Digite a sua idade">
            <button type="submit" value="Enviar" class="btn btn-primary">Enviar </button>
        </form>
        
</div>

</body>
</html>