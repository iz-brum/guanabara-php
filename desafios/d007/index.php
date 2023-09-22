<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Capturando o valor do salário do formulário retroalimentado
        $salario = $_GET['salario'] ?? 0; 
    ?>

    <main style="margin-top: 20px">
        <h1>Informe seu salário</h1>
        
        <!-- Formulário que envia os dados para a mesma página PHP -->
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="salario">Salário (R$):</label>
            
            <!-- Campo de entrada para o salário, com valor pré-definido -->
            <input type="number" name="salario" id="id-salario" value="<?=$salario?>">
            
            <!-- Botão para submeter o formulário -->
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="id-resultado" style="width: 430px;">
        <h2>Resultado Final</h2>
        
        <?php 
            // Calcula quantos salários mínimos o valor do salário representa
            $qSalarioMinimo = (int) ($salario / 1380); 
            $qSalarioQuebrado = ($salario % 1380);
            
            // Formatação de moedas com internacionalização
            // Biblioteca intl (Internalization PHP)
            $padraoMoeda = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            // Exibe o resultado
            echo "<p>Quem recebe um salário de " . numfmt_format_currency($padraoMoeda, $salario, "BRL") . " recebe <strong>$qSalarioMinimo salários mínimos</strong> + " . numfmt_format_currency($padraoMoeda, $qSalarioQuebrado, "BRL") . ".</p>";
        ?>
    </section>
</body>
</html>

<!-- 

Este código HTML com PHP cria um formulário para inserir um salário em reais (R$). Ao submeter o formulário, a página calcula quantos salários mínimos essa quantia representa, bem como a parte fracionária. O valor inserido pelo usuário é pré-definido na segunda vez que o formulário é exibido (retroalimentado). O resultado é exibido na seção "Resultado Final".

 -->