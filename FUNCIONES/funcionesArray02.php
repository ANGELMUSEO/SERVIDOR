<html>
    <body>
        <?php 

                function mostrarArrayAsociativo($ArrayAsocitivo){

                    foreach($ArrayAsocitivo as $clave=>$valor){
                            echo $clave." => ".$valor."<br>";
                    }

                }
                
                function incremento(&$valor){
                    $valor++;
                }
       
                //funcion que reciba un array, quite el primer y ultimo elemento
                
                function QuitarAniadir(&$arrayAsociativo){
                    array_pop($arrayAsociativo);
                    array_shift($arrayAsociativo);
                   
                    
                   

                }
                
              
               $numero=10;

                $censoPoblacion=["ESPAÑA"=>47,"PORTUGAL"=>15,"FRANCIA"=>70,"ITALIA"=>60];
               $alumnos=["MONICA"=>6.7,"ANA"=>4.5,"MARIA"=>7.9,"FELIPE"=>3.4];
               $datoPais=["ALEMANIA"=>80];
                $datoAlumno="JUAN=>4.5";
                mostrarArrayAsociativo($censoPoblacion);
                echo"<br>***********<br>";
              mostrarArrayAsociativo($alumnos);
              echo"<br>***********<br>";

              QuitarAniadir($censoPoblacion);
              echo"<br>***********<br>";
              mostrarArrayAsociativo($censoPoblacion);
              echo"<br>***********<br>";
              echo $numero;
              incremento($numero);
              echo"<br>***********<br>";
              echo $numero;


        ?>
        
    </body>
</html>