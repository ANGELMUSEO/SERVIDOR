<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $notasAlumno=["MONICA"=>5.6,"ANA"=>4.7,"LUIS"=>8.9];

    foreach($notasAlumno as $nombre =>$nota){
            echo "<br>".$nombre."->".$nota;
    }
    //un_SET
    echo"<br>*******************************<br>";
    unset($notasAlumno["ANA"]);

    foreach($notasAlumno as $nombre =>$nota){
        echo "<br>".$nombre."->".$nota;
}
echo"<br>*******************************<br>";

$claves=array_keys($notasAlumno);
foreach($claves as $nombre){
    echo "<br>".$nombre;
}
echo"<br>*******************************<br>";
$valores=array_values($notasAlumno);
foreach($valores as $datos){
    echo "<br>".$datos;
}

echo"<br>*******************************<br>";

$notaAlumnoUnion=array_combine($claves,$valores);

foreach($notaAlumnoUnion as $nombre =>$nota){
    echo "<br>".$nombre."->".$nota;
}

if(in_array(5,$notaAlumnoUnion)){
    echo "existe";
}else{
    echo " no existe";
}

    ?>
</body>
</html>