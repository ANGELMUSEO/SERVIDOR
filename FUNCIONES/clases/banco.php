<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

class CuentaCorriente{
    private $titular;
    private $saldo;

    //constructor

    public function __construct($tit,$sal=0){
            $this->titular=$tit;
            $this->saldo=$sal;
    }
/*
   public function __construct(...$args){

        switch(count($args)){
            case 1:
                $this->titular=$args[0];
                $this->saldo=0;
                break;
            case 2:
                $this->titular=$args[0];
                $this->saldo=$args[1];
            case 0:
                throw new Exception("necesitamos el titular");


        }

    }
   
*/
    public function getTitular(){
        return $this->titular;
    }
    public function getSaldo(){
        return $this->saldo;
    }

    public function setTitular($tit){
        $this->titular=$tit;
    }
    public function ingresar($cantidad){
        $this->saldo+=$cantidad;
    }

    public function reintegro($cantidad){
        if($cantidad<=$this->saldo){
            $this->saldo-=$cantidad;
        }else{
            echo "no hay saldo";
        }
    }

    public function __toString(){
        return "<br>TITULAR: ".$this->titular
        ."<br>SALDO DISPONIBLE: ".$this->saldo;
    }


}


?>


    
</body>
</html>