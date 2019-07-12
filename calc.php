<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
<?php
$valor1= $_POST['valor1'];
$valor2= $_POST['valor2'];
$operacao= $_POST['operacao'];
if ($operacao=="somar"){
    $total= $valor1+$valor2;
}
if ($operacao=="dividir"){
    $total= $valor1/$valor2;
}
if ($operacao=="subtrair"){
    $total= $valor1-$valor2;
}
if ($operacao=="multiplicar"){
    $total= $valor1*$valor2;
}
echo "O valor do cálculo é " . $total;
?>

</body>
</html>