<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de número real</h1>

        <?php 
            $numero = $_POST['numero'] ?? 0;

            echo "<p>Analisando o número <strong>". number_format($numero, 3, ",", ".") ."</strong> enviado pelo usuário.</p>";

            $parteInteira = (int) $numero;
            $parteDecimal = $numero - $parteInteira;

            echo "<ul><li> A parte inteira do número <strong>". number_format($parteInteira, 0, ",", ".") ."</strong></li>";
            echo "<li> A parte decimal do número <strong>". number_format($parteDecimal, 3, ",", ".")."</strong></li></ul>";
        ?>

        <!-- Botão para voltar para 'index.html' -->
        <button style="width: 100%; margin-top: 20px;"; onclick="javascript:history.go(-1)">&#x2b05; Voltar</button>
    </main>
</body>
</html>