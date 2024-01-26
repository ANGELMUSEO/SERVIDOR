<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

function calor($temperatura){
    return($temperatura>=30);
}


$ciudades=["MADRID"=>25,"SEVILLA"=>45,"OVIEDO"=>20,"CORDOBA"=>50,"BARCELONA"=>32];
$alumnosNotas=["MONICA"=>5.5,"MANOLO"=>3.3,"MARIA"=>8.9,"FELIPE"=>4.3];

$ciudadesHabitables=array_filter($ciudades,'calor');
$aprobados=array_filter($alumnosNotas,function($nota){
    return($nota>=5);
});

foreach($ciudadesHabitables as $nombre=>$temperatura){
    echo $nombre."--".$temperatura;
}

echo"<br>";

foreach($aprobados as $nombre=>$nota){
    echo $nombre."--".$nota;
}

$suspensos=array_filter($alumnosNotas,function($nota){
    return($nota<5);

});
echo"<br>";
array_walk($suspensos,function($nota,$nombre){
    echo "El alumno ".$nombre." ha sacado ".$nota."pero se incrementa por asistencia en ".$nota+1+"<br>";

});

?>
</body>
</html>

