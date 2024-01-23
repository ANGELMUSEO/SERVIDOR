<html>
    <body>
        <?php 

                function mostrarArrayAsociativo($ArrayAsocitivo){

                    foreach($ArrayAsocitivo as $clave=>$valor){
                            echo $clave." => ".$valor."<br>";
                    }

                }

                function mediaArray($ArrayAsocitivo):float{
                    $total=0;
                    foreach($ArrayAsocitivo as $clave=>$valor){
                            $total+=$valor;
                    }
                    return $total/count($ArrayAsocitivo);
                }
       
                //funcion que reciba un array, quite el primer y ultimo elemento
                //y meta un elemento al principio y al final pasado como parametro
                function QuitarAniadir($arrayAsociativo){
                    array_pop($arrayAsociativo);
                    array_shift($arrayAsociativo);
                  //  array_push($arrayAsociativo,$nuevoElemento);
                   // array_unshift($arrayAsociativo,$nuevoElemento);
                   mostrarArrayAsociativo($arrayAsociativo);

                }
                
                
                function retorneClaves($arrayAsocitivo){
                    $claves=array_keys($arrayAsocitivo);
                    for($i=0;$i<count($claves);$i++){
                        echo $claves[$i]."--";
                    }
                        //return $claves;
                }


                $censoPoblacion=["ESPAÑA"=>47,"PORTUGAL"=>15,"FRANCIA"=>70,"ITALIA"=>60];
               $alumnos=["MONICA"=>6.7,"ANA"=>4.5,"MARIA"=>7.9,"FELIPE"=>3.4];
               $datoPais=["ALEMANIA"=>80];
                $datoAlumno="JUAN=>4.5";
                mostrarArrayAsociativo($censoPoblacion);
                echo"<br>*********************<br>";
                mostrarArrayAsociativo($alumnos);
                echo"<br>*******media poblacion**************<br>";
                $media=mediaArray($censoPoblacion);
                echo $media;
                echo"<br>*******media notas**************<br>";
                $media=mediaArray($alumnos);
                echo $media;
                echo"<br>*******añadir-quitar-pais**************<br>";
                QuitarAniadir($censoPoblacion);
                echo"<br>*******añadir-quitar-pais**************<br>";
                QuitarAniadir($alumnos);
               
                echo"<br>*******mostrar claves poblacion**************<br>";
                retorneClaves($censoPoblacion);
                echo"<br>*******mostrar claves alumnos**************<br>";
                retorneClaves($alumnos);
        ?>
        
    </body>
</html>