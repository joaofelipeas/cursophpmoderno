<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>

<body>
    <h1>Testes de tipos primitivos</h1>
    <?php
    // 0x = hexadecimal; 0b = binário; 0 = octal
    //$num = 300;
    //echo "O valor da variável é $num";

    //$v = 45.2;
    //var_dump($v);

    //$num = 3e2; // 3x 10^2
    //echo "O valor é $num";

    //$vet = [6, 2.5, "Maria", 3, false];
    //var_dump($vet);

    class Pessoa
    {
        private string $nome;
    }
    $p = new Pessoa;
    var_dump($p);
    ?>
</body>

</html>