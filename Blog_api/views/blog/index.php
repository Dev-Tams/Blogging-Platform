<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Notes</title>
</head>
<body>


    <h1> Welcome to your Blog</h1>

    
       
    <p>
        <ul>
        <?php foreach($posts as $post) :?>
        <li><a href="/post?id=<?= $post['id']?>">
        <!-- escaping special characters in input type -->
            <?=htmlspecialchars($post['header'])?>
        </li></a>
        <?php endforeach;?>
        </ul>
    </p>

       <p style="display: block; margin: 40px;"><a href="/blog/create">Create a Post</a></p>
</body>
</html>