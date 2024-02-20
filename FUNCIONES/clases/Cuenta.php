<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

include "Titular.php";

class Cuenta{
   private $cliente;
   private $numeroCuenta;
   private $saldo;

   public function __construct($tit,$cue,$sal=0){
    $this->cliente=$tit;
    $this->numeroCuenta=$cue;
    $this->saldo=$sal;
   }




   public function reintegro($c) {
    if ($this->saldo - $c >= 0) {
        $this->saldo -= $c;
    }
}

public function ingreso($cantidad) {
    $this->saldo += $cantidad;
    return $this->saldo;
}

public function __toString() {
    return "************************" . 
        "<BR>NOMBRE " . $this->cliente->getNombre() . 
        "<BR>APELLIDO ".$this->cliente->getApellido().
        "<BR>EDAD ".$this->cliente->getEdad().
        "<br>CUENTA ".$this->numeroCuenta.
        "<br>SALDO " . $this->saldo ;
       
}
    

}


?>


    
</body>
</html>