<?php
echo "hola";
//Fet the File
$nameFile = "stations.csv";
$myFile = fopen($nameFile, "r");

if (!($nameFile)){
    print("It's not possible to open the file");
}
else{
    while( $line = fgetcsv($myFile, null, ";")){
        print( $line[2]." ".$line[3]. " ".$line[4]." ". $line[5])."<br>";
    }
}
    fclose($myFile);
