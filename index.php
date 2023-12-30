<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max wird 30</title>
    <style>
        body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

input[type="text"], input[type="email"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ddd;
    border-radius: 5px;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

label {
    font-weight: bold;
}
    </style>
</head>
<body>
    <div class="container">
        <h1>Teilnahmebestätigung</h1>
        <form action="submit.php" method="post">
            <label for="vorname">Vorname:</label>
            <input type="text" id="vorname" name="vorname" required><br>
            <label for="nachname">Nachname:</label>
            <input type="text" id="nachname" name="nachname" required><br>
            <label for="email">E-Mail-Adresse:</label>
            <input type="email" id="email" name="email" required><br>
            <input type="submit" value="Bestätigen">
        </form>
    </div>
</body>
</html>
