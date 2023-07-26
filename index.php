<?php
echo "hola";
//Get the File
$nameFile = "stations.csv";
$myFile = fopen($nameFile, "r");

if (!($nameFile)){
    print("It's not possible to open the file");
}
else{
    //Show the specific information from the csv file
    while( $line = fgetcsv($myFile, null, ";")){
        print( $line[2]." ".$line[3]. " ".$line[4]." ". $line[5])."<br>";
    }
}
    fclose($myFile);
