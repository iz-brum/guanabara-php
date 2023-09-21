<!DOCTYPE html>
<html lang="p-br">
<head>
    <meta charset="UTF-8"> <!-- Define o conjunto de caracteres como UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Define configurações de viewport para dispositivos móveis -->
    <title>Desafio PHP</title> <!-- Título da página -->
    <link rel="stylesheet" href="style.css">  <!-- Vincula um arquivo de estilo externo -->
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1> <!-- Título principal -->

        <?php 
            // Início do código PHP

            // Cotação copiada do Google
            $cotacao = 4.98;

            // Quanto $$ você tem?
            $quant = $_REQUEST["dinheiro"] ?? 0;

            // Equivalência em dólar
            $dolar = $quant/$cotacao;

            // // Mostrar o resultado
            // echo "Seus R\$" . number_format($quant, 2, ",", ".") . " equivalem a US\$" . number_format($dolar, 2, ",", ".");

            // Formatação de moedas com internacionalização
            // Blioteca intl (Internalization PHP)
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<br>Seus " . numfmt_format_currency($padrao, $quant, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong>.";

            // Fim do código PHP
        ?>

        <!-- Botão para voltar para 'index.html' -->
        <button style="width: 100%; margin-top: 20px;"; onclick="javascript:window.location.href='index.html'">&#x2b05; Voltar</button>

    </main>
</body>
</html>



