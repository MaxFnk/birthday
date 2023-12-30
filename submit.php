<?php
$serverName = "birthday.database.windows.net"; 
$connectionOptions = array(
    "Database" => "birthday", // Ihr Datenbankname
    "Uid" => "birthday", // Ihr Benutzername
    "PWD" => "Gievenbeck1!" // Ihr Passwort
);

// Verbindung zur Datenbank herstellen
$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

// Daten aus dem Formular holen
$vorname = $_POST['vorname'];
$nachname = $_POST['nachname'];
$email = $_POST['email'];

// SQL-Befehl vorbereiten und ausführen
$sql = "INSERT INTO teilnehmer (vorname, nachname, email) VALUES (?, ?, ?)";
$params = array($vorname, $nachname, $email);

$stmt = sqlsrv_query($conn, $sql, $params);

if ($stmt === false) {
    die(print_r(sqlsrv_errors(), true));
}

echo "Teilnahme bestätigt!";

sqlsrv_free_stmt($stmt);
sqlsrv_close($conn);
?>
