<?php
    //recuperar o id passado pela URL
    $url = ( isset($_GET['url'])) ? $_GET['url'] : '';
    $explode = explode('/', $url);
   //$categoria = $explode[1];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Produtos</h1>
</body>
</html>