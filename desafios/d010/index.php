<!-- 
Este código HTML com PHP cria uma página que permite ao usuário inserir seu ano de nascimento e o ano desejado. 
Ao submeter o formulário, a página calcula a idade que a pessoa teria no ano desejado. 
Os valores inseridos pelo usuário são pré-definidos na segunda vez que o formulário é exibido (retroalimentado). 
O resultado é exibido na seção "Resultado".
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
        $anoDeNascimento = $_GET['anoDeNascimento'] ?? 0; // Obtém o ano de nascimento do formulário, ou assume 0 se não foi definido
        $anoDesejado = $_GET['anoDesejado'] ?? 0; // Obtém o ano desejado do formulário, ou assume 0 se não foi definido

        $anoAtual = date("Y"); // Obtém o ano atual usando a função date do PHP
    ?>

    <main style="margin-top: 1px"> <!-- Define um bloco principal na página -->
        <h1>Calculando a sua idade</h1>
        
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get"> <!-- Cria um formulário que envia os dados para a mesma página PHP -->
            <label for="anoDeNascimento">Em que ano você nasceu?</label>
             <!-- Rótulo para o campo de entrada de ano de nascimento -->
            <input type="number" name="anoDeNascimento" id="id-anoDeNascimento" value="<?=$anoDeNascimento?>"> 
            <!-- Campo de entrada de ano de nascimento, com valor pré-definido -->

            <label for="anoDesejado">Quer saber sua idade em que ano? (atualmente estamos em <?php echo "<strong>$anoAtual</strong>" ?>)</label> 
            <!-- Rótulo para o campo de entrada de ano desejado -->
            <input type="number" name="anoDesejado" id="id-anoDesejado" value="<?=$anoDesejado?>"> 
            <!-- Campo de entrada de ano desejado, com valor pré-definido -->
            
            <!-- Botão para submeter o formulário -->
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section id="id-resultado" style="width: 600px;"> <!-- Define uma seção para exibir o resultado -->
        <h2>Resultado</h2>
        
        <?php 
            // Calculando a idade
            $idade = $anoDesejado - $anoDeNascimento; // Calcula a idade subtraindo o ano de nascimento do ano desejado          
            
            // Mostra o resultado para a idade
            echo "<p>Quem nasceu em $anoDeNascimento vai ter <strong>$idade anos</strong> em $anoDesejado!</p>"; // Exibe o resultado da idade
        ?>
    </section>
</body>
</html>
<!-- Fim do código -->
