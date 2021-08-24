<h2>Форма обратной связи</h2>
<form action="<?= get_url('site/contact')?>" method="POST">
    <div class="form-group">
        <label for="email">Адрес электронной почты</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Введите email">
    </div>
    <div class="form-group">
        <label for="message">Сообщение</label>
        <textarea id="message" name="text" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Отправить</button>
</form>