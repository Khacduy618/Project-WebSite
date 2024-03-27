<?php
    //bài 1
    $color=array('red','green','white');
    print_r($color);
    echo '</br>';
    echo $color[0];

    $age = [];
    $age[0] = 10;
    $age[1] = 20;
    $age[3] = 30;
    print_r($age);

    //bài 2 
    $salaries = array(
        "mohammad" => 2000,
        "quadir" => 1000,
        "zara" => 500
    );
    echo "<br>Salary of mohammad is ". $salaries['mohammad'] . "<br />";
    echo "Salary of quadir is ". $salaries['quadir'] . "<br />";
    echo "Salary of zara is ". $salaries['zara'] . "<br />";

    //bài 3
    define('LOCATOR', "/locator");
    define('CLASSES', LOCATOR."/code/classes");
    define('FUNTIONS', LOCATOR."/code/funtions");
    define('USERDIR', LOCATOR."/code/user");

   
?>