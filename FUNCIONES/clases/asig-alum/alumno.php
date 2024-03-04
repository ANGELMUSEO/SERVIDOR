<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

class Alumno {
 private $nombreAlumno;
 private $cliente;
 private $servidor;

 public function __construct($no,$as,$as2)
 {
    $this->nombreAlumno=$no;
    $this->cliente=  $as;
    $this->servidor=$as2;
 }
public function getNombreAlumno(){
    return $this->nombreAlumno;
}


public function getCliente(){
    return $this->cliente;
}

public function getServidor(){
    return $this->servidor;
}

public function aprobadoCurso(){
    return($this->cliente->aprobado()&&$this->servidor->aprobado());
}

public function __toString()
{
    return "NOMBRE ALUMNO ".$this->nombreAlumno."<br>".$this->cliente."<br>SERVIDOR ".$this->servidor;
}

}
?>


    
</body>
</html>