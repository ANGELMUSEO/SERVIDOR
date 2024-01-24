<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

$alumnosNotas=array(array(3.5,8.9,9.6),
                   array(4.6,7.8,9.5),
                    array(10,0,6) );

$numeroAprobados=0;
$numeroSuspensos=0;
for($fila=0;$fila<3;$fila++){
    for($columna=0;$columna<3;$columna++){
        if($alumnosNotas[$fila][$columna]>=5){
            $numeroAprobados++;
        }else{
            $numeroSuspensos++;
        }
    }
}



for($fila=0;$fila<3;$fila++){
    for($columna=0;$columna<3;$columna++){
        echo "La nota del alumno ".($fila+1)." ha sacado en su nota "
        .($columna+1). " el valor ".$alumnosNotas[$fila][$columna]."<br>";
    }
}

echo "<br><Br>Hay ".$numeroAprobados." aprobados y hay ".$numeroSuspensos." suspensos";

//calcular la media del curso

//calcular la media de cada alumno->dificil

?>


</body>
</html>