<?php
use Poo\Notas\models\Note;

    $notes = Note::getAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="src/views/resources/main.css">
</head>
<body>
<div class="container">
    <h1>Home | Notes To Do</h1>
    <?php
        require 'resources/navbar.php'
    ?>
    <div class="notes-container">
        <?php
            foreach ($notes as $note) {
        ?>
                <a href="?view=view&id=<?php echo $note->getUUID(); ?>">
                    <div class="note-preview">
                        <div class="title">
                            <?php
                                echo $note->getTitle();
                            ?>
                        </div>
                    </div>
                </a>
        <?php
            }
        ?>
    </div>
</div>
</body>
</html>