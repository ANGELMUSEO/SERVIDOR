<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

include "Cuenta.php";
class AplicationCuenta2{
    public static function main(){
        $persona1 = new Titular("JORGE","FELIPE", 33);
        $persona2 = new Titular("ANA", "VEGA",35);
        $persona3 = new Titular("MARIA", "FERNANDA",23);

        $cuentas = array(
            new Cuenta($persona1, "2222222AB",1000),
            new Cuenta($persona2,"33333333AB"),
            new Cuenta($persona3,"4444444AB", 500)
        );

        do{
            echo "ELIJE UNA OPCION<BR>";
            echo "1. INGRESAR 50 EUROS TODOAS<BR>";
            echo "2. SACAR 300 EUROS ANA<BR>";
            echo "3. MOSTRAR TODOS";
            echo "4. SALIR";
            $opcion=rand(0,4);

            switch($opcion){
                case 1: foreach($cuentas as $valor)
                   echo  $valor;break;
                case 2: foreach($cuentas as $valor)
                   echo  $valor;break;
                case 3: foreach($cuentas as $valor)
                   echo  $valor;break;
                
               
            }

        }while($opcion!=4);

    }
}


?>


    
</body>
</html>