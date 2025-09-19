<div class="form_container">
    <form action="/my_blogs/function/handle_data_send.php" method="post">
        <div  class="title">Write Your Blog</div>
        <?php
        require_once __DIR__ . '/../function/flash.php';
        flash('');
        ?>
        <input name="writer_name" type="text" placeholder="Enter Writer Name">
        <input name="title" type="text" placeholder="Enter Title">
        <textarea name="blog" placeholder="Write your blog" rows="10"></textarea>
        <button class="submit_blog">Submit</button>
    </form>
</div>