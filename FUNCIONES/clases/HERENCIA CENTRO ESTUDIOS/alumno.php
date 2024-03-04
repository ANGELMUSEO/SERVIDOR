<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

class Alumno extends Persona{
  private $nota;
  private $aprobado;

  public function __construct($n,$a,$e=0,$no=0)
  {
    parent::__construct($n,$a,$e);
    $this->nota=$no;
    $this->calcularAprobado();
  }

  public function calcularAprobado(){
    if($this->nota>=5){
        $this->aprobado=true;
    }else{
        $this->aprobado=false;
    }
  }

  public function getNota(){
    return $this->nota;
  }

  public function getAprobado(){
    return $this->aprobado;
  }

  public function setNota($n){
    $this->nota=$n;
  }


  public function __toString(){
    return parent::__toString()."<br>NOTA: ".$this->nota."<br>APROBADO: ".$this->aprobado;
  }
}
?>


    
</body>
</html>