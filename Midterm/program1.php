<!DOCTYPE html>
<html>
    <head>
        <title>Midterm: Aces vs. Kings</title>
        <link rel="stylesheet" href="css/styles.css" type="text/css" />
    </head>
    <body align="center">
        <h1> Aces vs Kings</h1>
        <form action="program1.php" method="POST">
     	    Number of Rows: <input type="text" name="rows" value="5"><br><br>
     	    Number of Columns: <input type="text" name="cols" value="5"><br><br>
     	    Suit to omit: 
     	        <select name="omitSuit">
     		          <option value="1">Hearts</option>
     		          <option value="2">Clubs</option>
     		          <option value="3">Diamonds</option>
     		          <option value="4">Spades</option>
     		     </select>

     	    <input type="submit" value="Display!" name="submitForm">
        </form>
        <?php
            showCards();
            if(isset($_POST['submit']))
            {
                
            }
            
            echo "Total Points:"
        ?>
        
        
                                <table border="1" width="600">
                                    <tbody><tr>
                                        <th>#</th>
                                        <th>Task Description</th>
                                        <th>Points</th>
                                    </tr>
                                    <tr style="background-color:#99E999">
                                        <td>1</td>
                                        <td>The page includes the basic form elements as in the Program Sample: Text boxes, Dropdown menu, submit button</td>
                                        <td width="20" align="center">5</td>
                                    </tr>
                                    <tr style="background-color:#FFC0C0">
                                        <td>2</td>
                                        <td>When submitting the form, an error message is displayed if the product of columns and rows exceeds 39</td>
                                        <td width="20" align="center">5</td>
                                    </tr>
                                    <tr style="background-color:#FFC0C0">
                                        <td>3</td>
                                        <td>When submitting the form, a table is created with random playing cards</td>
                                        <td align="center">5</td>
                                    </tr>
                                    <tr style="background-color:#FFC0C0">
                                        <td>4</td>
                                        <td>The size of the table corresponds to the one selected by the user </td>
                                        <td align="center">10</td>
                                    </tr>
                                    <tr style="background-color:#FFC0C0">
                                        <td>5</td>
                                        <td>The cards are NOT duplicated </td>
                                        <td align="center">10</td>
                                    </tr>
                                    <tr style="background-color:#FFC0C0">
                                        <td>6</td>
                                        <td>No cards of the suit selected by the user are displayed in the game </td>
                                        <td align="center">10</td>
                                    </tr>
                                    <tr style="background-color:#FFC0C0">
                                        <td>7</td>
                                        <td>The Aces have a yellow background</td>
                                        <td align="center">5</td>
                                    </tr>
                                    <tr style="background-color:#FFC0C0">
                                        <td>8</td>
                                        <td>The Kings have a cyan background</td>
                                        <td align="center">5</td>
                                    </tr>
                                    <tr style="background-color:#FFC0C0">
                                        <td>9</td>
                                        <td>The total number of Aces and Kings are displayed</td>
                                        <td align="center">5</td>
                                    </tr>
                                    <tr style="background-color:#FFC0C0">
                                        <td>10</td>
                                        <td>A message indicates who won, Aces or Kings, (or neither) </td>
                                        <td align="center">5</td>
                                    </tr>
                                    <tr style="background-color:#99E999">
                                        <td>11</td>
                                        <td>At least five CSS rules are included</td>
                                        <td align="center">5</td>
                                    </tr>
                                    <tr style="background-color:#99E999">
                                        <td>12</td>
                                        <td>This rubric is properly included AND UPDATED (BONUS)</td>
                                        <td width="20" align="center">2</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>T O T A L </td>
                                        <td width="20" align="center"><b>12</b></td>
                                    </tr>
                                </tbody></table>
                            
    </body>
</html>

<?php
    function showCards()
    {
        $GLOBALS['cards'] = array(
            'heart1' =>'cards/hearts/1.png',
            'heart2' =>'cards/hearts/2.png',
            'heart3' =>'cards/hearts/3.png',
            'heart4' =>'cards/hearts/4.png',
            'heart5' =>'cards/hearts/5.png',
            'heart6' =>'cards/hearts/6.png',
            'heart7' =>'cards/hearts/7.png',
            'heart8' =>'cards/hearts/8.png',
            'heart9' =>'cards/hearts/9.png',
            'heart10' =>'cards/hearts/10.png',
            'heart11' =>'cards/hearts/11.png',
            'heart12' =>'cards/hearts/12.png',
            'heart13' =>'cards/hearts/13.png',
            'clubs1' =>'cards/clubs/1.png',
            'clubs2' =>'cards/clubs/2.png',
            'clubs3' =>'cards/clubs/3.png',
            'clubs4' =>'cards/clubs/4.png',
            'clubs5' =>'cards/clubs/5.png',
            'clubs6' =>'cards/clubs/6.png',
            'clubs7' =>'cards/clubs/7.png',
            'clubs8' =>'cards/clubs/8.png',
            'clubs9' =>'cards/clubs/9.png',
            'clubs10' =>'cards/clubs/10.png',
            'clubs11' =>'cards/clubs/11.png',
            'clubs12' =>'cards/clubs/12.png',
            'clubs13' =>'cards/clubs/13.png',
            'spades1' =>'cards/spades/1.png',
            'spades2' =>'cards/spades/2.png',
            'spades3' =>'cards/spades/3.png',
            'spades4' =>'cards/spades/4.png',
            'spades5' =>'cards/spades/5.png',
            'spades6' =>'cards/spades/6.png',
            'spades7' =>'cards/spades/7.png',
            'spades8' =>'cards/spades/8.png',
            'spades9' =>'cards/spades/9.png',
            'spades10' =>'cards/spades/10.png',
            'spades11' =>'cards/spades/11.png',
            'spades12' =>'cards/spades/12.png',
            'spades13' =>'cards/spades/13.png',
            'diamonds1' =>'cards/diamonds/1.png',
            'diamonds2' =>'cards/diamonds/2.png',
            'diamonds3' =>'cards/diamonds/3.png',
            'diamonds4' =>'cards/diamonds/4.png',
            'diamonds5' =>'cards/diamonds/5.png',
            'diamonds6' =>'cards/diamonds/6.png',
            'diamonds7' =>'cards/diamonds/7.png',
            'diamonds8' =>'cards/diamonds/8.png',
            'diamonds9' =>'cards/diamonds/9.png',
            'diamonds10' =>'cards/diamonds/10.png',
            'diamonds11' =>'cards/diamonds/11.png',
            'diamonds12' =>'cards/diamonds/12.png',
            'diamonds13' =>'cards/diamonds/13.png',);
            
    }
    function suitDrop(){
        global $suitArray;
        foreach($suitArray as $suit)
        {
            
        }
    }
    
?>