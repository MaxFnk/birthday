<?php
// Festgelegtes Passwort
$myPassword = "maxiking";

// Passwort aus dem Formular
$password = $_POST['password'];

// Überprüfen des Passworts
if ($password === $myPassword) {
    header("Location: birthday.php"); // Weiterleitung zur geschützten Seite
} else {
    echo "Ungültiges Passwort!";
    // Zurück zum Login-Formular oder eine Fehlermeldung anzeigen
}
?>
