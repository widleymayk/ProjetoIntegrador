<?php
    define('pg','http://localhost/projetointegrador');
?>
<!DOCTYPE html>
<html lang="BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include"menu.php";

    ?>
    <?php
        $url = ( isset($_GET['url'])) ? $_GET['url'] : '';

        //Exemplo "produto/123" vira ['produto', '123']

        $explode = explode('/', $url);

        $paginas = array('home', 'produtos', 'servicos');

        //Se nao foi passada nenhuma pagina
        if(isset($explde[0]) && $explode[0] == ''){
            include "home.php";
        }elseif ($explode[0] != ''){

            if(isset($explode[0] && in_array($explode[0], $paginas))){
                //sim
                include $explode[0].".php";
            }else{
                include "home.php";
            }
        }
        
    ?>
</body>
</html>