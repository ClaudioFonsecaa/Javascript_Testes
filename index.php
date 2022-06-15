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


        <!-- Imagem com funções mouse over e mouse out -->
        <img id="smile" onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0" src="smiley.gif" alt="Smiley" width="32" height="32">

        <p><p>
        <!-- Botão para mover para a direita -->
        <input type = "button" value = "Start" onclick = "moveRight();" />

        <!-- Botão para a parar -->
        <input type = "button" value = "Stop" onclick = "stop();" />

        <p><p>

            <!-- Video -->
            <video  id="video" onmouseover="aumentarVolume()" width="300" height="300" controls>
                <source src="movie.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>


    </div>



    <script>
        <!-- Função para mudar a cor ao clicar -->
        function myFunction() {

            <!-- ALTERAR O TEXTO DO BOTAO -->
            document.getElementById("botao").innerHTML = "YOU CLICKED ME!";

            <!-- ALTERAR A COR DO BOTAO -->
            document.getElementById("botao").style.background='#00FFFF';
        }


        <!-- Função para aumentar imagem -->
        function bigImg(x) {
            x.style.height = "100px";
            x.style.width = "100px";
        }

        <!-- Função para por imagem normal -->
        function normalImg(x) {
            x.style.height = "32px";
            x.style.width = "32px";
        }



        var imgObj = null;
        var animate;

        <!-- Função para inicializar a imagem -->
        function init() {
            imgObj = document.getElementById('smile');
            imgObj.style.position= 'relative';
            imgObj.style.left = '0px';
        }


        <!-- Função para mover a imagem para a direita -->
        function moveRight() {
            imgObj.style.left = parseInt(imgObj.style.left) + 1 + 'px';
            animate = setTimeout(moveRight,20);    // call moveRight in 20msec
        }

        <!-- Função para parar -->
        function stop() {
            clearTimeout(animate);
            imgObj.style.left = '0px';
        }

        window.onload = init;


        <!-- Função para aumentar volume -->
        function aumentarVolume() {
            var vid = document.getElementById("video");
            vid.volume = 0.5; <!-- volume no metade atualmente -->
            <!-- volume no máximo 1.0 -->
        }
    </script>


</body>
</html>