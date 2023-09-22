
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
        $totalSegundos = $_GET['totalSegundos'] ?? 0; // Obtém o preço do produto do formulário, ou assume 0 se não foi definido
    ?>

    <main style="margin-top: 1px"> <!-- Define um bloco principal na página -->
        <h1>Calculadora de Tempo</h1>
        
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get"> <!-- Cria um formulário que envia os dados para a mesma página PHP -->
            
            <label for="totalSegundos">Qual o total em segundos?</label>
            <input type="number" name="totalSegundos" id="id-totalSegundos" value="<?=$totalSegundos?>">
            
            <!-- Botão para submeter o formulário -->
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="id-resultado" style="width: 620px;"> <!-- Define uma seção para exibir o resultado -->
        <h2>Totalizando tudo</h2>
        
        <?php 
            // Esta função é fundamental para o cálculo do tempo com base no total de segundos fornecido pelo usuário.
            function calcularTempo($totalS) {
                $semanas = floor($totalS / (60 * 60 * 24 * 7)); // Calcula o número de semanas
                $dias = floor(($totalS % (60 * 60 * 24 * 7)) / (60 * 60 * 24)); // Calcula o número de dias
                $horas = floor(($totalS % (60 * 60 * 24)) / (60 * 60)); // Calcula o número de horas
                $minutos = floor(($totalS % (60 * 60)) / 60); // Calcula o número de minutos
                $segundos = $totalS % 60; // Calcula o número de segundos
            
                return array( // Retorna um array com os respectivos resultados
                    "semanas" => $semanas,
                    "dias" => $dias,
                    "horas" => $horas,
                    "minutos" => $minutos,
                    "segundos" => $segundos
                );
            }
            
            $tempo = calcularTempo($totalSegundos); // Aqui, a função calcularTempo é chamada com o valor armazenado em $totalSegundos. O resultado é armazenado na variável $tempo     

            // Mostra o resultado em formato de lista
            echo "<p>Analisando o valor que você digitou, <strong>". number_format($totalSegundos, 0, ",", ".") ." segundos</strong> equivalem a: <ul><li>$tempo[semanas] semanas <li>$tempo[dias] dias <li>$tempo[horas] horas <li>$tempo[minutos] minutos <li>$tempo[segundos] segundos</ul></p>"; 
        ?>
    </section>

</body>
</html>
<!-- Fim do código -->
