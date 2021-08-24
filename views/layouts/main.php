<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="<?= get_url('/') ?>">fullstack практикум</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?= get_url('/') ?>">Главная<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= get_url('site/pages') ?>">Редактировать</a>
            </li>
              <!--li class="nav-item">
                  <a class="nav-link" href="<?= get_url('site/contact') ?>">Обратная связь</a>
              </li> -->
              <li class="nav-item">
               <?php if($_COOKIE['user'] ==''):    //проверка на зайцев ?>

                  <a class="nav-link" href="/views/site/check.php">Войти</a>
                  <?php else: ?>
                  <a class="nav-link" href="/website.php">Выход</a>
                  <?php endif;?>
              </li>
          </ul>
        </div>
      </nav>
    </header>

    <div class="container-fluid">
        <?= $content ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>