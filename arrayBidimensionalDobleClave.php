<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
        $temperaturasCiudad=[
            "OVIEDO"=>["mañana"=>"hlk",
                        "tarde"=>15, 
                        "noche"=>12],
            "GIJON"=>["mañana"=>6,
                        "tarde"=>15,
                        "noche"=>14],
            "AVILES"=>["mañana"=>3,"tarde"=>18,"noche"=>21],
            "MIERES"=>["mañana"=>7,"tarde"=>32,"noche"=>17]

        ];

       // echo $temperaturasCiudad["GIJON"]["tarde"];

     /*
        foreach($temperaturasCiudad as $nombre=>$temperatura){
            echo $nombre."<br>";
            echo "TEMPERATURA MAÑANA: {$temperatura["mañana"]} TEMPERATURA TARDE:{$temperatura["tarde"]} TEMPERATURA NOCHE {$temperatura["noche"]}<br><br>";
        }
*/
        //foreach doble

        /*
        foreach($temperaturasCiudad as $nombre=>$temperaturas){
            foreach($temperaturas as $momento=>$valor){
                    echo "{$nombre}--{$momento}--{$valor} <br>";
                
            }
           
         }

        echo"<br><br><br>La media es ".($totalTemperaturas/12);
*/
foreach($temperaturasCiudad as $nombre=>$temperaturas){
    foreach($temperaturas as $momento=>$valor){
        if(is_numeric($valor)){
            echo $valor."<br>";
        }
    }}

?>
</body>
</html>