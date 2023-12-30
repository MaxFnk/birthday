<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max wird 30</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="login-box">
        <h1>Teilnahmebestätigung</h1>
        <form action="submit.php" method="post">
        
        <div class="user-box">
        <input type="text" id="vorname" name="vorname" required>
        <label for="vorname">Vorname</label>
        </div> 

        <div class="user-box">
        <input type="text" id="nachname" name="nachname" required>
        <label for="nachname">Nachname</label>
        </div> 

        <div class="user-box">
        <input type="text" id="email" name="email" required>
        <label for="email">Email</label>
        </div> 
        
        
        <a href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <input type="submit" value="Bestätigen">
    </a>
    </form>
    </div>
</body>
</html>