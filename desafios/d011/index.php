<!-- 
Este código HTML com PHP cria uma página que permite ao usuário inserir o preço de um produto e um percentual de reajuste. 
Ao submeter o formulário, a página calcula o novo preço do produto com o reajuste aplicado. 
Os valores inseridos pelo usuário são pré-definidos na segunda vez que o formulário é exibido (retroalimentado). 
O resultado é exibido na seção "Resultado do Reajuste".
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="style.css"> <!-- Inclui um arquivo de estilo CSS chamado "style.css" -->
</head>
<body>
    <?php 
        // Capturando os dados do formulário retroalimentado
        $precoDoProduto = $_GET['precoDoProduto'] ?? 0; // Obtém o preço do produto do formulário, ou assume 0 se não foi definido
        $porcentual = $_GET['porcentual'] ?? 0; // Obtém o percentual de reajuste do formulário, ou assume 0 se não foi definido

        $anoAtual = date("Y"); // Obtém o ano atual usando a função date do PHP
    ?>

    <main style="margin-top: 1px"> <!-- Define um bloco principal na página -->
        <h1>Reajustador de Preços</h1>
        
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get"> <!-- Cria um formulário que envia os dados para a mesma página PHP -->
            <label for="precoDoProduto">Preço do Produto (R$)</label>
            <input type="number" name="precoDoProduto" id="id-precoDoProduto" value="<?=$precoDoProduto?>"> <!-- Campo de entrada de preço do produto, com valor pré-definido -->

            <label for="porcentual">Qual será o porcentual de reajuste? (<span id="id-valorPorcentual"><?= $porcentual ?>%</span>)</label> <!-- Rótulo para o campo de entrada de percentual de reajuste -->
            <input type="range" min="0" max="100" step="1" name="porcentual" id="id-porcentual" value="<?= $porcentual ?>"> <!-- Campo de entrada de percentual de reajuste, com valor pré-definido -->

            
            <!-- Botão para submeter o formulário -->
            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section id="id-resultado" style="width: 600px;"> <!-- Define uma seção para exibir o resultado -->
        <h2>Resultado do Reajuste</h2>
        
        <?php 
            // Calculando o reajuste do preço do produto
            function reajustarProduto($preco, $porcentual) {
                $valorReajustado = $preco + ($preco * ($porcentual / 100));
                return $valorReajustado;
            }
            
            $valorReajustado = reajustarProduto($precoDoProduto, $porcentual);
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>O produto que custava ". numfmt_format_currency($padrao, $precoDoProduto, "BRL")  .", com <strong>$porcentual% de aumento</strong> vai passar a custar <strong>". numfmt_format_currency($padrao, $valorReajustado, "BRL") ."</strong> a partir de agora.</p>"; // Exibe o resultado do reajuste
        ?>
    </section>

    <script>
        //Capturando os dados do form pelo ID
        var inputPorcentual = document.getElementById('id-porcentual');
        var spanValorPorcentual = document.getElementById('id-valorPorcentual');

        // Atualiza o valor do percentual exibido conforme o usuário move o controle deslizante
        inputPorcentual.addEventListener('input', function() {
            spanValorPorcentual.textContent = inputPorcentual.value + '%';
        });
    </script>
</body>
</html>
<!-- Fim do código -->
