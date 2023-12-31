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

if(isset($email)) {    
    $sql_email_check = $conn->query("SELECT * FROM teilnehmer WHERE vorname = '$vorname' AND nachname = '$nachname' AND email = '$email'");    
    $email_check = $sql_email_check->num_rows;    
  
    if ($email_check == 0) {
      echo 'Noch nicht angemeldet.';  
      return; 
      } 
    else 
    {
      echo 'Du hast dich schon angemeldet.';
      return;    
    }
  }
?>