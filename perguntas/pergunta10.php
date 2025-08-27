<html>
<head>
<meta charset="UTF-8">
<title>ONE PIECE: Pergunta 10</title>
<style type="text/css">
    body {
    background-image: url('p10/bg.jpg');
    background-size: cover; 
    background-repeat: no-repeat; 
    background-attachment: fixed; 
    overflow: hidden;
    }

    #imagem {
    position: absolute;
    transition: transform 2s ease-in-out;
    }

    .sunny {
    height: 500px;
    position: relative;
    margin-top: -450px;
    margin-left: -1000px;
    }

    p {
    font-size: 30px;
    color: #205c85;
    margin-top:-5px
    }

    label {
    color: #205c85; 
    }
    
    .btn {
    border: 1px solid #ffffff00;
    background: #1b4e6f;
    padding: 10px 20px;
    font-size: 20px;
    font-family: "montserrat";
    cursor: pointer;
    margin: 10px;
    transition: 0.8s;
    position: relative;
    overflow: hidden;
    }

    .btn1 {color: #fff;}

    .btn1:hover {
    color: #3783b5
    }

    .btn::before {
    content: "";
    position: absolute;
    left: 0;
    width: 100%;
    height: 0%;
    background: #ffffff;
    z-index: -1;
    transition: 0.8s;
    }

    .btn1::before {
    bottom: 0;
    border-radius: 50% 50% 0 0;
    }

    .btn1::before {
    height: 180%;
    }

    .btn1:hover:before {
    height: 0%;
    }

    .perso {
    height:100px;
    }

    #r1{display: inline-block;}

</style>
</head>

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['q10'] = $_POST['q10'];

    header("Location: ../resultados.php");
    exit();
}
?>

<body>
<center>
<div id="ofuscacao" class="ofuscacao"></div>

<img src="p10/p10.png" style="height:80px;">
<form action="pergunta10.php" method="post">
<p>Qual é seu personagem favorito?</p> 

<label>
<div style="background-color: #fff; width: 150px; height: 120px; border-radius: 25px; margin: 5px;" id="r1">
<img src="p10/luffy.png" class="perso" style="margin-top:10px; height:60px; border-radius: 10px;">
<br>
<input type="radio" name="q10[]" value="luffy"> Luffy<br>
</div>
</label>


<label>
<div style="background-color: #fff; width: 150px; height: 120px; border-radius: 25px; margin: 5px;" id="r1">
<img src="p10/zoro.png" class="perso" style="margin-top:10px; height:60px; border-radius: 10px;">
<br>
<input type="radio" name="q10[]" value="zoro"> Nico Robin<br>
</div>
</label>

<label>
<div style="background-color: #fff; width: 150px; height: 120px; border-radius: 25px; margin: 5px;" id="r1">
<img src="p10/nami.png" class="perso" style="margin-top:10px; height:60px; border-radius: 10px;">
<br>
<input type="radio" name="q10[]" value="nami"> Sanji<br>
</div>
</label>

<br>

<label>
<div style="background-color: #fff; width: 150px; height: 120px; border-radius: 25px; margin: 5px;" id="r1">
<img src="p10/usopp.png" class="perso" style="margin-top:10px; height:60px; border-radius: 10px;">
<br>
<input type="radio" name="q10[]" value="usopp"> Usopp<br>
</div>
</label>

<label>
<div style="background-color: #fff; width: 150px; height: 120px; border-radius: 25px; margin: 5px;" id="r1">
<img src="p10/sanji.png" class="perso" style="margin-top:10px; height:60px; border-radius: 10px;">
<br>
<input type="radio" name="q10[]" value="sanji"> Nami<br>
</div>
</label>

<label>
<div style="background-color: #fff; width: 150px; height: 120px; border-radius: 25px; margin: 5px;" id="r1">
<img src="p10/robin.png" class="perso" style="margin-top:10px; height:60px; border-radius: 10px;">
<br>
<input type="radio" name="q10[]" value="robin"> Chopper<br>
</div>
</label>

<br>

<label>
<div style="background-color: #fff; width: 150px; height: 120px; border-radius: 25px; margin: 5px;" id="r1">
<img src="p10/chopper.png" class="perso" style="margin-top:10px; height:60px; border-radius: 10px;">
<br>
<input type="radio" name="q10[]" value="chopper"> Zoro<br>
</div>
</label>

<br>
<input type="submit" value="Ver Resultados" id="iniciarAnimacao" class="btn btn1 animar-botao">

</form>

<div id="container">
<img id="imagem" class="sunny"  src="../midia/sunny.png" alt="Imagem" >
</div>

<img src="p10/merry.png" style="height:500px;margin-left:870px; margin-top:-450px" >

<script>
window.addEventListener('load', function () {
const imagem = document.getElementById('imagem');
imagem.style.transform = 'translateX(100%)'; 
});
</script>

</center>
</body>
</html>
