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
        // Capturando os dados do formulário retroalimentado
        $primeiroValor = $_GET['primeiro-valor'] ?? 0; 
        $segundoValor = $_GET['segundo-valor'] ?? 0;
    ?>

    <main style="margin-top: 20px">
        <h1>Formulário Retroalimentado</h1>
        
        <!-- Formulário que envia os dados para a mesma página PHP -->
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="primeiro-valor">1º valor:</label>
            
            <!-- Campo de entrada para o primeiro valor, com valor pré-definido -->
            <input type="number" name="primeiro-valor" id="id-primeiro-valor" value="<?=$primeiroValor?>">
            
            <label for="segundo-valor">2º valor:</label>
            
            <!-- Campo de entrada para o segundo valor, com valor pré-definido -->
            <input type="number" name="segundo-valor" id="id-segundo-valor" value="<?=$segundoValor?>">
            
            <!-- Botão para submeter o formulário -->
            <input type="submit" value="Somar">
        </form>
    </main>

    <section id="id-resultado" style="width: 540px;">
        <h2>Resultado da soma</h2>
        
        <?php 
            // Calcula a soma dos valores capturados do formulário
            $soma = $primeiroValor + $segundoValor;
            
            // Exibe o resultado da soma
            echo "<p>O resultado da soma entre $primeiroValor + $segundoValor é = <strong>$soma</strong>.</p>";
        ?>
    </section>
</body>
</html>

<!-- 

Este código HTML com PHP cria um formulário para inserir dois valores, calcular a soma e exibir o resultado. Ele usa o método GET para enviar os dados e a mesma página PHP para processar os valores. Os valores inseridos pelo usuário são pré-definidos na segunda vez que o formulário é exibido (retroalimentado). O resultado da soma é exibido na seção "Resultado da soma".

 -->