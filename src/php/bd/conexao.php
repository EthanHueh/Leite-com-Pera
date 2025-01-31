<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="/imagens/leitecompera2.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>Conexão</title>
</head>
<body>

    <?php

        $localhost = "localhost";
        $usuario = "root";
        $senha = "usbw";
        $db = "leitecompera";
        
        $conexao = new mysqli($localhost, $usuario, $senha, $db);
        
        if($conexao -> connect_error){
            die("Erro de conexão: ".$conexao -> connect_error);
        }
    ?>

</body>
</html>