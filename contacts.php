<!DOCTYPE html>
<html lang="ru">

<head>
    <?php
    $title = "Медикаменты";
    $url = "medications";
    $theme = "sky";
    $header = "dark";
    $logo = "dark";
    include_once("./template/_head.php");
    ?>
</head>

<body>
    <? include_once("./template/_header.php"); ?>
    <main>
        <?php
        include_once("./pages/$url/_contacts.php");
        ?>
    </main>
    <? include_once("./template/_footer.php"); ?>
</body>

</html>
