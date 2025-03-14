<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "seuemail@exemplo.com";
    $subject = "Contato do Site Apex Cloud";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
    echo "Mensagem enviada com sucesso!";
} else {
    echo "Erro no envio!";
}
?>
