<html>
    <body>
        <?php 



/*

realizar las siguientes funciónes:
-una función que reciba un array y muestre todos los datos
-una función que reciba dos arrays y devuelva un array con el 
primer elemento de cada uno
-una función que reciba un array y un valor y cambie el valor al primer elemento
-una función que cambie las claves de un array(se recibiran por parámetro)

Crear dos arrays asociativos diferentes y probar las funciones anteriores

*/ 
function mostrarArrayAsociativo($ArrayAsocitivo){

    foreach($ArrayAsocitivo as $clave=>$valor){
            echo $clave." => ".$valor."<br>";
    }

}

function PrimerElemento($array1,$array2){
    array_splice($array1,1,count($array1));
    array_splice($array2,1,count($array2));
   $resultado=array_merge($array1,$array2);
  mostrarArrayAsociativo($resultado);
}


function cambio($arrayRecibido,$valor){
    array_splice($arrayRecibido,0,1,$valor);
    mostrarArrayAsociativo($arrayRecibido);
 }
 
 function cambioClaves($arrayRecibido,$claves){
     $arrayNuevo=array_combine($claves, $arrayRecibido);
     mostrarArrayAsociativo($arrayNuevo);
 }


$car =["marca"=>"Ford", "modelo"=>"Mustang", "year"=>1964];    
$persona =["nombre"=>"Ana", "edad"=>23, "altura"=>196];   
//mostrarArrayAsociativo($car);
//PrimerElemento($car,$car2);
//primerElemento($car,$persona);

$dato=["marca"=>"rojo"];
//cambio($car,$dato);
cambioClaves($car,array_keys($persona));

        ?>
        
    </body>
</html>