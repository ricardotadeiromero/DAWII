<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD - Controle de alunos</title>
</head>

<body>

<a href="index.html">Home</a> | <a href="consulta.php">Consulta</a>
<hr>

<h2>Edição de Alunos</h2>

</body>
</html>

<?php

    include("bd.php");

    $cpf = $_POST['cpf'];
    $novoNome = $_POST['nome'];
    $novoDp = $_POST['departamento'];
    $idade = $_POST['idade'];
    $foto = $_FILES['foto'];

    alterar($cpf, $novoNome, $novoDp, $idade, $foto);

?>