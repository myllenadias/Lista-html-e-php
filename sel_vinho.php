<!DOCTYPE html>
<html>
<head>
<title>Seletor de Vinho</title>
</head>

<body>

<img style="max-width: 300px;
  height: 200px;" src="v1.jpg">
    <img style="max-width: 300px;
  height: 200px;" src="v2.jpg">
    <img style="max-width: 300px;
  height: 200px;" src="v3.jpg">
    <br />


    <?php
    // get form input 
    $nome = $_POST['txtNome'];
    $ref = $_POST['txtRef'];
    $tipo = $_POST['tipo'];


    print "Obrigada pela sua seleção, $nome!";
    ?>

   <hr>
    
    <?php
    
    print "Você realmente aprecia $ref, especialmente com um bom vinho $tipo!";
    ?>
</body>
</html>