<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

class AplicationCentro{
    public static function main(){
       $profesor1=new Docente("ANGEL","GONZALEZ",37,3000);
       $alumno1=new Alumno("LAURA","CALVO",24,8);
     echo $profesor1;
        echo $alumno1;

    }
}

?>

  
</body>
</html>