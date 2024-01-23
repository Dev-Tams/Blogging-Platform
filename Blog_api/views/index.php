<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    
</head>
<?php 

?>
<body>
    <h1> Welcome to Your Native Blog</h1>

    <?php if ($_SESSION['user']?? false):?>
    <!-- Basic syntaxing and conditional statement -->
    <p><?= $_SESSION['email'] ?> Welcome to your Native Blog</p>
        <?php else: ?>
            <a href="/register">Register</a>
            <?php endif; ?>



 





    <div class="embed">
    <blockquote class="twitter-tweet"><p lang="en" dir="ltr">The bergofsky principle in social context; Never stop trying!</p>&mdash; Tami ✨ (@tammyalemu) <a href="https://twitter.com/tammyalemu/status/1673695000536797190?ref_src=twsrc%5Etfw">June 27, 2023</a></blockquote> 
    
    </div>
<br>
<?php

?>
</body>
<!-- <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> -->
</html>
