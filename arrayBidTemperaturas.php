<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /* crear array con 4 ciudades y tres temperaturas(mañana, tarde, noche) */
    $ciudad= array( 
        array("CIUDAD"=>"OVIEDO","mañana"=>2,"tarde"=>5,"noche"=>7),
        array("CIUDAD"=>"GIJON","mañana"=>2,"tarde"=>5,"noche"=>7),
        array("CIUDAD"=>"AVILES","mañana"=>2,"tarde"=>5,"noche"=>7),
        array("CIUDAD"=>"MIERES","mañana"=>2,"tarde"=>5,"noche"=>7)
    );
    $totalTemperaturas=0;


    for($i=0;$i<count($ciudad);$i++){
            $totaTemperaturas+=$ciudad[$i]["mañana"]+$ciudad[$i]["tarde"]+$ciudad[$noche];
            //echo("La temperatura media de la ciudad ".$ciudad[i]." es ".(totalTemperaturas/3 ));
    }
    echo("La temperatura media de la ciudad ".(totalTemperaturas/9 ));

    ?>
</body>
</html>