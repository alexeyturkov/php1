<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Регистрация</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="ajax.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />

    <script src="popup.js" type="text/javascript"></script>
    
    
</head>
<body>
<center>

<form method="post" id="ajax_form" action="" >
<input type="text" name="name" placeholder="Имя" /><br>
<input type="text" name="surname" placeholder="Фамилия" /><br>
<input type="password" name="psw" placeholder="Пароль" /><br>
<input type="password" name="rpsw" placeholder="Повторите пароль" /><br>
<input type="text" name="email" placeholder="Почта" /><br>
<button type="button" id="btn">Зарегистрироваться</button>
</form>
        
    </center>
    <div id="result_form">
        <a id="popupContactClose">x</a>
        <div id="qwerty"></div>
    </div>

    <div id="backgroundPopup"></div>

</body>
</html>