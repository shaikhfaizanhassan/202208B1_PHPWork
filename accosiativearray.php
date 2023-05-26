<?php 
    $age = array("waleed"=>"21","Ahmed"=>"25", "noman"=> "55");
    
    //echo $age["Ahmed"];

    foreach($age as $x => $xvalue)
    {
        echo "This is " . $x . "Value " . $xvalue . "<br>";
    }

?>