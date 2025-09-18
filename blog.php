<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/index.css">
</head>

<body>
    <?php
    include("./components/nav_bar.php");
    include __DIR__ . "/./function/get_data.php";
    $id = $_GET["id"];
    $title = $_GET["title"];
    $blog = get_data("blogs", $id);
    foreach ($blog as $blog_content) {
        ?>
        <div class="container">
            <div class="blog_title"><?php echo $blog_content['blog_title'] ?></div>
            <div class="blog_desc"><?php echo $blog_content['blog_desc'] ?></div>
            <div class="blog_writer"><?php echo $blog_content['blog_writer'] ?></div>
        </div>
        <?php
    }
    ?>
    <?php
    include("./components/footer.php");
    ?>
</body>

</html>