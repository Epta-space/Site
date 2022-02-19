<?php
include_once '../connections/database.php';

$login_user = $_POST['Login'];
$password_user = $_POST['Senha'];

if ($login_user == "epta123" and $password_user == "teste") {
    if (isset($_POST['Blog'])) {
        header("Location: ../pages/PostBlog.php");
    } else if (isset($_POST['Cursos'])) {
        header("Location: ../pages/Postcursos.php");
    } else {
        header("Location: ../pages/Postprojetos.php");
    }
} else {
    echo "login incorreto";
}
