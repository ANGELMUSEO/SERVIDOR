<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

/*
Tenemos en un array asociativo 5 empleados con su sueldo. 
Necesitamos mostrar el sueldo máximo. Y mostrar los empleados que
tengan un salario mayor que la media.

sueldo máximo 3450
Juan 2300
Ana 2900

*/

$empleadosEmpresa=["SONIA"=>2200,"JUAN"=>1950,"MARIA"=>2250,"FELIPE"=>3000,"LUIS"=>2850];
$salarioMaximo=0;
$salarioTotal=0;
$salarioMedio;
foreach($empleadosEmpresa as $nombre=>$salar){
    $salarioTotal+=$salar;
    if($salar>$salarioMaximo){
        $salarioMaximo=$salar;
    }
   
}

$salarioMedio=$salarioTotal/count($empleadosEmpresa);
echo "El salario maximo es ".$salarioMaximo."<br>";

foreach($empleadosEmpresa as $nombre=>$salar){
    if($salar>=$salarioMedio){
        echo "El empleado {$nombre} tiene un salario de {$salar}<br>";
    }
}

?>
</body>
</html>