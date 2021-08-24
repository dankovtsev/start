<?php



//Выставление оценки

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $num = get_param('num');
    $app = get_param('rating');


    if ($num && $app) {
        $query = db()->prepare("UPDATE `test table` SET `appraisal` = '$app' WHERE `test table`.`id` = $num");
        $query->execute(array($num, $app));

        $query->execute();

    }
   // redirect('site/index');
}


//return render_view('site/pages', [
//    'pages' => $pages
//]);

// добавление проблемы и решения

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $probl = get_param('problem');
    $dec = get_param('decision');


    if ($probl && $dec) {
        $query = db()->prepare("INSERT INTO `test table` (`problem`, `decision`, `appraisal`, `id`) VALUES ('$probl', '$dec', NULL, NULL);");
        $query->execute(array($probl, $dec));

        $query->execute();

    }
    redirect('site/index');
}


return render_view('site/pages', [
    'pages' => $pages
 ]);