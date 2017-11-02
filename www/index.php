<?php
$div_with_map = false;
if (isset($_GET['Submit'])) {
    $show_map = $_GET['choose_city'];
    $div_with_map = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Метрополитен стран Снг</title>
    <link rel="shortcut icon" href="images/metroicon.ico">
    <meta name="Метрополитен" content="метро, метрополитен, снг, поезд, проезд">
    <link href="main.css" rel="stylesheet">
</head>
<body>
<div class="wrapper">
    <header>
        <div class="train_icon left"></div>
        <div class="train_logo left"></div>
        <div id="header">
            <h2><br>Добро пожаловать на сайт!<br>
                Мы рады каждому из вас</h2>
            <img id="paper" src="images/paper.png">
        </div>
        <div class="train_logo right"></div>
        <div class="train_icon right"></div>
    </header>
    <div id="content">
            <div class="about">Карта метро города <?php print ($_GET['choose_city']) ?></div>

        <div class="maincontent">

            <div id="menu">
                <p id="vopros">Выберете город из списка и нажмите <b> "Показать карту метро"</b></p>

                <form method="get" action="">
                    <select name="choose_city">
                        <?
                        if (isset($_GET['choose_city'])) {
                            ?>
                            <option selected><? print($_GET['choose_city']); ?></option>
                            <?
                        }
                        ?>
                        <option>Харьков</option>
                        <option>Киев</option>
                        <option>Днепр</option>
                        <option>Москва</option>
                        <option>Санкт-Петербург</option>
                        <option>Екатеринбург</option>
                        <option>Казань</option>
                        <option>Минск</option>
                        <option>Тбилиси</option>
                        <option>Баку</option>
                        <option>Ташкент</option>
                        <option>Ереван</option>
                        <option>Алматы</option>
                    </select>
                    <button type="submit" name="Submit" id="button"><img src="images/favicon.ico">Показать карту метро
                    </button>
                    </p>
                </form>
            </div>
            <?php
            if ($div_with_map == true) {
                ?>
                <div class="showmaps">
                    <img src="metroimg/<?php echo "$show_map" ?>.jpeg" width="640" height="480">
                </div>
                <?
            }
            ?>
        </div>
    </div>
</div>

<div class="footer"> Это пробная, но все же историчесская ***** )</div>

</body>
</html>