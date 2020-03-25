<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="restas.php" method="post">
<?php
        $cantidad = $_GET['n'];

    for($i=0; $i<$cantidad; $i++){
        ?>
        <input type="text" size="15" maxlength="30" name="x<?php echo $i; ?>"> 
        <?php
    }
    ?>
    <br><br><br>
    <?php
    for($j=0; $j<$cantidad; $j++){
        ?>
        <input type="text" size="15" maxlength="30" name="y<?php echo $j; ?>"> 
        <?php
        }
?>  <br><br>
    <input type="hidden" name="n" value="<?php echo $cantidad?>">
    <input type="submit" align="center" value="calcular">
    </form>
    
</body>
</html>