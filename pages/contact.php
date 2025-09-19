<div class="form_container">
    <form action="/my_blogs/function/handle_message_send.php" method="post">
        <div class="title">Lets get in touch!</div>
        <?php
        require_once __DIR__ ."/../function/flash.php";
        flash();
        ?>
        <input type="text" name="name" placeholder="Enter Your Name">
        <input type="text" name="email" placeholder="Enter Your Email">
        <textarea name="message" placeholder="Enter the message" rows="10"></textarea>
        <button class="submit_message">Submit</button>
    </form>
</div>