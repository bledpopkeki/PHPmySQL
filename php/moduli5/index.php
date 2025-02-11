<?php 
$dogs = array(
array("chihuahua", "mexico", 20),
array("husky", "siberia", 15),
array("bulldog", "london", 20),
);

echo $dogs[0][0] . "  origin:". $dogs[0][1] . "  life span:". $dogs[0][2] . "<br>";
echo $dogs[1][0] . "  origin:". $dogs[1][1] . "  life span:". $dogs[1][2]. "<br>";
echo $dogs[2][0] . "  origin:". $dogs[2][1] . "  life span:". $dogs[2][2]. "<br>";



for($row=0; $row<3; $row++){
echo "<p><b>Row number $row</b></p>";
echo "<ul>";
for($col=0; $col<3; $col++){

echo"<li>". $dogs[$row][$col]. "</li>";
}
echo "</ul>";
}

for($i=0;$i<3;$i++){
    for($j=0;$j<3;$j++){
        echo "Array: $i Element: $j <br>";
    }   
}
echo"<br>";
echo"<br>";
echo"<br>";
$grade = array(
    "math" => "5",
    "art" => "2",
    "histori" => "1",
    "muzika" => "5",
);

foreach($grade as $key => $value){
    echo "Subject:" . $key . ", Grade:" . $value;
    echo "<br>";
}

for($k=0; $k<5; $k++){
    for($l=0; $l<$k; $l++){
        echo "*";
    }
    echo"<br>";
}
?>