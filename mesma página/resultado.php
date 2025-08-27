<!DOCTYPE html>
<html>
<head>
<title>ONE PIECE: Resultados</title>
</head>
<body>
    <center>
    <h1>Seu personagem é...</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $respostas = $_POST;
        $contagem = array(
            "luffy" => 0,
            "zoro" => 0,
            "nami" => 0,
            "usopp" => 0,
            "sanji" => 0,
            "robin" => 0,
            "chopper" => 0
        );

    foreach ($respostas as $pergunta => $opcoes) {
        if (is_array($opcoes)) {
            foreach ($opcoes as $personagem) {
                if (array_key_exists($personagem, $contagem)) {
                        $contagem[$personagem]++;
                    }
                }
            }
        }

    $resultado = array_keys($contagem, max($contagem))[0];
    echo "<p>Você é como o personagem: $resultado</p>";
    } else {
    echo "<p>O formulário não foi submetido corretamente.</p>";
    }
    ?>

    <p><a href="quiz.html">Tente novamente</a></p>
    </center>
</body>
</html>
