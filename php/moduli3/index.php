<?php 
$points = 81;
if ($points>69 && $points<81){
    echo("your grade is 3");
}
elseif ($points>89 && $points<101){
    echo("your grade is 5");
}
elseif ($points>79 && $points<90){
    echo("your grade is 4");
}
elseif ($points>49 && $points<70){
    echo("your grade is 2");
}
else {
    echo("your grade is 1");
}
$day = "monday";
switch($day){
    case "monday":
        echo "nuk ki kurs";
        break;

    case "tuesday":
        echo "ki kurs";
        break;

    case "wednesday":
        echo "nuk ki kurs";
        break;
    

    case "thursday":
        echo"ki kurs";
        break;
    

    case"friday":
        echo"nuk ki kurs";
        break;
    

    default:
        echo"vikend";
        break;
 



}
for($num = 50; $num <=100; $num+=2){
    echo"$num <br>";
}
$students = ["bled","olsa","dorant","nil","blin","and"];

foreach($students as $student){
    echo $student . "<br>";
}


$x="abc";
while(strlen($x)<11){
    echo $x;
    $x = $x.'d';
    echo "<br>";
}














?>