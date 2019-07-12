<!DOCTYPE html>
<html>
<head>
<title>Seletor de Carros</title>
</head>

<body>
    <h2>Sucesso!</h2>
    <?php
    // get form input 
    $tipo = $_POST['selTipo'];
    $cor = $_POST['txtCor'];

    // use form input

    print "Seu $tipo de cor $cor está pronto. Dirija com cuidado!";
    ?>
</body>
</html>