<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

include "banco.php";
class AplicationBanco{
    public static function main(){
        $cuentasBanco=[];
       $cuentasBanco[0]=new CuentaCorriente("Diego Lopez");
       $cuentasBanco[1]=new CuentaCorriente("Ana Vega",1000);
       $cuentasBanco[2]=new CuentaCorriente("Cristina Lopez",500);

       $cuentasBanco[0]->ingresar(300);
       $cuentasBanco[1]->reintegro(250);

       foreach($cuentasBanco as $cuenta){
            echo $cuenta;
       }


    }
}

?>

  
</body>
</html>