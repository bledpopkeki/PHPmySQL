<?php 
$my_file = fopen("file1.txt","w");
fclose($my_file);

$filename = "ds.text";
$file = fopen($filename, "r");
$size = filesize($filename);
$my_filedata = fread($file,$size);
echo $my_filedata . "<br>";
fclose($file);

$my_file = fopen("example.txt", "r");
while(!feof($my_file)){
    echo fgets($my_file). "<br>";
}
$newfile = fopen("exampel.txt", "a");
fwrite($newfile, "hi");
echo $newfile;

$my_file = fopen("data.txt" , "w+");
fwrite($my_file, "Data test 1");

$my_file = fopen("data.txt" , "a+");
fwrite($my_file, "\nData test 2");

?>