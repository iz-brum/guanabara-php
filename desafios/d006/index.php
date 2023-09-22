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
        // Capturando os valores de dividendo e divisor do formulário retroalimentado
        $dividendo = $_GET['dividendo'] ?? 0; 
        $divisor = $_GET['divisor'] ?? 1;
    ?>

    <main style="margin-top: 20px">
        <h1>Anatomia de uma divisão</h1>
        
        <!-- Formulário que envia os dados para a mesma página PHP -->
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dividendo">Dividendo:</label>
            
            <!-- Campo de entrada para o dividendo, com valor pré-definido -->
            <input type="number" name="dividendo" id="id-dividendo" value="<?=$dividendo?>">
            
            <label for="divisor">Divisor:</label>
            
            <!-- Campo de entrada para o divisor, com valor pré-definido -->
            <input type="number" name="divisor" id="id-divisor" value="<?=$divisor?>">
            
            <!-- Botão para submeter o formulário -->
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section id="id-resultado" style="width: 460px;">
        <h2>Estrutura da Divisão</h2>
        
        <?php 
            // Calcula o quociente e o resto da divisão
            $quociente = (int) ($dividendo / $divisor);
            $resto = $dividendo % $divisor;
            
            // Exibe o resultado da análise da divisão
            echo "<p> $dividendo : $divisor --> q: <strong> $quociente</strong> e r: <strong>$resto</strong>.</p>";
        ?>
    </section>
</body>
</html>

<!-- 

Este código HTML com PHP cria uma página que permite ao usuário inserir um dividendo e um divisor. Ao submeter o formulário, a página exibe o quociente e o resto da divisão. Os valores inseridos pelo usuário são pré-definidos na segunda vez que o formulário é exibido (retroalimentado). O resultado da análise da divisão é exibido na seção "Estrutura da Divisão".

 -->