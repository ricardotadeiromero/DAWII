<?php

function calcMedia($n1, $n2){
    $media = ($n1+$n2)/2;
    return $media;
}

//ex013.php?nota1=8.0&nota2=7.0
$n1 = $_POST["nota1"];//se colocar REQUEST tanto faz, pode get ou post no html
$n2 = $_POST["nota2"];

$media = calcMedia($n1,$n2);

echo "Média = " . $media . "<br>";

if($media >= 6.0) {
    echo "<span id='aprovado'>APROVADO!</span>";
} else {
    echo "<span id='reprovado'>REPROVADO!</span>";
}

?>

<html>
    <head>
        <title>Média</title>
        <style>
            #reprovado {
                background-color: red;
                color: white;
                font-weight: bold;
            }

            #aprovado {
                background-color: green;
                color: white;
                font-weight: bold;
            }
        </style>
    </head>
</html>