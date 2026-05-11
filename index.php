<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <?php
    include "components/header.php";
?>
<main>
    <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 'homepage';
        $path = "pages/{$page}/{$page}.php";
        if (file_exists($path)) {
            include $path;
        } else {
            // include "pages/404.php";
        }
    ?>
</main>
<?php
include "components/footer.php";
?>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>

