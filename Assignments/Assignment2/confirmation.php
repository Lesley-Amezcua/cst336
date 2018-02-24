<?php
    session_start();
    $name = $_REQUEST['name'];
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Confirmation</title>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
    </head>
    <body>
       <div class="container">
            <div class="content">
                <div class="center">
                    <h1><?php echo $name?> here is your recipt</h1>
                            <?php
                    echo "<div class=\"receipt\">";
                        $price = 0;
                        
                        if(empty($_POST['bread']))
                        {
                            $breadErr = "Bread is required!";
                            echo $breadErr;
                        }
                        else
                        {
                           echo $_POST["bread"] . "  \$1.50<br>";
                           $price += 1.50;
                        }
                        
                        if(!empty($_POST['cheese']))
                        {
                           echo $_POST["cheese"] . "  \$2.00<br>";
                           $price += 2;
                        }
                        
                        if(!empty($_POST['meat']))
                        {
                           echo $_POST["meat"] . "  \$2.00<br>";
                           $price += 2;
                        }
                        
                        if(!empty($_POST['veggies']))
                        {
                            foreach($_POST['veggies'] as $value)
                            {
                                echo $value . "  0.50&#162;<br>";
                                $price += 0.50;
                            }
                        }
                        
                        if(!empty($_POST['sauce']))
                        {
                            foreach($_POST['sauce'] as $value)
                            {
                                echo $value . "  0.50&#162;<br>";
                                $price += 0.50;
                            }
                        }
                        
                    echo "</div>";
                    
                    
                    echo "<hr>";
                    echo "<h3>Total: $" . number_format ( $price, 2 ) . "</h3>" ;
                    
                    
                echo "</div>";
                
            echo "</div>";
            
                ?>
        </div>
        
    </body>
</html>
