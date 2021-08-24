<?php

$query = db()->prepare("SELECT * FROM `test table`");
$query->execute();

$pages = $query->fetchAll();

return render_view('site/index', [
    'pages' => $pages
]);