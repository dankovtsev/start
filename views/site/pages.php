<link rel="stylesheet" href="/css/reyting_star.css">
<div class="container mt-4" style= "width: 324px;">
<?php

 /*foreach ($pages as $page) : ?>
    <div class="container">
        <h2><?= $page['title']?></h2>
        <p><?= $page['content']?></p>
        <p style="font-size:10px;color: gray">Опубликовано: <?= $page['pud_date']?></p>
    </div>
<?php endforeach;
*/
//require_once '/handler/site/check.php';
//var_dump($_COOKIE);
//print_r($_COOKIE);
//die;

if($_COOKIE['user'] ==''):    //проверка на зайцев
  header('Location: /');

elseif($_COOKIE['status'] =='user'): ?>
<form action="<?= get_url('site/pages')?>" method="POST">
  <div>
    <h3 style="margin-left: 11px;">Оценить работу </h3><br>
  </div>
  <input type="text" id="appr" style="max-width: 330; width: 280; margin-left: 10px;" name='num' placeholder="номер строки" required autofocus >
   <!-- <select name="menu" size="1">
    <option value="✰">✰</option>
    <option selected="selected" value="✰✰">✰✰</option>
    <option value="✰✰✰"> ✰✰✰ </option>
   </select>-->
      <div class="rating-area" style ="margin-left: 130px;
      position: relative;
      z-index: 2;
      bottom: 34px;
      width: 200px;">
  <input type="radio" id="star-3" name="rating" value="★★★">
  <label for="star-3" title="Оценка «3»"></label>
  <input type="radio" id="star-2" name="rating" value="★★">
  <label for="star-2" title="Оценка «2»"></label>
  <input type="radio" id="star-1" name="rating" value="★">
       <label for="star-1" title="Оценка «1»"></label>
     </div>
  <button class="btn btn-lg btn-primary btn-block"  type="submit" style="width: 319px;">добавить</button>
</form>
</div>

<!---------------------------------------------- Другой пользователь -------------------------------------------------->

    <?php  elseif($_COOKIE['status'] =='admin'):  ?>

    <div class="container-fluid">
  <form action="<?= get_url('site/pages')?>" method="POST">
  <!-- //один из вариантов

<input type="text" id='problem' class="form-control" name='problem' placeholder="введите текст с проблемой" required autofocus >
<input type="text" id='decision' class="form-control" name='decision' placeholder="введите текст с решением" required autofocus >-->

  <textarea class="form-control" placeholder="введите текст с проблемой" id="problem" name='problem' style="height: 100px"></textarea><hr>
  <textarea class="form-control" placeholder="введите текст c решением" id="decision" name='decision' style="height: 100px"></textarea><hr>
  <button class="btn btn-lg btn-primary btn-block"  type="submit">добавить</button>
  </form>
    </div>


    <?php  endif;?>