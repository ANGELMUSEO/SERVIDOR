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
class AplicationCuenta{
    public static function main(){
       $persona=new Titular("JUAN","SANCHEZ",23);
       $cuenta1=new Cuenta($persona,"22222aa",1000);
       echo $cuenta1;


    }
}


?>


    
</body>
</html>