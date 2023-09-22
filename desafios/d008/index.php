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
        $numero = $_GET['numero'] ?? 0; 
    ?>

    <main style="margin-top: 20px">
        <h1>Informe um número</h1>
        
        <!-- Formulário que envia os dados para a mesma página PHP -->
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="numero">Número:</label>
            
            <!-- Campo de entrada para o primeiro valor, com valor pré-definido -->
            <input type="number" name="numero" id="id-numero" value="<?=$numero?>">
            
            <!-- Botão para submeter o formulário -->
            <input type="submit" value="Calcular Raizes">
        </form>
    </main>

    <section id="id-resultado" style="width: 430px;">
        <h2>Resultado Final</h2>
        
        <?php 
            
            $raizQuadrada = ($numero**(1/2));
            $raizCubica = ($numero**(1/3)); 

            // Exibe o resultado das raizes
            echo "<p>Analisando o <strong>número $numero</strong>, temos: <ul><li> A sua raiz quadrada é <strong>". number_format($raizQuadrada, 3, ",", ".") ."</strong> <li> A sua raiz cubica é <strong>". number_format($raizCubica, 3, ",", ".") ."</strong> </ul> </p>";
        ?>
    </section>
</body>
</html>

<!-- 

Este código HTML com PHP cria um formulário para inserir dois valores, calcular a soma e exibir o resultado. Ele usa o método GET para enviar os dados e a mesma página PHP para processar os valores. Os valores inseridos pelo usuário são pré-definidos na segunda vez que o formulário é exibido (retroalimentado). O resultado da soma é exibido na seção "Resultado da soma".

 -->