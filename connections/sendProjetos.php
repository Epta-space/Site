<?php
include_once '../connections/database.php';

$title = mysqli_real_escape_string($conn, $_POST['Titulo']);
$image = mysqli_real_escape_string($conn, $_POST['Imagem']);
$subtitle = mysqli_real_escape_string($conn, $_POST['Subtitulo']);
$content = mysqli_real_escape_string($conn, $_POST['Conteudo']);
$author = mysqli_real_escape_string($conn, $_POST['Autor']);
$date = mysqli_real_escape_string($conn, $_POST['Data']);
$tags = mysqli_real_escape_string($conn, $_POST['Tags']);

$sql = "INSERT INTO projetos (Titulo, Imagem, Subtitulo, Conteudo, Autor, Data, Tags) VALUES ('$title', '$image', '$subtitle',  '$content', '$author', '$date', '$tags');";
mysqli_query($conn, $sql);

header("Location: ../pages/index.php?send=success");
