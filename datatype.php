<?php 
    //student data
    $id = "1234";
    $name = "Ali Khan";
    //subject data
    $eng = 30;
    $urd = 45;
    $math = 30;
    $phy = 30;
    $chem = 30;

    //calulate subject marsks
    $totalmarks = 500;
    $obtained = $eng + $urd+ $math + $phy + $chem;
    $percentage = $obtained / $totalmarks *100;


    echo "Student ID $id <br>";
    echo "Student Name $name <br>";

    echo "Eng $eng <br>";
    echo "Urdu $urd <br>";
    echo "Math $math <br>";
    echo "Phy $phy <br>";
    echo "Chem $chem <br>";


    echo "Total Marks $totalmarks<br>";
    echo "Obtained  $obtained <br>";
    echo "Percentage  $percentage <br>";
    
    if($percentage >=50 && $percentage <=60)
    {
        echo "C Grade";
    }
    else if($percentage >=60 && $percentage <=70)
    {
        echo "B Grade";
    }
    else if($percentage >=70 && $percentage <=80)
    {
        echo "A Grade";
    }
    else if($percentage >=80 && $percentage <=100)
    {
        echo "A+ Grade";
    }
    else
    {
        echo "Failed";
    }
    
    
    


    
    




    
  
?>