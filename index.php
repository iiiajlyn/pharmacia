<!DOCTYPE html>
<html lang="ru">

<head>
    <?php
    $title = "Главная страница";
    $url = "index";
    include_once("./template/_head.php");
    ?>
</head>

<body>
    <? include_once("./pages/$url/_header.php"); ?>
    <main>
        <? include_once("./pages/$url/_main.php"); ?>
    </main>
    <? include_once("./pages/$url/_footer.php"); ?>
</body>

</html>
