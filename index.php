<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- IMPORTAR BOOTSTRAP -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <!-- IMPORTAR CSS E OUTRAS BIBLIOTECAS -->
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/4993c2bd61.js" crossorigin="anonymous"></script>

    <title>JAVASCRIPT EXEMPLOS</title>

</head>
<body>

    <div class="central">

        <!-- Criação do botão -->
        <button type="button" id="botao" class="btn btn-primary" onclick="myFunction()">Click Me!</button>


    </div>


    <!-- Função para mudar a cor ao clicar -->
    <script>
        function myFunction() {

            <!-- ALTERAR O TEXTO DO BOTAO -->
            document.getElementById("botao").innerHTML = "YOU CLICKED ME!";

            <!-- ALTERAR A COR DO BOTAO -->
            document.getElementById("botao").style.background='#00FFFF';
        }
    </script>


</body>
</html>