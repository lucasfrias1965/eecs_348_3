
<img src="grinch.webp" width="10%" height="10%">
    <p>couldnt think of anything funny here</p>
<form action="php_example.php" method="GET">
<input type="text" name="number" placeholder="Put a number">
<input type="submit">
</form>
<?php
echo '<table>';

//this little recursive check is because the form submits to itself
if ($_GET["number"] != ""){
    $range = (int) $_GET["number"];
    echo '<tbody>';
    //first echo the table top values
    for ($i=0; $i != $range+1; $i++){
        //tao forgive me this is some bs but i wanna go out its a friday night
        if ($i == 0) {echo '<th> &nbsp;</th>'; continue;}
        //added the correct spacing, now we do this
        echo '<th>' . $i . '</th>';
    }
    echo '</tr>';
    //now we do a long on^2 loop where we iterate through every value
    //in the range between 1 to $range ($a) and then mult between 1 to range ($a * $b)
    for ($a=1; $a != $range+1; $a++){
        echo '<td>';
        //make a new talbe
        echo '<th>' . $a . '</th>';
        //iterate through a range with our chosen y column value
        for ($b = 1; $b != $range+1; $b++){
            //now calculate the x*y value and echo it
            $c = $a * $b;
            echo '<td>' . $c . '</td>';
        }
        //break otu
        echo '</tr>';
    }

}

?>
