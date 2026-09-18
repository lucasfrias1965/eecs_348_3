
<img src="grinch.webp" width="10%" height="10%">
    <p>couldnt think of anything funny here</p>
<form action="php_example.php" method="GET">
<input type="text" name="number" placeholder="Put a number">
<input type="submit">
</form>
<?php
echo '<table>';

if ($_GET["number"] != ""){
    $range = (int) $_GET["number"];
    echo '<tr>';
    echo '<th>&nbsp;</th>';
    echo '<tbody>';
    //first echo the table top values
    for ($i=1; $i != $range+1; $i++){
        echo '<th>' . $i . '</th>';
    }
    echo '</tr>';
    //now we do a long on^2 loop where we iterate through every value
    //in the range between 1 to $range ($a) and then mult between 1 to range ($a * $b)
    for ($a=1; $a != $range+1; $a++){
        echo '<td>';
        echo '<th>' . $a . '</th>';
        for ($b = 1; $b != $range+1; $b++){
            $c = $a * $b;
            echo '<td>' . $c . '</td>';
        }
        echo '</tr>';
    }

}

?>
