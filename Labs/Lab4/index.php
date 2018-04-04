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
            if($_SERVER['REQUEST_METHOD'] == 'GET')
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
                    
                    $stmt = $dbConn->prepare($sql);
                    $stmt->execute();
                    
                    var_dump($host);
                    
                    echo "<table class = 'info'>
                            <thead>
                                <tr>
                                    <th> Device Name</th>
                                    <th> Device Type</th>
                                    <th> Device Price</th>
                                    <th> Device Availability</th>
                                </tr>
                            </thead></table>";
                         
                    while($result = $stmt->fetch())
                    {
                        echo"<tr><td>" . 
                            $result['deviceName'] . 
                            "<tr><td>" . 
                            $result['deviceType'] .
                            "<tr><td>" .
                            $result['price'] .
                            "<tr><td>" .
                            $result['status'] .
                            "</td><td></tr>";
                    }
                }
                if(isset($_GET['sortbyprice']))
                {
                    displaybyPrice();
                }
            }
        ?>
            <!--$dName = '';-->
            <!--if('POST'===$_SERVER['REQUEST_METHOD'])-->
            <!--{-->
            <!--    $dName = $_POST['dName'];-->
            <!--    //displaybyName();-->
            <!--}-->
            <!--if(isset($_GET['dType']))-->
            <!--{-->
            <!--    displaybyType();-->
            <!--}-->
            <!--if(isset($_GET['dAvailability']))-->
            <!--{-->
            <!--    displaybyAvailability();-->
            <!--}-->
            <!--if(isset($_GET['sortbyname']))-->
            <!--{-->
            <!--    displaybyName();-->
            <!--}-->
            <!--if(isset($_GET['sortbyprice']))-->
            <!--{-->
            <!--    displaybyPrice();-->
            <!--}-->
        
    </body> 
</html>
<?php
    function displaybyName()
    {
        $host = "localhost";
        $dbname = "tech";
        $username = getenv('C9_USER');
        $password = "p4ssw0rd";
        
        $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        
        // Raise error if something is wrong with the connection
        $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT
                d.`name` AS  'deviceName',
                dt.`name` AS  'deviceType',
                s.`name` AS 'status'
        FROM `device` AS d";
        
        if (!empty($dName)) {
            $sql = $sql."
                WHERE d.`name` LIKE CONCAT('%', :dName, '%')
                OR dt.`name` LIKE CONCAT('%', :dName, '%')
                OR s.`name` LIKE CONCAT('%', :dName, '%')
                ";
        }
        $stmt = $dbConn->prepare($sql);
        $stmt->execute(array(':dName' => $dName));
        if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch()) {
                echo '<tr>';

                echo '  <th scope="row">'.$row['deviceName'].'</th>';

                //   <td>Mark</td>
                echo '  <td>'.$row['deviceType'].'</td>';

                //   <td>Otto</td>
                echo '  <td>'.$row['price'].'</td>';

                //   <td>@mdo</td>
                echo '  <td>'.$row['status'].'</td>';

                // </tr>
                echo '</tr>';
            }
        } else {
            echo '<tr><td colspan="5">No Device Found</td></tr>';
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