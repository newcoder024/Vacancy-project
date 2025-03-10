<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $naam = htmlspecialchars($_POST["naam"]);
    $email = htmlspecialchars($_POST["email"]);
    $motivatie = htmlspecialchars($_POST["motivatie"]);
    $baan = htmlspecialchars(string: $_POST["baan"]);

    echo "<h1>Solicitatie ontvangen</h1>";
    echo "<p><strong>Ingevulde informatie:</strong></p>";
    echo "<p>Naam: " . $naam . "</p>";
    echo "<p>Email: " . $email . "</p>";
    echo "<p>Motivatie: " . $motivatie . "</p>";
    echo "<p>Baan: " . $baan . "</p>";
}else{
    echo "<p>No form data received</p>";
}


?>