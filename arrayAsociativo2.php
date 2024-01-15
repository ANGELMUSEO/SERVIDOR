<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$alumnoAltura=["ROSA"=>168.9,"IÑAKI"=>176,"DANIEL"=>173];
$totalAltura=0;
foreach($alumnoAltura as $nombre=>$altura){
    echo $nombre." ->".$altura."<br>";
    $totalAltura+=$altura;
}
echo "MEDIA ALTURA ".($totalAltura/count($alumnoAltura));

?>



</body>
</html>