<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>30. Geburtstagsfeier</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f8ff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            text-align: center;
            width: 300px;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        label {
            margin-left: -240px;
            text-align: left;
        }

        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
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
