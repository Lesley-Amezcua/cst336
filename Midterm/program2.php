<?php
    $servername = "localhost";
    $dbPort = 3306;
    $database = "midterm";
    $username = getenv('C9_USER');
    $password = "p4ssw0rd";
    $dbConn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo" <b>List of all female students</b><br></br>";
    $query = "SELECT firstName, lastName FROM m_students WHERE gender = 'F' ORDER BY lastName ASC";
    $stmt = $dbConn->prepare($query);
    $stmt->execute();
    echo " <table>
                <tr>
                    <td>firstName</td>
                    <td>lastName</td>
                </tr>";
    while($result = $stmt-> fetch())
    {
        echo "<tr><td>" .
                $result['firstName'] .
                "</td><td>" .
                $result['lastName'] . 
                "</td><td></tr>";       
    }
    echo"</table>";
    
    echo"<br></br> <b>List of students that have assignments with a grade lower than 50</b><br></br>";
    $query = "SELECT firstName, lastName, grade FROM m_students s JOIN m_gradebook g ON s.studentID = g.studentID WHERE grade < 50 ORDER BY grade ASC";
    $stmt = $dbConn->prepare($query);
    $stmt->execute();
    
    echo " <table>
                <tr>
                    <td>firstName</td>
                    <td>lastName</td>
                    <td>grade</td>
                </tr>";
    while($result = $stmt-> fetch())
    {
        echo "<tr><td>" .
                $result['firstName'] .
                "</td><td>" .
                $result['lastName'] . 
                "</td><td>" .
                 $result['grade'] . 
                "</td><td></tr>";       
    }
    echo"</table>";
    
    echo"<br></br> <b>List of assignments that have not been graded</b><br></br>";
    $query = "SELECT firstName, lastName, title, grade FROM m_students s JOIN m_gradebook g ON s.studentID = g.studentID JOIN m_assignments a ON g.assignmentID = a.assignmentID  ORDER BY lastName, title";
    //$query = "SELECT title, dueDate, grade FROM m_students s JOIN m_gradebook g ON s.studentID = g.studentID WHERE grade < 50 ORDER BY grade ASC";
    $stmt = $dbConn->prepare($query);
    $stmt->execute();
    
    echo " <table>
                <tr>
                    <td>firstName</td>
                    <td>lastName</td>
                    <td>title</td>
                    <td>grade</td>
                </tr>";
    while($result = $stmt-> fetch())
    {
        echo "<tr><td>" .
                $result['firstName'] .
                "</td><td>" .
                $result['lastName'] .
                "</td><td>" .
                $result['title'] .
                "</td><td>" .
                $result['grade'] .
                "</td><td></tr>";       
    }
    echo"</table>";
    
    
    
    echo"<br></br> <b>List of assignments that have not been graded</b><br></br>";
    $query = "SELECT title, dueDate FROM  m_assignments  a JOIN m_gradebook g on g.assignmentID = a.assignmentID  ORDER BY dueDate ASC";
    $stmt = $dbConn->prepare($query);
    $stmt->execute();
    
    echo " <table>
                <tr>
                    <td>title</td>
                    <td>dueDate</td>
                </tr>";
    while($result = $stmt-> fetch())
    {
        echo "<tr><td>" .
                $result['title'] .
                "</td><td>" .
                $result['dueDate'] .
                "</td><td></tr>";       
    }
    echo"</table>";
    
    
    
    echo"<br></br> <b>List of average grade per student (average of the three assignments)</b><br></br>";
    $query = "SELECT g.studentId, firstName, lastName, AVG(grade) as avg_grade FROM m_students s JOIN m_gradebook g ON s.studentId = g.studentId ORDER BY grade";
    $stmt = $dbConn->prepare($query);
    $stmt->execute();

    echo " <table>
                <tr>
                    <td>studentId</td>
                    <td>firstName</td>
                    <td>lastName</td>
                    <td>average</td>
                </tr>";
    while($result = $stmt-> fetch())
    {
        echo "<tr><td>" .
                $result['studentId'] .
                 "</td><td>" .
                $result['firstName'] .
                "</td><td>" .
                $result['lastName'] .
                "</td><td>" .
                $result['avg_grade'] .
                "</td><td></tr>";       
    }
    echo"</table>";
?>
<!DOCTYPE html>
<html>
  <head>
      <title>Midterm program 2</title>
        <link rel="stylesheet" href="css/styles.css" type="text/css" />

  </head>  
  <body>
      
                                <table border="1" width="600">
                                    <tbody><tr>
                                        <th>#</th>
                                        <th>Task Description</th>
                                        <th>Points</th>
                                    </tr>
                                    <tr style="background-color:#99E999">
                                        <td>1</td>
                                        <td>A report shows all female students ordered by last name, from A to Z</td>
                                        <td width="20" align="center">10</td>
                                    </tr>
                                    <tr style="background-color:#99E999">
                                        <td>2</td>
                                        <td>A report shows students that have assignments with a grade lower than 50, ordered by grade, in ascending order</td>
                                        <td width="20" align="center">15</td>
                                    </tr>
                                    <tr style="background-color:#FFC0C0">
                                        <td>3</td>
                                        <td>A report lists those assignments that have not been graded and their due date, ordered by due date, ascending</td>
                                        <td width="20" align="center">15</td>
                                    </tr>
                                    <tr style="background-color:#99E999">
                                        <td>4</td>
                                        <td>A report shows the Gradebook, which includes first name, last name, assignment title, and grade. It should be ordered by last name and assignment title </td>
                                        <td align="center">15</td>
                                    </tr>
                                    <tr style="background-color:#99E999">
                                        <td>5</td>
                                        <td>A report lists each student along with his/her average grade, ordered by average grade, from highest to lowest</td>
                                        <td width="20" align="center">15</td>
                                    </tr>
                                    <tr style="background-color:#99E999">
                                        <td>6</td>
                                        <td>This rubric is properly included AND UPDATED (BONUS)</td>
                                        <td width="20" align="center">2</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>T O T A L </td>
                                        
                                        <td width="20" align="center"><b>57</b></td>
                                    </tr>
                                </tbody></table>
                            
  </body>
</html>