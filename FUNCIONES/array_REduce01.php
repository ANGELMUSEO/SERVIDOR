<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
      
      $notas=[];

      for($i=0;$i<10;$i++){
            $notas[$i]=rand(0,10);
      }

      $total=array_reduce($notas,function($sumaNotas,$nota){
           
           return $sumaNotas+=$nota;
      });

      echo "La media es ".($total/count($notas));
?>

</body>
</html>