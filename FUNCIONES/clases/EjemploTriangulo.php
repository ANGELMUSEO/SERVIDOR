<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

/*
/*
 Crea una clase llamada Triangulo con dos atributos de tipo double: base y altura. 
Añade los siguientes métodos: constructor, getter, setter y toString; además un método 
que nos permita calcular y devolver el área del triángulo.

Area=base*altura/2

*/


class Triangulo{
    //propiedades privadas

    private $base;
    private $altura;

    //constructor
    public function __construct($b,$h)
    {
        $this->base=$b;
        $this->altura=$h;
    }



    //getter y setter
    public function getBase(){
        return $this->base;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function setBase($base){
        $this->base=$base;
    }

    public function setAltura($altura){
            $this->altura=$altura;
    }

    public function areaTriangulo(){
            return(0.5*$this->base*$this->altura);
    }
    
    public function __toString(){
        return "TRIANGULO: BASE->".$this->base."<br>ALTURA: ".$this->altura."<br>AREA: ".$this->areaTriangulo();
    }

}

//clase ejecutable
class AplicacionTriangulo{
    public static function main(){
            $baseTriangulo=6;
            $alturaTriangulo=5;

           // $trianguloPrueba=new Triangulo();
            //$trianguloPrueba->setBase($baseTriangulo);
          //  $trianguloPrueba->setAltura($alturaTriangulo);

            //echo $trianguloPrueba;

            //con constructor se realizaría así...
            $trianguloPrueba=new Triangulo($baseTriangulo,$alturaTriangulo);

            echo $trianguloPrueba;
            echo"<br>********************<br>";

            echo "El area del triangulo es ".$trianguloPrueba->areaTriangulo();

    }

}

AplicacionTriangulo::main();

?>


    
</body>
</html>