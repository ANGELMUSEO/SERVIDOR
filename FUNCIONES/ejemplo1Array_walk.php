<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            


            $arrayAlumno=["MANOLO"=>6.8,"MONICA"=>7.9,"MARIA"=>6.5];

            array_walk($arrayAlumno,function($nota,$nombre){
                    echo $nombre." ha sacado ".$nota."<br>";
            });


    ?>
</body>
</html>