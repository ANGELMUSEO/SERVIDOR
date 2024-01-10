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
$nombreAlumnos=array("Pablo","Adrian","Nicolas","Zaira","Laura");

for($i=0;$i<count($nombreAlumnos);$i++){
    echo "El nombre del alumno ".($i+1)." es ".$nombreAlumnos[$i]."<br>";
}

*/
/*
$notas=[3.5,5.6,9.7,10,0];
$i=1;
foreach($notas as $valor){

echo "La notas del alumnos".$i." es ".$valor."<br>";
$i++;
}
*/

/*hacer un ejercicio que cree un array con 5 nombre de alumnos y un 
segundo arraycon sus notas.
Mostrar el nombre y la nota de cada alumno. Utilizar el foreach

MARIA 7
SONIA 9
*/



/*
for($i=0;$i<count($nombreDaw);$i++){
    echo "El alumno {$nombreDaw[$i]} ha sacado {$notaDaw[$i]} puntos<br>";
}
*/
/*
$nombreDaw=["Pepe","Cristian","Iñaki","Pablo","Miguel"];
$notaDaw= array(8,6,7,0,6.6);
$i=0;
foreach($nombreDaw as $nombre0){
    echo "El alumno {$nombre} ha sacado {$notaDaw[$i]} puntos<br>";
    $i;
}
*/
/*
$notasAlumnos=["Pepe",8,"Cristian",6,"Iñaki",7,"Pablo",0,"Miguel",6.6];
$i=0;
foreach($notasAlumnos as $valores){
   if($i%2==0){
    echo "El alumno se llama ".$valores;
   }else{
    echo " y a sacado ".$valores."<br>";
   } 
   $i++;
}
*/
/* Tenemos 5 alumnos y queremos almacenar en un array 
el nombre y su edad    Mostrar los alumnos con su 
edad y mostrar la media de las edades de 
    todos los alumnos. Utilizar un for para 
    recorrer el array.
*/

$alumnosEdad=["Pepe",22,"Cristian",21,"Iñaki",24,"Pablo",20,"Miguel",21];

$totalEdad=0;
$i=0;
foreach($alumnosEdad as $valor){
    if($i%2!=0){
    $totalEdad+=$valor;
    }
    $i++;
}

echo "La media de edades es ".($totalEdad/5)."<br>";

for($i=0;$i<count($alumnosEdad);$i++){

    if($i%2==0){
        echo "El alumno ".$alumnosEdad[$i];
    }else{
        echo " tiene ".$alumnosEdad[$i]." años<br>";
    }
}


?>


</body>
</html>