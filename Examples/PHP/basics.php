<?php
    $content = "<h1> This is HTML content</h1>"
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP Basics</title>
    </head>
    <body>

        <?php
            echo "<h2>". $content * 1.4 . "</h2>";
            echo $content
        ?>
    </body>
</html>