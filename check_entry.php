<?php
$serverName = "birthday.database.windows.net"; 
$connectionOptions = array(
    "Database" => "birthday", // Ihr Datenbankname
    "Uid" => "birthday", // Ihr Benutzername
    "PWD" => "Gievenbeck1!" // Ihr Passwort
);

$conn = sqlsrv_connect($serverName, $connectionOptions);
if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

$vorname = $_POST['vorname'];
$nachname = $_POST['nachname'];
$email = $_POST['email'];

$sql = "SELECT * FROM teilnehmer WHERE vorname = ? AND nachname = ? AND email = ?";
$params = array($vorname, $nachname, $email);
$stmt = sqlsrv_query($conn, $sql, $params);

if ($stmt === false) {
    echo "Fehler beim Überprüfen der Datenbank.";
} else {
    if (sqlsrv_fetch($stmt) !== false) {
        echo "Du hast dich schon angemeldet.";
    } else {
        echo "";
    }
}

sqlsrv_free_stmt($stmt);
sqlsrv_close($conn);
?>