<div class="home_container">
    <?php
    require_once __DIR__ . '/../function/get_data.php';
    $blogs = get_data('blogs');
    foreach ($blogs as $blog) {
        $url = $blog['blog_title'];
        $slug = str_replace('','_', $url);
        ?>
        <a href="blog.php?id=<?php echo $blog['id'] ?>&title=<?php echo $slug ?>" class="blog_card">
            <div class="blog_writer"><?php echo $blog['blog_writer'] ?></div>
            <div class="blog_title"> <?php echo $blog['blog_title'] ?></div>
            <div class="blog_summary"><?php echo $blog['blog_desc'] ?></div>
        </a>
        <?php
    }
    ?>
</div>