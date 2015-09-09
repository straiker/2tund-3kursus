<?php
    $first_name = "Rait";
    $last_name = "Avastu";

    echo $first_name." ".$last_name;

    echo "<br>";

    $age = 25;

    if ($age < 18) {
    	echo "alaealin";
    } else {
    	echo "täisealine";
    }

    echo "<br><br>";

    for($i = 0; $i<$age; $i++){
        echo "palju <br>";
    }

    echo "<br><br>";
    echo date("D, d M yy e");
?>