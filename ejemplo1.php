<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            function miNombre(){
                echo "mi nombre es Angel";
            }



            function nombreAlumnos($nombre,$edad=18){
                    echo "El alumno se llama ".$nombre." y tiente ".$edad;
            }


            function parImpar($numero):string{
                $resultado="";
                    if($numero%2==0){
                            $resultado="EL NUMERO {$numero} ES PAR";
                    }else{
                        $resultado="EL NUMERO {$numero} ES IMPAR";
                    }
                    return $resultado;
            }




//zona programa principal

            //miNombre();
            echo("<br>*****************<br>");
            nombreAlumnos("Juan",21);
            echo("<br>*****************<br>");
            nombreAlumnos("Maria", 25);
            echo("<br>*****************<br>");
            nombreAlumnos("Monica");
           
            echo"<br>".parImpar(45);





    ?>
</body>
</html>