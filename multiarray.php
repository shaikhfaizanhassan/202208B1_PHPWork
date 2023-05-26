<?php 
    $bike = array(
        array('honda','2022','100000'),
        array('unique','2021','100000'),
        array('united','2024','550000'),
        array('super','2025','100000'),

    );

    
    //echo $bike[2][1] . "<br>";
    for($row= 0; $row.count(0);$row++)
    {
        echo "Row Number is $row <br>";
        
        for($col = 0; $col<3 ; $col++)
        {
            echo "<li>" . $bike[$row][$col] . "</li>";    
        }
    }

?>