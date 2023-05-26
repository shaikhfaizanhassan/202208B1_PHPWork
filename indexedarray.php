<?php 
    $sum  = 0;
    $name = array(1,2,3,4,5);
    // echo "Index Value 0 " . $name[0] . "<br>";
    // echo "Index Value 1 " . $name[1];
    
    $arrylenth = count($name);
    //echo $arrylenth;
    
    for($i=0;$i<$arrylenth;$i++)
    {
        $sum = $sum + $name[$i];
        echo $name[$i] . "<br>";
    }
    echo $sum;
?>