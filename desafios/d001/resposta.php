<!DOCTYPE html>
<html lang="p-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php 
                // Obtém o número da requisição, se não houver, assume 0
                $number = $_REQUEST["numero"] ?? 0;
                
                // Calcula o antecessor e o sucessor
                $antecessor = $number - 1;
                $sucessor = $number + 1;
                
                // Exibe o número, antecessor e sucessor
                echo "Número escolhido: <strong>$number</strong> <br>";
                echo "<em>Antecessor</em>: $antecessor <br>";
                echo "<em>Sucessor</em>: $sucessor <br>";
            ?>
        </p>
        
        <!-- Botão para voltar para 'index.html' -->
        <button onclick="javascript:window.location.href='index.html'">&#x2b05; Voltar</button>
    </main>
</body>
</html>
