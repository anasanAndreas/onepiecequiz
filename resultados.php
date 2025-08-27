<html>
<head>
<meta charset="UTF-8">
<title>ONE PIECE: Resultados</title>
<style type="text/css">
    body {
    background-image: url('resultados/bg.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    }

    p {
    color:#134e71;
    font-size: 30px;
    }

    h1 {color:#c7343b;}

    .btn {
    border: 1px solid #ffffff00;
    background: #1b4e6f;
    color: fff;
    padding: 10px 20px;
    font-size: 20px;
    font-family: "montserrat";
    cursor: pointer;
    margin: 10px;
    position: relative;
    }

    .r {
    background: #fff; 
    height: 700px;
    width: 800px;
    border-radius: 3%;
    }

</style>
</head>
<?php
session_start();

if (isset($_SESSION['q1']) && isset($_SESSION['q2']) && isset($_SESSION['q3']) && isset($_SESSION['q4']) && isset($_SESSION['q5'])
&& isset($_SESSION['q6']) && isset($_SESSION['q7']) && isset($_SESSION['q8']) && isset($_SESSION['q9']) && isset($_SESSION['q10'])) {
    $contagem = array(
        "luffy" => 0,
        "zoro" => 0,
        "nami" => 0,
        "usopp" => 0,
        "sanji" => 0,
        "robin" => 0,
        "chopper" => 0
    );

    $contagem[$_SESSION['q1'][0]]++;
    $contagem[$_SESSION['q2'][0]]++;
    $contagem[$_SESSION['q3'][0]]++;
    $contagem[$_SESSION['q4'][0]]++;
    $contagem[$_SESSION['q5'][0]]++;
    $contagem[$_SESSION['q6'][0]]++;
    $contagem[$_SESSION['q7'][0]]++;
    $contagem[$_SESSION['q8'][0]]++;
    $contagem[$_SESSION['q9'][0]]++;
    $contagem[$_SESSION['q10'][0]]++;

    $maxPontos = max($contagem);
    $resultado = array_keys($contagem, $maxPontos);

    if (count($resultado) > 1) {
        $personagemAleatorio = array_rand($resultado);
        $resultado = $resultado[$personagemAleatorio];
    } else {
        $resultado = $resultado[0];
    }

    $personagens = array(
        "luffy" => array(
            "imagem" => "luffy.png",
            "descricao" => "Monkey D. Luffy é um capitão destemido e alegre, sempre em busca de aventuras e tesouros. Sua personalidade é marcada por uma determinação inabalável em alcançar seu sonho de se tornar o Rei dos Piratas."
        ),
        "zoro" => array(
            "imagem" => "zoro.png",
            "descricao" => "Roronoa Zoro é um espadachim habilidoso com um código de honra rígido. Ele é calmo e focado em sua busca para se tornar o melhor espadachim do mundo, mostrando uma lealdade inabalável a Luffy e à tripulação."
        ),
        "nami" => array(
            "imagem" => "nami.png",
            "descricao" => "Nami é uma navegadora inteligente e pragmática que valoriza muito sua paixão por cartografia. Ela é conhecida por sua busca por riquezas e habilidades de negociação, mas também tem um coração compassivo quando se trata de seus amigos."
        ),
        "usopp" => array(
            "imagem" => "usopp.png",
            "descricao" => "Usopp é um contador de histórias nato e um franco atirador talentoso. Embora possa exagerar, ele é leal à tripulação e disposto a enfrentar seus medos para proteger aqueles que ama."
        ),
        "sanji" => array(
            "imagem" => "sanji.png",
            "descricao" => "Sanji é um cozinheiro extraordinário com um lado romântico, frequentemente enredado em conflitos devido à sua devoção às mulheres. Ele também é um lutador poderoso, dedicado ao seu estilo de combate único."
        ),
        "robin" => array(
            "imagem" => "robin.png",
            "descricao" => "Nico Robin é uma arqueóloga intelectual e misteriosa, com um passado sombrio. Ela é tranquila, reservada e tem uma sede insaciável de conhecimento, sendo uma valiosa adição à tripulação de Luffy."
        ),
        "chopper" => array(
            "imagem" => "chopper.png",
            "descricao" => "Tony Tony Chopper é uma rena que ganhou a capacidade de se transformar em humano devido a uma fruta do diabo. Ele é adorável, tímido e um médico habilidoso, trazendo um toque de inocência e doçura à tripulação."
        )
    );

    echo "<body>";
    echo "<center>";
    echo "<div class='r'>";
    echo "<br>";
    echo "<img src='resultados/{$personagens[$resultado]['imagem']}' style='height: 300px;'>";
    echo "<h1>Seu personagem é...</h1>";
    echo "<p>Você é como o personagem: $resultado</p>";
    echo "<p>{$personagens[$resultado]['descricao']}</p>";
    echo "<p><a href='perguntas/pergunta1.php' class='btn'>Tente novamente</a></p>";
    echo "</div>";
    echo "</center>";
    echo "</body>";
    echo "</html>";

    session_unset();
    session_destroy();
} else {
    echo "<html>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<title>ONE PIECE: Resultados</title>";
    echo "<style type='text/css'>";
    echo "body {";
    echo "background-image: url('resultados/bg.jpg');";
    echo "background-size: cover;";
    echo "background-repeat: no-repeat;";
    echo "background-attachment: fixed;";
    echo "}";
    echo "</style>";
    echo "</head>";
    echo "<body>";
    echo "<center>";
    echo "<br><br><br><br><br>";
    echo "<p>Por favor, responda todas as perguntas antes de ver o resultado.</p>";
    echo "<p><a href='perguntas/pergunta1.php' class='btn'>Tente novamente</a></p>";
    echo "</center>";
    echo "</body>";
    echo "</html>";
}
?>
