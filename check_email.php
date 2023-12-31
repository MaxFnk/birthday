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

$data = json_decode(file_get_contents("php://input"), true);
$email = $data["email"];

$sql = "SELECT email FROM teilnehmer WHERE email = ?";
$params = array($email);
$stmt = sqlsrv_query($conn, $sql, $params);

if ($stmt === false) {
    echo "error";
} else {
    if (sqlsrv_fetch($stmt) !== false) {
        echo "exists";
    } else {
        echo "not exists";
    }
}

sqlsrv_free_stmt($stmt);
sqlsrv_close($conn);
?>
