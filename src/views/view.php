<?php
use Poo\Notas\models\Note;
if (count($_POST) > 0) {
    //actualizar nota
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $content = isset($_POST['content']) ? $_POST['content'] : '';
    $uuid = isset($_POST['id']) ? $_POST['id'] : '';
    
    $note= Note::get($uuid);
    $note->setTitle($title);
    $note->setContent($content);

    $note->update();

} else if (isset($_GET['id'])) {
   $note= Note::get($_GET['id']);
} else {
    header('location: http://localhost:8888/projectsphp/?view=home');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <link rel="stylesheet" href="src/views/resources/main.css">
</head>
<body>   
    <div class="container">
        <h1>View | Notes To Do</h1>
            <?php
                require 'resources/navbar.php'
            ?>
            <form action="?view=view&id=<?php echo $note->getUUID(); ?>" method="POST">
                <input type="text" name="title" placeholder="title" value="<?php echo $note->getTitle(); ?>">
                <input type="hidden" name="id" value="<?php echo $note->getUUID(); ?>">
                <textarea name="content" id="content" cols="30" rows="10"><?php echo $note->getContent(); ?></textarea>
                <input type="submit" value="Update Note">
            </form>
    </div>
</body>
</html>