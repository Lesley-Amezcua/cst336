<!DOCTYPE html>
<html>
    <head>
        <title>Tech Checkout</title>
        <link rel="stylesheet" href="css/styles.css" type="text/css" />
    </head>
    <body>
        <h1>Tech Checkout</h1>
        <form action="index.php" method="GET">
           <div id="formm"
           <h2>Filter Device By: </h2>
           <h3>Device Type:</h3>
           <select name="dType" multiple>
               <option value="Camera">Camera</option>
               <option value="CheatSheet">CheatSheet</option>
               <option value="Dynamic Mics">Dynamic Mics</option>
               <option value="Laptop">Laptop</option>
               <option value="Microphone">Microphone</option>
               <option value="Smartphone">Smartphone</option>
               <option value="Tablet">Tablet</option>
               <option value="Tripod">Tripod</option>
               <option value="VR Headset">VR Headset</option>
           </select>
           <h3>Device Name:</h3>
           <input type="text" name="dName"/>
           <h3>Availability:</h3>
           <select name="dAvailability" multiple>
               <option value="Available">Available</option>
               <option value="CheckedOut">CheckedOut</option>
           </select>
           <br></br>
           <input type="Submit" name="filterBy"/>
           <br></br>
           Sort By Name<input type = "submit" name = "sortbyname" value = "Enter"/><br/>
           Sort By Price<input type= "submit" name = "sortbyprice" value = "Enter"/><br/>
           </div>
        </form>

        <?php
            if($_SERVER['REQUEST_METHOD'] === 'GET')
            {
                if(isset($_GET['filterBy']))
                {
                    $host = "localhost";
                    $dbname = "tech";
                    $username = getenv('C9_USER');
                    $password = "p4ssw0rd";
                    
                    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                    
                    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    
                    if(isset($_GET['dbname']) && isset($_GET['dType']) && isset($_GET['dAvailability']))
                    {
                        $sql = "SELECT * from device where deviceName LIKE ". "'%".$_GET['dName'] . "%'" . " AND deviceType = '" . $_GET['dType'] . " ' AND status = '" . $_GET['dAvailability']. "';";
                    }
                    elseif (isset($_GET['dName'])) {
                        $sql = "SELECT * from device where deviceName LIKE " . "'%" . $_GET['dName'] . "%'" . ";";
                    }
                    
                    $stmt = $dbConn->prepare($sql);
                    $stmt->execute();
                     $val=0;
                    echo "<body>
                        <table class = 'info'>
                        <thead>
                            <tr>
                                <th> Device Name</th>
                                <th> Device Type</th>
                                <th> Device Price</th>
                                <th> Device Status</th>
                            </tr>
                        </thead>
                        </body>";
                         
                    while($result = $stmt->fetch())
                    {
                        
                        echo"<tr>
                            <td>
                            <div class=\"box\">
                                ". $result['deviceName'] ."
                            </div>
                            </td>
                            <td>". $result['deviceType'] ."</td>
    
                            <td>"."$". $result['price'] ."</td>
                            <td>". $result['status'] ."</td>
                        </tr>";
                        
                        
                    }
                }
                if(isset($_GET['sortbyname']))
                {
                    displaybyName();
                }
                if(isset($_GET['sortbyprice']))
                {
                    displaybyPrice();
                }
            }
        ?>
            
        
    </body> 
</html>
<?php
    function displaybyName()
    {
        
        
        echo "
            <body>
            <table class = 'info'>
            <thead>
                <tr>
                    <th> Device Name</th>
                    <th> Device Type</th>
                    <th> Device Status</th>
                </tr>
            </thead>
            </body>";
            $servername="localhost";
            $dbname = "tech";
            $username = getenv('C9_USER');
            $password = "p4ssw0rd";
            $dbConn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT deviceName, deviceType, status from device Order By device.deviceName ASC";
            $stmt = $dbConn->prepare($sql);
            $stmt->execute();
            $val=0;
            while($row=$stmt->fetch())
            {
                echo"<tr>
                            <td>
                            <div class=\"box\">
                                ". $row['deviceName'] ."
                            </div>
                            <td>". $row['deviceType'] ."</td>
                                
                            </td>
                            <td>". $row['status'] ."</td>
                        </tr>";
                    $val = $val +1;
            }
        
    }
    function displaybyPrice()
    {
        echo "
            <body>
            <table class = 'info'>
            <thead>
                <tr>
                    <th> Device Name</th>
                    <th> Device Price</th>
                </tr>
            </thead>
            </body>";
            $servername="localhost";
            $dbname = "tech";
            $username = getenv('C9_USER');
            $password = "p4ssw0rd";
            $dbConn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT deviceName, price from device Order By device.price ASC";
            $stmt = $dbConn->prepare($sql);
            $stmt->execute();
            $val=0;
            while($row=$stmt->fetch())
            {
                echo"<tr>
                            <td>
                            <div class=\"box\">
                                ". $row['deviceName'] ."
                            </div>
                            </td>
                            <td>"."$". $row['price'] ."</td>
                        </tr>";
                    $val = $val +1;
            }
    }
?>
