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
        $dividendo = $_GET['dividendo'] ?? 0; 
        $divisor = $_GET['divisor'] ?? 1;
    ?>

    <main style="margin-top: 20px">
        <h1>Anatomia de uma divisão</h1>
        
        <!-- Formulário que envia os dados para a mesma página PHP -->
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dividendo">Dividendo:</label>
            
            <!-- Campo de entrada para o primeiro valor, com valor pré-definido -->
            <input type="number" name="dividendo" id="id-dividendo" value="<?=$dividendo?>">
            
            <label for="divisor">Divisor:</label>
            
            <!-- Campo de entrada para o segundo valor, com valor pré-definido -->
            <input type="number" name="divisor" id="id-divisor" value="<?=$divisor?>">
            
            <!-- Botão para submeter o formulário -->
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section id="id-resultado" style="width: 460px;">
        <h2>Estrutura da Divisão</h2>
        
        <?php 
            
            $quociente = (int) ($dividendo/$divisor);
            // $quocienteInteiro =  $quociente;
            $resto = $dividendo % $divisor;
            
            // Exibe o resultado da soma
            echo "<p> $dividendo : $divisor --> q: <strong> $quociente</strong> e r: <strong>$resto</strong>.</p>";
        ?>
    </section>
</body>
</html>

<!-- 

Este código HTML com PHP cria um formulário para inserir dois valores, calcular a soma e exibir o resultado. Ele usa o método GET para enviar os dados e a mesma página PHP para processar os valores. Os valores inseridos pelo usuário são pré-definidos na segunda vez que o formulário é exibido (retroalimentado). O resultado da soma é exibido na seção "Resultado da soma".

 -->