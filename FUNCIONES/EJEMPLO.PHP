<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?PHP
            /**
             * 
             * hACER UNA CALCULADORA A TRAVES DE UNA FUNCION. lA FUNCION RECIBIRA TRES PARAMENTROS:
             * -DOS NUMEROS
             * -OPERADOR:+,-;*,/. El parametro operador llevara un valor por defecto que sea la suma.
             * 
             * La funcion tendrá que retornar el resulutado de la operacion
             * 
             */

            function calculadora($valor1,$valor2,$operador="+"):float{
                $resultado=0;
                switch($operador){
                        case "+":$resultado=$valor1+$valor2;
                            break;
                        case "-":$resultado=$valor1-$valor2;
                                break;
                        case "*":$resultado=$valor1*$valor2;
                                break;
                        case "/":if($valor2!=0){
                            $resultado=$valor1/$valor2;
                        }
                            break;
                            default: $resultado=$valor1+$valor2;
                        }
                        return $resultado;
                }

              
            
                echo "El resultado de la suma es  ".calculadora(3,4,"+")."<br>";
                echo "El resultado de la suma es  ".calculadora(3,4)."<br>";
                echo "El resultado de la resta  es  ".calculadora(3,4,"-")."<br>";
                echo "El resultado de la multiplicar es  ".calculadora(3,4,"*")."<br>";
                echo "El resultado de la dividir es  ".calculadora(6,4,"/")."<br>";
                echo "El resultado de la suma es  ".calculadora(3,4,"$")."<br>";



    ?>
</body>
</html>