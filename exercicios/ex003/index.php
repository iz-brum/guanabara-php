<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipo primitivos</h1>
    <?php 
        // 0x = hexadecimal 0b = binário 0 = octal    
        $num = 010;
        echo "O valor da variável é \"$num\". <br> <br>";

        $valor = 3e2; //3*10^(2)
        var_dump($valor);
        echo '<br>';

        $valor = (int) 3e2; // coerção
        var_dump($valor);
        echo '<br>';

        // $numero = (real) "950"; // Tipo real foi removido depois da versão 7.3

        $casado = true;  
        var_dump($casado);
        print "O valor para casado é $casado <br> <br>";
        // quando false mostra vazio e quando true mostra 1

        $vetor = [10, 3.3, "Nome", true];
        var_dump($vetor);
        echo '<br>';

        class Pessoa
        {
            private string $nome;
        }
        
        $objeto = new Pessoa();
        var_dump($objeto);
        echo '<br> <br>';

        $nome = "Gustavo \u{1F596}";
        $sobrenome = 'Guanabara \u{1F596}';
        // echo '$nome $sobrenome \u{1F596}';
        echo "$nome $sobrenome <br> <br>";
        

        // Sintaxe Heredoc:
        $canal = "Curso em Vídeo";
        $ano = date('Y');
        echo <<< TESTE
            <br>Olá galera do $canal!
                    Ces tão bão?
                Chegamos em $ano...
        TESTE;

        // Sintaxe Nowdoc:
        $canal = "Curso em Vídeo";
        $ano = date('Y');
        echo <<< 'TESTE'
           <br> Olá galera do $canal!
                    Ces tão bão?
                Chegamos em $ano...
        TESTE;

    ?>
</body>
</html>