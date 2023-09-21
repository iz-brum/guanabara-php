<!DOCTYPE html>
<html lang="p-br">
<head>
    <meta charset="UTF-8"> <!-- Define o conjunto de caracteres como UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Define configurações de viewport para dispositivos móveis -->
    <title>Desafio PHP</title> <!-- Título da página -->
    <link rel="stylesheet" href="style.css"> <!-- Vincula um arquivo de estilo externo -->
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1> <!-- Título principal -->

        <?php 
            // Início do código PHP

            $valorMinimo = 0; // Define o valor mínimo
            $valorMaximo = 100; // Define o valor máximo
            $numeroAleatorio = mt_rand($valorMinimo, $valorMaximo); // Gera um número aleatório entre o valor mínimo e máximo

            // Exibe uma mensagem indicando os valores mínimo e máximo
            echo "<p>Gerando números aleatórios entre $valorMinimo e $valorMaximo:<br></p>";
            
            // Exibe o valor aleatório gerado
            echo "<p>O valor gerado foi <strong>$numeroAleatorio</strong><br></p>";

        ?>

        <!-- Botão que recarrega a página quando clicado -->
        <button type="button" onclick="javascript:document.location.reload()">&#x1f504; Gerar</button>

    </main>
</body>
</html>

<!-- 

rand() => Esta função utiliza um algoritmo de 1951 (Linear Congrential Generator).
          Ela aceita min=(valor maior) e max=(valor menor).

mt_ran() => Mersenne Twister, 4x mais rápido que a função anterior.
            Ela não aceita min=(valor maior) e max=(valor menor).

A partir do PHP 7.1, rand() é um simples apontamento para mt_rand().

random_int() => Gera números aleatórios criptograficamente seguros.
                Mais lenta que as outras funções, usar apenas em casos necessários.
-->

