<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
        $ciudadSalario=["Oviedo"=>3000,"Mieres"=>2500,"Gijon"=>2400];
        $ciudadadeMuchoSalario=[];

        $ciudaddeMuchoSalario=array_filter($ciudadSalario,function($salario){
                return($salario>=2700);
        });

        array_walk($ciudaddeMuchoSalario,function($dato,$clave){
                echo $clave."->".$dato;
        })
?>

</body>
</html>