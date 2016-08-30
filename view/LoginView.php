<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form name="Loginform" method="post" action="/login/authorize">
        <p><label for="username">Имя пользователя <br>
            <input name="username" type="text">
        </label></p>

        <p><label for="password">Пароль<br>
            <input name="password" type="password">
        </label></p>

        <p><input type="submit" value="Вход"></p>
    </form>
    <p><a href="/">На главную</a></p>
</body>
</html>