   <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/signin.css">
    <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/input.css">
    <!-- Bootstrap core CSS -->

    <!-- Custom styles for this template -->
    <link href = "/css/signin.css" rel="stylesheet">
  </head>
          <body id="background">
            <div class="container mt-4" style= "width: 324px;">
<?php
      if($_COOKIE['user'] ==''):
    ?>
                           <!-- Отправка формы на проверку /check.php -->

      <form action="/handlers/site/check.php" method="POST">
        <h2 class="form-signin" style="margin-top: 200px; padding-left: 55px; ";>Авторизация</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" name='mail' placeholder="Электронная почта" required autofocus >
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name='pas' placeholder="пароль" required >
        <div class="checkbox">
          <!--<label>
          //  <input type="checkbox" value="remember-me"> Запомнить //галочка напомнить, когда нибудь сделается
          </label> -->
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Вход</button>
      </form>
      <?php else: ?>
          <p>Добро пожаловать <? echo $_COOKIE['user'] ?>. Перейдите <a href="Location: /">далее</a>. </p>
          <p>Что бы выйте нажмите <a href="/website.php">выход</a>. </p>

  <?php
;
endif;?>
    </div> <!-- /container -->
          </body>