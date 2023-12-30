<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Die E-Mail-Adresse, an die die Nachricht gesendet wird
    $to = 'maxifranke@gmx.de';
    $subject = 'Teilnahmebestätigung für den 30. Geburtstag';
    $message = "Name: $name\nE-Mail: $email\n hat seine Teilnahme bestätigt.";

    // Falls gewünscht, fügen Sie hier Header für 'From' oder andere hinzufügen
    $headers = 'From: webmaster@example.com' . "\r\n" .
               'Reply-To: webmaster@example.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    // E-Mail senden
    mail($to, $subject, $message, $headers);

    // Bestätigungsnachricht
    echo "<p>Danke, $name! Deine Teilnahme wurde bestätigt. Wir haben eine Bestätigungs-E-Mail an $email gesendet.</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>30. Geburtstagsfeier</title>
    <!-- Fügen Sie hier bei Bedarf CSS hinzu -->
</head>
<body>
    <div class="container">
        <h1>Teilnahmebestätigung für Maxis 30. Geburtstag</h1>
        <form action="" method="post">
            <label for="name">Dein Name:</label><br>
            <input type="text" id="name" name="name" required><br>
            <label for="email">Deine E-Mail:</label><br>
            <input type="email" id="email" name="email" required><br><br>
            <input type="submit" value="Bestätigen">
        </form>
    </div>
</body>
</html>