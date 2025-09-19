<?php

$configs = require_once __DIR__ . '/../config/config.php';
/*
if(!isset($_SESSION['temp_value'])){
    $_SESSION['temp_value'] = rand(100000, 999999);
}
var_dump($_SESSION['temp_value']);*/

?>
<div class="form_container">
    <form class="submit_blog" action="<?=$configs['site']['base_url']?>function/handle_data_send.php" method="post">
        <div>spinner</div>
        <div  class="title">Write Your Blog</div>
        <?php
        require_once __DIR__ . '/../function/flash.php';
        showAllFlashMessage();
        //flash('');
        ?>
        <input name="writer_name" type="text" placeholder="Enter Writer Name">
        <input name="title" type="text" placeholder="Enter Title">
        <textarea name="blog" placeholder="Write your blog" rows="10"></textarea>
        <button class="submit_blog">Submit</button>
    </form>
    <script>
        document.querySelector('.submit_blog').addEventListener('submit', async function(e){
            try {
                //show spinner

                const formData = new FormData(e.currentTarget);
                const response = await fetch('.....', {
                    method: 'POST',
                    body: formData
                })
                if (!response.ok) {
                    //throw new Error('Something went wrong');
                }
                const responseData = await response.json();
                if (responseData.success) {
                    //...
                } else {
                    //...
                }
            }finally{
                //hide spinner
            }
        });
    </script>
</div>