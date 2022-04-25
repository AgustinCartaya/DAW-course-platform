<div class="message__container <?php echo ($message['id']== $userId)? "message-sent":"message-received";?>">
    <span><?php echo $message['id'];?></span>
    <span><?php echo $message['user'];?></span>
    <div class="message-text">
        <?php echo $message['message'];?>
    </div>
</div>