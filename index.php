<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max wird 30</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Inter:400,500,600,700&amp;display=swap'><link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="login-box">
        <h2>Max wird 30 - let's go!</h2>
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

        <button class="button" type="submit">
    <div class="icon">
        <div class="cannon"></div>
        <div class="confetti">
            <svg viewBox="0 0 18 16">
                <polyline points="1 10 4 7 4 5 6 1" />
                <path d="M4,13 C5.33333333,9 7,7 9,7 C11,7 12.3340042,6 13.0020125,4" />
                <path d="M6,15 C7.83362334,13.6666667 9.83362334,12.6666667 12,12 C14.1663767,11.3333333 15.8330433,9.66666667 17,7" />
            </svg>
            <i></i><i></i><i></i><i></i><i></i><i></i>
            <div class="emitter"></div>
        </div>
    </div>
    <span>Bestätigen</span>
</button>

    </form>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/Physics2DPlugin3.min.js'></script>
<script  src="birthday\script.js"></script>
</body>
</html>