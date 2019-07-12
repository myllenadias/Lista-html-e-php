<!DOCTYPE html>
<html>
<head>
    <title>Seletor de Cores Interativo</title> 
</head>
<body>
    <h2>Seletor de Cores Interativo</h2>
    <?php
    // get form input 
    $r = $_POST['red'];
    $g = $_POST['green'];
    $b= $_POST['blue'];

    // use form input
    $rgb = $r . ',' . $g . ',' . $b;
    ?>
R: <?php echo $r; ?>
G: <?php echo $g; ?>
B: <?php echo $b; ?>
<br /><br />
    <div style="width:150px; height: 150px; background-color: rgb(<?php echo $rgb; ?>)" /></div>
    
</body>
</html>