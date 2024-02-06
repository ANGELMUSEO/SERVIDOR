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
        $cuentaDiego=new CuentaCorriente("Diego Ruiz");
        echo"<br>****************************<br>";
        echo $cuentaDiego;
        $cuentaDiego->ingresar(1000);
        echo"<br>****************************<br>";
        echo $cuentaDiego;
        $cuentaDiego->reintegro(375);
        echo"<br>****************************<br>";
        echo $cuentaDiego;

        echo"<br>*******GESTION NUEVAS CUENTAS*********************<br>";        
        $cuentaAna=new CuentaCorriente("Ana Vega",1000);
        $cuentaCristina=new CuentaCorriente("Cristina Lopez",500);
        echo"<br>****************************<br>";
        echo $cuentaAna;
        echo"<br>****************************<br>";
        echo $cuentaCristina;
        $cuentaAna->reintegro(200);
        $cuentaCristina->ingresar(1000);
        echo"<br>****************************<br>";
        echo $cuentaAna;
        echo"<br>****************************<br>";
        echo $cuentaCristina;


    }
}

?>

  
</body>
</html>