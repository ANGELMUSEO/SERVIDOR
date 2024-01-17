<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*Necesitamos gestionar una tienda de ropa teniendo en cuenta que cada producto tiene:
    codigoBarras, nombreProducto, precio,color, talla. Meter 3 productos */
$tienda=[
        1234=>["nombre"=>"camisa","precio"=>32,"color"=>"rojo","talla"=>"xl"],
        2345=>["nombre"=>"pantalon","precio"=>57,"color"=>"negro","talla"=>"l"],
        1973=>["nombre"=>"guantes","precio"=>18,"color"=>"marron","talla"=>"m"]
];


foreach($tienda as $codigoBarras =>$producto){
    echo "<br>". $codigoBarras."<br>";
    foreach($producto as $info =>$valor){
       
        echo $info."--".$valor."<br>";
    }

}

//Mostrar la media de los precios de los articulos


$totalPrecio=0;
foreach($tienda as $codigoBarras=>$producto){
    foreach($producto as $info=>$valor){
        if($info=="precio"){
            $totalPrecio+=$valor;
        }
    }

}
echo "<br>La media de los precios es ".($totalPrecio/count($tienda));



foreach($tienda as$codigo=>$producto){
    $totalPrecio=$producto["precio"];

}

    ?>
    
</body>
</html>
