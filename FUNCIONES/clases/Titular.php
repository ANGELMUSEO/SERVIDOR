<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

class Titular{
   private $nombre;
   private $apellido;
   private $edad;

   public function __construct($n, $a, $e){
    $this->nombre=$n;
    $this->apellido=$a;
    $this->edad=$e;

   }
    
   public function getNombre(){
    return $this->nombre;
   }

   public function getApellido(){
    return $this->apellido;
   }

   public function getEdad(){
    return $this->edad;
   }

   public function setNombre($n){
    $this->nombre=$n;
   }

   public function setApellido($a){
    $this->apellido=$a;
   }

   public function setEdad($e){
    $this->edad=$e;
   }

   public function __toString(){
    return "<br>NOMBRE: ".$this->nombre+"<br>APELLIDO: ".$this->apellido."<br>EDAD: ".$this->edad;
   }

}


?>


    
</body>
</html>