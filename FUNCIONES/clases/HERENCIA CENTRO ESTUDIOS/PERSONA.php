<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

class Persona{
   protected $nombre;
   protected $apellido;
   protected $edad;

   public function __construct($n,$a,$e=0)
   {
    $this->nombre=$n;
    $this->apellido=$a;
    $this->edad=$e;
   }

   public function getNombre(){
    return $this->nombre;
   }

   public function __toString(){
    return "<BR>NOMBRE: ".$this->nombre."<BR>APELLIDO: ".$this->apellido."<BR>EDAD: "
    .$this->edad;
   }
}


?>


    
</body>
</html>