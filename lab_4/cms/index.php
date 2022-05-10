<!DOCTYPE html>
<html lang="uk">

<?php require "../cms/components/head.php"; ?>

<body>
    <?php
    $pages = scandir("pages");
    $page = trim(strip_tags($_GET["page"]));

    if (!$page) {
        $page = "landing";
    }
    elseif (!in_array($page, $pages)) {
        echo "<p>Сторінку не знайдено</p>";
    }

    require "../cms/pages/$page.php";
    require "../cms/components/footer.php";
    ?>
</body>
</html>