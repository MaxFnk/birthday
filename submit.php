<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Max wird 30</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
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

sqlsrv_free_stmt($stmt);
sqlsrv_close($conn);
?>

    <div class="login-box">
      <h2>Max wird 30 - du bist dabei</h2>
      <p style="color: white; text-align: center;">
        Ich freu mich auf Dich!
    </p>
    </div>
  </body>
</html>
