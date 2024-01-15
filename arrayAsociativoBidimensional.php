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

            $alumno=array(
                array("nombre"=>"rosa","estatura"=>168,"sexo"=>"f"),
                array("nombre"=>"Ignacio","estatura"=>174,"sexo"=>"m"),
                array("nombre"=>"Daniel","estatura"=>172,"sexo"=>"m")

            );

      
        
                    for($i=0;$i<count($alumno);$i++){
                            echo "NOMBRE: ".$alumno[$i]["nombre"]."<br>";
                            echo "ALTURA: ".$alumno[$i]["estatura"]."<br>";
                            if($alumno[$i]["sexo"]=="f"){
                                echo "SEXO FEMENINO<br>";
                            }else{
                                echo "SEXO MASCULINO<br>";
                            }
        
                    }
        
    ?>
</body>
</html>