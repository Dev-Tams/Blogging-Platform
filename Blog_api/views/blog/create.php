<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write a Blog Post</title>
</head>
<body>
    


<style>
    body{
        margin-top: 40px;
        margin-left: 30px;
    }
</style>
<form method="post" action="/posts">
<label for="create" bg-color:red;>Write something, write anything!</label>
    <textarea placeholder="write here!"
     style="display: block; color:black;" 
      name="header" id="create" 
      cols="300" rows="100">
      <?= $_POST['body'] ?? "" ?>
    </textarea>
    <?php if(isset($error['body'])):?>
        <small style="color:red;"> <?= $error['body']?></small> 
        <?php endif;?>
    <input style="display:block; margin-left:100px; margin-top:12px; background-color:blue; width:15%; height:45px;" type="submit" value="submit">
</form>
</body>
</html>

<?php
