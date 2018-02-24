<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            Eat Fresh
        </title>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
    </head>
    <body>
        <div class="container">
            <div class="content">
                <h1>Eat Fresh (Sandwiches)</h1>
                <form action="confirmation.php" method="POST">
                    <div>
                        <label>Enter your name: </label>
                        <input type="text" name="name"/>
                    </div>
                    <p>
                        What type of bread would you like
                        <select name = "bread" class = "bread" required>
                            <option selected disabled hidden value = ''></option>
                            <option value = "Grain Wheat Bread">Grain Wheat</option>
                            <option value = "White Bread">White Bread</option>
                            <option value = "Italian Bread">Italian Bread</option>
                            <option value = "Multigrain Bread">Multigrain Bread</option>
                            
                        </select>
                    </p>
                    <p>
                        What kind of meat would you like?
                    </p>
                    <div class="radios">
                        <input type="radio" name="meat" value="Chicken">Chicken<br>
                        <input type="radio" name="meat" value="Turkey">Turkey<br>
                        <input type="radio" name="meat" value="Ham">Ham<br>
                        <input type="radio" name="meat" value="Tuna">Tuna<br>
                    </div>
                    <p>What kind of vegetables would you like?</p>
                    <div class = "radios">
                        <input type="checkbox" name="veggies[]" value="Lettuce">Lettuce<br>
                        <input type="checkbox" name="veggies[]" value="Tomatoes">Tomatoes<br>
                        <input type="checkbox" name="veggies[]" value="Cuccumbers">Cuccumbers<br>
                        <input type="checkbox" name="veggies[]" value="Olives">Olives<br>
                        <input type="checkbox" name="veggies[]" value="Peppers">Peppers<br>
                        <input type="checkbox" name="veggies[]" value="Spinach">Spinach<br>
                        <input type="checkbox" name="veggies[]" value="Avacado">Avacado<br>
                    </div>
                    <p>What kind of cheese would you like?</p>
                    <div class="radios">
                        <input type="radio" name="cheese" value="American Cheese">American<br>
                        <input type="radio" name="cheese" value="Mozzarella Cheese">Mozzarella<br>
                        <input type="radio" name="cheese" value="Pepper Jack Cheese">Pepper Jack<br>
                        <input type="radio" name="cheese" value="Cheddar Cheese">Cheddar<br>
                        <input type="radio" name="cheese" value="Swiss Cheese">Swiss<br>
                    </div>
                    <p>What kind of sauce would you like?</p>
                    <div class="radios">
                        <input type="checkbox" name="sauce[]" value="Mayonnaise Sauce">Mayonnaise<br>
                        <input type="checkbox" name="sauce[]" value="Ranch Sauce">Ranch<br>
                        <input type="checkbox" name="sauce[]" value="BBQ Sauce">BBQ<br>
                        <input type="checkbox" name="sauce[]" value="Mustard Sauce">Mustard<br>
                    </div>
                    <p>Would you like your sandwich toasted?
                        <select name"toasted" required>
                            <option selected disabled hidden value = ''></option>
                            <option value="Yes">Yeas</option>
                            <option value="No">No</option>
                        </select>
                    </p>
                    <div class = "submission">
                        <input class = "submit" type="image" src="http://blog.wiser.com/wp-content/uploads/2014/08/BuyNow.png" border="0" width="175" height = "50" alt="Submit" />
                    </div>
                    
                </form>
            </div>
        </div>
    </body>
</html>