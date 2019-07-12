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
    
<h2>Mensagem Manipulação</h2>


<?php
$operacao= $_POST['operacao'];
$mens= $_POST['mensagem'];
if ($operacao=="tamanho") {
   print strlen ($mens);
}
elseif ($operacao=="inverter") {
    print strrev ($mens);
}
elseif ($operacao=="mai") {
    print strtoupper ($mens);
}
elseif ($operacao=="min") {
    print strtolower ($mens);
}
elseif ($operacao=="primeira") {
    print ucwords ($mens);
}
?>
</body>
</html>