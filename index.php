<?php 
require 'db_conn.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>To do PHP</title>
</head>
<body>
        <div class="main-section">
            <div class="add-section">
                <form action="">
                    <input type="text" name="title" placeholder="this fied is required" required>
                    <button type="submit">Add &nbsp; <span>&#43;</span></button>

                </form>
            </div>
            
            <?php
                $todos = $conn->query("SELECT * FROM todos ORDER BY id DESC");
            ?>

            <div class="show-todo-section">
                <?php if($todos->rowCount() === 0) { ?>
                    <div class="todo-item">
                        <input type="checkbox">
                        <h2>This is Mark Dev</h2>
                        <br>
                        <small>created in 2024</small>
                    </div>
                <?php } ?>
                
                <?php while($todo = $todos->fetch(PDO::FETCH_ASSOC)) {?>
                    <div class="todo-item">

                        <span id="<?= $todo['id'];?>" 
                        class="remove-to-do">x</span>

                        <?php if($todo['cheked']) {  ?>

                            <input type="checkbox" class="check-box" checked/>
                            <h2 class="checked"><?= $todo['title']?></h2>
                           

                        <?php } else{?>

                            <input type="checkbox" class="check-box" />
                            <h2 class=""><?= $todo['title']?></h2>
                           
                        <?php } ?>
                        <br>
                        <small>created: <?= $todo['date_time']?></small>
                            
                    </div>
                  
                <?php }?>
            </div>
        </div>
</body>
</html>

<!-- php -S localhost:8000 -->

<!-- min 17:13 -->