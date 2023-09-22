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
        // Capturando o número do formulário retroalimentado
        $numero = $_GET['numero'] ?? 0; 
    ?>

    <main style="margin-top: 20px">
        <h1>Informe um número</h1>
        
        <!-- Formulário que envia os dados para a mesma página PHP -->
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="numero">Número:</label>
            
            <!-- Campo de entrada para o número, com valor pré-definido -->
            <input type="number" name="numero" id="id-numero" value="<?=$numero?>">
            
            <!-- Botão para submeter o formulário -->
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>

    <section id="id-resultado" style="width: 430px;">
        <h2>Resultado Final</h2>
        
        <?php 
            // Calcula a raiz quadrada e a raiz cúbica do número
            $raizQuadrada = ($numero ** (1/2));
            $raizCubica = ($numero ** (1/3)); 

            // Exibe o resultado das raízes
            echo "<p>Analisando o <strong>número $numero</strong>, temos: <ul><li> A sua raiz quadrada é <strong>" . number_format($raizQuadrada, 3, ",", ".") . "</strong></li><li> A sua raiz cúbica é <strong>" . number_format($raizCubica, 3, ",", ".") . "</strong></li></ul></p>";
        ?>
    </section>
</body>
</html>

<!-- 

Este código HTML com PHP cria uma página que permite ao usuário inserir um número. Ao submeter o formulário, a página calcula a raiz quadrada e a raiz cúbica do número. O valor inserido pelo usuário é pré-definido na segunda vez que o formulário é exibido (retroalimentado). O resultado é exibido na seção "Resultado Final".

 -->