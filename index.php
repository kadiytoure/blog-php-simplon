<?php
$array = scandir('post');
// $post = array_filter($array, is_file);
$files = [];
foreach ($array as $file) {
    if (is_dir($file)) {
        continue;
    }

    $files[] = $file;
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My first blog</title>
</head>
<body>
    <h1>My first blog</h1>
    <nav><a href="create.html"/>New Post </a></nav>
    <p> Bienvenue dans mon blog</p>
    <?php foreach ($files as $file) { ?>
    <article>
        <h2><?php echo basename($file, '.txt'); ?></h2>
        <p><?php echo file_get_contents('post/' . $file); ?></p>
        <form action="delete-post.php" method="POST">
        <input type="hidden" name="filename" value="<?php echo $file; ?>">
        <input type="submit" value="delete">
        </form>
        </article>
        <?php } ?>
</body>
</html>