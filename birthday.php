<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Max wird 30</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <div class="login-box">
      <h2>Max wird 30 - let's go!</h2>
      <p style="color: white; text-align: center;">
        27.01.2024
        <br />
        Lindenstraße 236, 40235 Düsseldorf
        <br />
        19 Uhr
    </p>
    <p style="color: white">
    
        Falls ihr Bock und Zeit habt, sagt gerne direkt zu.
      </p>
      <br />

      <form action="submit.php" method="post">
        <div class="user-box">
          <input type="text" id="vorname" name="vorname" required />
          <label for="vorname">Vorname</label>
        </div>

        <div class="user-box">
          <input type="text" id="nachname" name="nachname" required />
          <label for="nachname">Nachname</label>
        </div>
        <button type="submit" id="submit-button">Bestätigen</button>
      </form>
    </div>
  </body>
</html>
