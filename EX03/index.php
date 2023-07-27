<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
</head>
<body>
    <h1>Teste de tipos Primitivos</h1>
    <?php 
    // 0x = hexadecimal 0b = binário 0 = Octal
        // $num = 0x1A;
        // echo "Exadecimal 0x1A é $num";

    // Mostr todas as informações de uma variável 
        $v = true;
        var_dump($v);

    // forçar tipagem
    $num = (integer) "90";
    var_dump($num)
    ?>
</body>
</html>