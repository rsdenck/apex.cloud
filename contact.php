<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Aqui você pode adicionar a lógica para enviar o e-mail ou armazenar os dados

    echo "<h2>Obrigado por entrar em contato, $name!</h2>";
    echo "<p>Responderemos o mais breve possível.</p>";
}
?>
