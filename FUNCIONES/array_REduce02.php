<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $equipos=[
        ["nombre"=>"Oviedo", "puntos"=>100,"goles"=>100],
        ["nombre"=>"Industrial","puntos"=>35,"goles"=>89],
        ["nombre"=>"Piloñesa","puntos"=>39,"goles"=>57]
    ];  
    
$media=array_reduce($equipos,function($totalPuntos,$equipo){
    return($totalPuntos+$equipo["puntos"]);
});
echo "La media de los puntos es ".$media/count($equipos);
?>

</body>
</html>