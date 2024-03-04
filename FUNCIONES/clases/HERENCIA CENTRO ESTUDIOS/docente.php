<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

class Docente extends Persona{
  private $salario;

  public function __construct($n,$a,$e=0,$s)
  {
    parent::__construct($n,$a,$e);
    $this->salario=$s;
  }

  public function getSalario(){
    return $this->salario;
  }

  public function setSalario($s){
    $this->salario=$s;
  }

  public function __toString(){
    return parent::__toString()."<BR>SALARIO: ".$this->salario;

  }

}
?>


    
</body>
</html>