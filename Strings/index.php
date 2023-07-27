<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // Double quoted -> interpreta o conteúdo
    // Single quoted -> Não interpreta conteudo, no caso de hexadecimal e emogis por exemplo

    $nome = "Italo";
    echo "$nome</br>";
    echo '$nome </br>';
    // Constantes não possuem interpolção, sendo assim eles precisam de concatenação, o mesmo vale para funções nativas do PHP como a função date.
    
    const ESTADO = "RJ";
    echo "Moro no ".ESTADO . "</br>";
    echo "Estamos no ano de ". date('Y') . "<br>";

    //Sequencia de escape
    // \n -> Nova Linha
    // \t -> Tabulação horizontal
    // \\ -> Barra invertida
    // \$ -> Sinal de cifrão
    // \u{} -> Codepoint Unicode

    $nom = "ítalo";
    $snom = "Neves </br>";
    echo "$nom\"Vinicius\" $snom";
    ?>    
</body>
</html>