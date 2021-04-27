<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Controle Remoto POO</title>
</head>
<body>
        <h1>Projeto controle remoto</h1>
        <?php 
            require_once('ControleRemoto.php');

            $c= new controleRemoto();

            $c -> ligar();
            $c -> maisVolume();
            $c -> abrirMenu();
        ?>
</body>
</html>