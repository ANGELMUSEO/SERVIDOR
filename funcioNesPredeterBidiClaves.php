<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            $persona=array(
                array("NOMBRE"=>"Laura","ESTATURA"=>165,"SEXO"=>"f"),
                array("NOMBRE"=>"Ignacio","ESTATURA"=>175,"SEXO"=>"m"),
                array("NOMBRE"=>"Sara","ESTATURA"=>155,"SEXO"=>"f")
            );

            foreach($persona as $nombre=>$valor){
                foreach($valor as $clave=>$dato){
                        echo "{$clave}--{$dato} <br>";
                    
                }
            }
            echo"<br>******meto final************<br>";
            //añadimos un elemento al final
            array_push($persona,array("NOMBRE"=>"DANIEL","ESTATURA"=>180,"SEXO"=>"m"));
            foreach($persona as $nombre=>$valor){
                foreach($valor as $clave=>$dato){
                        echo "{$clave}--{$dato} <br>";
                    
                }
            }
            echo"<br>*******meto principio***********<br>";
                //inserto por el principio
            array_unshift($persona,array("NOMBRE"=>"Manuel","ESTATURA"=>170,"SEXO"=>"M"));
            foreach($persona as $nombre=>$valor){
                foreach($valor as $clave=>$dato){
                        echo "{$clave}--{$dato} <br>";
                    
                }
            }
            echo"<br>*****fuera ultimo*************<br>";
            //quitar le ultimo
            array_pop($persona);
            foreach($persona as $nombre=>$valor){
                foreach($valor as $clave=>$dato){
                        echo "{$clave}--{$dato} <br>";
                    
                }
            }
            echo"<br>******fuera primero************<br>";
            array_shift($persona);
            foreach($persona as $nombre=>$valor){
                foreach($valor as $clave=>$dato){
                        echo "{$clave}--{$dato} <br>";
                    
                }
            }

            
            echo"<br>******REEMPLAZAR EL PRIMER ELEMENTO************<br>";
            array_splice($persona,1,0, array(array("NOMBRE"=>"MARIA","ESTATURA"=>173,"SEXO"=>"f")));
            foreach($persona as $nombre=>$valor){
                foreach($valor as $clave=>$dato){
                        echo "{$clave}--{$dato} <br>";
                    
                }
            }


            echo"<br>******obtener string con nombre************<br>";
           
            $nombresString=implode("**",array_column($persona,"NOMBRE"));
           echo $nombresString;

           echo"<br>******array  con nombre************<br>";
           $nombresArray=explode("**",$nombresString);
           foreach($nombresArray as $dato){
            echo $dato."-";
           }

           echo"<br>******calculo Media estatuta************<br>";
           $estaturaString=implode(" ",array_column($persona,"ESTATURA"));
           echo $estaturaString;
           $estaturaArray=explode(" ",$estaturaString);
           $total=0;
           for($i=0;$i<count($estaturaArray);$i++){
                $total+=$estaturaArray[$i];
           }

           echo "<br>La media es ".$total/count($estaturaArray);

           //version2
           $estaturaArray2=array_column($persona,"ESTATURA");
           $total=0;
           for($i=0;$i<count($estaturaArray2);$i++){
                $total+=$estaturaArray2[$i];
           }
           echo "<br>La media es ".$total/count($estaturaArray2);

           echo"<br>******sacar las claves del array************<br>";
           $claves=array_keys($persona[0]);
           for($i=0;$i<count($claves);$i++){
            echo $claves[$i]." ";
           }

           echo"<br>******sacar los valores del array************<br>";
           $valores=array_values($persona[0]);
           for($i=0;$i<count($valores);$i++){
            echo $valores[$i]." ";
           }

           $clavesProductos=["nombre","precio","talla"];
           $datos=[
            ["camisa",40,"l"],
            ["pantalon",70,"M"]
            ];
           echo"<br>******combinar clave valor************<br>";

           //comprobar esta parte final
           $nuevoArray=array_combine($clavesProductos,$datos[0]);
           $nuevoArray=array_combine($clavesProductos,$datos[0]);
         


    ?>  
</body>
</html>