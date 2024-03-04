<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

class Asignatura{
  private $nombreAsignatura;
  private $notaTrimestre1;
  private $notaTrimestre2;

  public function __construct($n,$nota1=0,$nota2=0)
  {
   $this->nombreAsignatura=$n;
   $this->notaTrimestre1 =$nota1;
   $this->notaTrimestre2=$nota2;
  }

  public function getNombreAsigantura(){
    return $this->nombreAsignatura;
  }

public function getNotaTrimestre1(){
    return $this->notaTrimestre1;
}

public function getNotaTrimestre2(){
    return $this->notaTrimestre2;
}

public function setNombreAlumno($n){
    $this->nombreAsignatura=$n;
}

public function notaMedia(){
    return ($this->notaTrimestre1+$this->notaTrimestre2)/2;
}

public function aprobado(){
    return ($this->notaMedia()>=5);
}
public function __toString(){
    return "NOMBRE ASIGNATURA ".$this->nombreAsignatura."<br>NOTA 1:".$this->notaTrimestre1."<br>NOTA 2:".$this->notaTrimestre2;
}


}


?>


    
</body>
</html>