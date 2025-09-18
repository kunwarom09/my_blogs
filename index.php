<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blogs</title>
    <link rel="stylesheet" href="./css/index.css">
</head>

<body>
    <?php
    include("./components/nav_bar.php");
    ?>
    <div class="container">
        <?php
        $page = $_GET["pages"] ?? "home";
        include('./pages/' . $page . '.php');
        ?>
    </div>
    <?php
    include("./components/footer.php");
    ?>
</body>

</html>