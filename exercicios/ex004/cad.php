<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>

    <main>
        <?php 
            // var_dump($_REQUEST) // Variável super global, é a junção da $_GET, $_POST e $_COOKIE.
            $nome = $_GET["nome"] ?? "desconhecido";
            $sobrenome = $_GET["sobrenome"] ?? "desconhecido";
            echo "<p>É um prazer te conhecer, $nome $sobrenome.</p>";

            $soma = "2" + "2";
            print "\"2\" + \"2\" = ";
            var_dump($soma);
            // versões antigas (7 e anteriores) possuem peculiaridades no mesmo procedimento da linha 21.
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a pagina anterior</a></p>
    </main>
</body>
</html>

<!-- 
    O operador '??' no PHP é chamado de "operador de coalescência nula" (null coalescing operator). Ele foi introduzido no PHP 7 e é utilizado para facilitar a verificação e definição de valores padrão quando uma variável é nula.
 -->