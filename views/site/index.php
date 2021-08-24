<div class="jumbotron">
    <div class="container">
             <?php if($_COOKIE['user'] ==''):    //проверка на зайцев ?>

        <h4> Для использования полного функционала, необходимо авторизоваться <hr>
            После авторизации будут доступны функции редактирования<h4>

            <?php else: ?>

        <h1 class="display-3">Добро пожаловать! <?php echo $_COOKIE['user'] ?></h1>

            <?php endif;?>
        <!--
        <p><a class="btn btn-primary btn-lg" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQeQZCKVl_kHraLcmXvruZmGLRmbo1b2PKv301jOOO1TxPFuKwYPpSaScbF9i-H5TKqmMk&usqp=CAU" role="button" target="_blank">не нажимать &raquo;</a></p> -->
    </div>
</div>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <?php
        $rowsCount = $pages->num_rows;
        echo "<p style='margin-top: 50px; text-align: center'>Получено объектов: $rowsCount</p>";

    echo "<table class= 'table table-hover'>
        <tr class='table-light'>
            <th style ='width: 60px;'>№</th>
            <th>Проблема</th>
            <th>Решение</th>
            <th>Оценка</th>
        </tr>";
         foreach ($pages as $page) {

            echo "<tr>";
            echo "<td>" . $page["id"] . "</td>";
            echo "<td>" . $page["problem"] . "</td>";
            echo "<td>" . $page["decision"] . "</td>";
            echo "<td style= 'color: gold; text-shadow: 2px 2px goldenrod; font-size: 25px;'>" . $page["appraisal"] . "</td>";
            echo "</tr>";
    }
             echo "</table>";

        ?>
    </div>

    <hr>

</div> <!-- /container -->
