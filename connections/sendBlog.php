<?php
include_once '../connections/database.php';

$title = mysqli_real_escape_string($conn, $_POST['Titulo']);
$image = mysqli_real_escape_string($conn, $_POST['Imagem']);
$subtitle = mysqli_real_escape_string($conn, $_POST['Subtitulo']);
$content = mysqli_real_escape_string($conn, $_POST['Conteudo']);
$author = mysqli_real_escape_string($conn, $_POST['Autor']);
$author_img = mysqli_real_escape_string($conn, $_POST['Autor_Img']);
$tags = mysqli_real_escape_string($conn, $_POST['Tags']);
$date = mysqli_real_escape_string($conn, $_POST['Data']);

$sql = "INSERT INTO blog (Titulo, Imagem, Subtitulo, Conteudo, Autor, Autor_Imagem, Tags, Data) VALUES ('$title', '$image', '$subtitle',  '$content', '$author', '$author_img', '$tags', '$date');";
mysqli_query($conn, $sql);

header("Location: ../pages/index.php?send=success");
