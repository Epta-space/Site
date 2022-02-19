<?php
include_once '../connections/database.php';

$title = mysqli_real_escape_string($conn, $_POST['Titulo']);
$image = mysqli_real_escape_string($conn, $_POST['Imagem']);
$content = mysqli_real_escape_string($conn, $_POST['Conteudo']);
$duration = mysqli_real_escape_string($conn, $_POST['Duracao']);
$link = mysqli_real_escape_string($conn, $_POST['Link']);
$tags = mysqli_real_escape_string($conn, $_POST['Tags']);

$sql = "INSERT INTO cursos (Titulo, Imagem, Conteudo, Duracao, Link, Tags) VALUES ('$title', '$image', '$content', '$duration', '$link', '$tags');";
mysqli_query($conn, $sql);

header("Location: ../pages/index.php?send=success");
