<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$apartamentos=[
    ["precio/noche"=>40, "ciudad"=>"valencia","wifi"=>true],
    ["precio/noche"=>67,"ciuadad"=>"oviedo","wifi"=>false],
    ["precio/noche"=>100,"ciudad"=>"valencia","wifi"=>true]
];

array_walk($apartamentos,function($apartemento,$posicion){
    echo $apartemento["ciudad"];
});

?>
    
</body>
</html>