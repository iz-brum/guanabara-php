<!-- 

Este código HTML com PHP cria uma página que permite ao usuário inserir dois valores e seus respectivos pesos. 
Ao submeter o formulário, a página calcula a média aritmética simples e a média aritmética ponderada dos valores. 
Os valores inseridos pelo usuário e seus pesos são pré-definidos na segunda vez que o formulário é exibido (retroalimentado). O resultado é exibido na seção "Cálculo das Médias".

-->

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
        $primeiroValor = $_GET['primeiroValor'] ?? 0; 
        $segundoValor = $_GET['segundoValor'] ?? 0;
        $pesoPrimeiroValor = $_GET['pesoPrimeiroValor'] ?? 0;
        $pesoSegundoValor = $_GET['pesoSegundoValor'] ?? 0;
    ?>

    <main style="margin-top: 1px">
        <h1>Médias Aritméticas</h1>
        
        <!-- Formulário que envia os dados para a mesma página PHP -->
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="primeiroValor">1° Valor:</label>
            <!-- Campo de entrada para o primeiro valor, com valor pré-definido -->
            <input type="number" name="primeiroValor" id="id-primeiroValor" value="<?=$primeiroValor?>">

            <label for="pesoPrimeiroValor">Peso 1° Valor:</label>
            <!-- Campo de entrada para o peso do primeiro valor, com valor pré-definido -->
            <input type="number" name="pesoPrimeiroValor" id="id-pesoPrimeiroValor" value="<?=$pesoPrimeiroValor?>">
        
            <label for="segundoValor">2° Valor:</label>
            <!-- Campo de entrada para o segundo valor, com valor pré-definido -->
            <input type="number" name="segundoValor" id="id-segundoValor" value="<?=$segundoValor?>">

            <label for="pesoSegundoValor">Peso 2° Valor:</label>
            <!-- Campo de entrada para o peso do segundo valor, com valor pré-definido -->
            <input type="number" name="pesoSegundoValor" id="id-pesoSegundoValor" value="<?=$pesoSegundoValor?>">
            
            <!-- Botão para submeter o formulário -->
            <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <section id="id-resultado" style="width: 600px;">
        <h2>Cálculo das Médias</h2>
        
        <?php 
            // Calcula a média aritmética simples e a média aritmética ponderada
            $mediaSimples = ($primeiroValor + $segundoValor) / 2;
            $mediaPonderada = (($primeiroValor * $pesoPrimeiroValor) + ($segundoValor * $pesoSegundoValor)) / ($pesoPrimeiroValor + $pesoSegundoValor);
            
            // Exibe o resultado das médias
            echo "<p>Analisando os valores $primeiroValor e $segundoValor: <ul><li> A <strong>Média Aritmética Simples</strong> entre os valores é igual a <strong>". number_format($mediaSimples, 2, ",", ".") ."</strong></li><li> A <strong>Média Aritmética Ponderada</strong> pesos $pesoPrimeiroValor e $pesoSegundoValor é igual a <strong>". number_format($mediaPonderada, 2, ",", ".") ."</strong></li></ul></p>";
        ?>
    </section>
</body>
</html>
<!-- Fim do código -->
