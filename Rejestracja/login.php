<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <img src="1.jpg" width="500" height="500" style="float:left;margin-left: 10px;">
    <img src="2.jpg" width="500" height="500" style="float:right;margin-right: 10px;">
    <style>
        body{
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            max-width: 200vh;
            background: rgb(63,94,251);
            background: radial-gradient(circle, rgba(63,94,251,1) 0%, rgba(252,70,107,1) 100%);
        }
        .logowanie {
            margin: auto;
            width: 200px;
            border: 1px solid powderblue;
            border-radius: 5px;
            box-shadow: 1px 1px 5\ px black;
            background-color: white;
            padding: 20px;
        }
        
    </style>

    <div class="logowanie">

        <h1>Rejestracja</h1>
        <form action="" method="GET">
            Login: <input type="login" name="login" id="username" placeholder="Login" required>
            Hasło: <input type="password" name="pwd" id="password" placeholder="Hasło" required>
            PowtórzHasło: <input type="password" name="pwd" id="2password" placeholder="PowtórzHasło" required>
            Email: <input type="email" name="email" id="email" placeholder="E-mail" required><p></p>
            Akceptuje regulamin<input type="checkbox" /></p>
            <input type="button" value="Zaloguj" />
        </form>
    </div>
    <img src="3.jpg" width="500" height="500" style="margin: auto;">
    <video width="320" height="240" controls>
        <source src="Arabic meme.mp4" type="video/mp4">
    
</body>

</html>