<?php
setcookie('user', $user['mail'], time() - 3600, "/"); // убираем куки 120 секунд
header('Location:/');
?>