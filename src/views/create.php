<?php
use Poo\Notas\models\Note;

if (count($_POST) > 0) {
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $content = isset($_POST['content']) ? $_POST['content'] : '';
    
    $note = new Note($title, $content);
    $note->save();

    header('location: http://localhost:8888/projectsphp/?view=home');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new note</title>
    <link rel="stylesheet" href="src/views/resources/main.css">
</head>
<body>
    <div class="container">
        <h1>Create note | Notes To Do</h1>
        <?php
            require 'resources/navbar.php'
        ?>
        <form action="?view=create" method="POST">
            <input type="text" name="title" placeholder="">
            <textarea name="content" id="content" cols="30" rows="10"></textarea>
            <input type="submit" value="Create Note">
        </form>
    </div>
</body>
</html>