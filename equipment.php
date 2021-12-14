<!DOCTYPE html>
<html lang="ru">

<head>
    <?php
    $title = "Медикаменты";
    $url = "equipment";
    $theme = "sky";
    $header = "light atop";
    $logo = "light";
    include_once("./template/_head.php");
    ?>
</head>

<body>
    <?php
    include_once("./template/_header.php");
    ?>
    <main>
        <?php
        include_once("./pages/$url/_page-top.php");
        include_once("./pages/$url/_company-info.php");
        include_once("./pages/$url/_quote.php");
        include_once("./pages/$url/_content-product.php");
        include_once("./pages/$url/_goods.php");
        include_once("./pages/$url/_product-info.php");
        include_once("./pages/$url/_partners.php");
        include_once("./pages/$url/_dealer.php");
        include_once("./pages/$url/_principles.php");
        include_once("./pages/$url/_team.php");
        include_once("./pages/$url/_contacts.php");
        ?>
    </main>
    <?php
    include_once("./template/_footer.php");
    ?>
</body>

</html>
