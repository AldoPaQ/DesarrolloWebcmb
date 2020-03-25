<h2> RESULTADOS: <h2>
<?php
$n=$_POST['n'];
$resta=0;

for ($i=0;$i<$n;$i++)
{    
    $resta=$_POST['x'.$i]-$_POST['y'.$i];  
    ?>
    <input type="text" size="15" maxlength="30" value="<?php echo $resta; ?>" name="resultado">
    <?php
}?>
