
<?php

$questions = [];
$answersArray = [];
$result = "";

class timestables {
    function createQuestions() {
        $count = 0;
        $multsArray = [];
        foreach($_GET as $key => $value) {
            array_push($multsArray, (int)$key);
        }
        global $questions;
        global $answersArray;
        while($count < 100) {
            $selectmult = rand(0, sizeof($multsArray) - 1);
            $a = rand(1,12);
            $a2 = $a;
            $b = $multsArray[$selectmult];
            $b2 = $b;
            $c = $a * $b;
            $c2 = $c;
            $answer = "$a x $b = $c";
            $selectMissing = rand(0,2);
            switch($selectMissing) {
                case 0:
                    $a = "__";
                    $a2 = "<span style='color: blue'>" . $a2 . "</span>";
                    break;
                case 1:
                    $b = "__";
                    $b2 = "<span style='color: blue'>" . $b2 . "</span>";
                    break;
                case 2:
                    $c = "__";
                    $c2 = "<span style='color: blue'>" . $c2 . "</span>";
                    break;
            }
            $shiftquestion = rand(0,1);
            if($shiftquestion === 1) {
                $question = $count +1 . ") " . $a . " x " . $b ." = " .$c;
                $answer = $count +1 . ") " . $a2 . " x " . $b2 . " = " . $c2;
            } else {
                $question = $count +1 . ") " . $b . " x " . $a . " = " . $c;
                $answer = $count +1 . ") " . $b2 . " x " . $a2 . " = " . $c2;
            }

            array_push($questions, $question);
            array_push($answersArray, $answer);
            $count++;
        }

    }

    function createTable($items) {
        global $questions;
        $result = "<table>";
        for($i = 0; $i < sizeof($items); $i) {
            $result = $result . "<tr>";
            $counter = 0;

            while($counter < 5) {
                $result = $result . "<td>" . "<p>" . $items[$i] . "</p>" . "</td>";
                $counter++;
                $i++;
            }
            $result = $result . "</tr>";
        }   
        
        $result = $result . "</table>";    
        return $result;      
    } 
}

//create array of questions
$timestable = new timestables();

$timestable->createQuestions();






?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <link rel="stylesheet" href="../css/worksheet.css">
        <style type="text/css">
body {
  background: rgb(204,204,204); 
  font-family: arial;
}
page {
    background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
}
page[size="A4"] {  
  width: 21cm;
  height: 29.7cm; 
}

.innerPage {
    padding: 10px;
}

h1 {
    text-align: center;
    margin-top: 50px;
}

ul li {
    list-style: none;
}

@media print {
  body, page {
    margin: 0;
    box-shadow: 0;
  }
}

  #logo {
    float-left; 
    margin-left:600px; 
    position: absolute; 
    margin: none;
    max-width: 150px;
  }

#mathsboy {
    width: 100px;
    position: relative;
    left: 600px;
    bottom: 20;
    border: 3px solid #73AD21;
}
            table, th, td {
                border: black 2px solid;
                border-collapse: collapse;
                border-radius: 25px;
            }
            
            table {
                width: 90%;
                margin: auto;
                margin-bottom: 10px;

            }
            
            table, tr {
                height: 56px;
            }
            
            h2 {
                text-align: center;
            }
            
            h1 {
                font-size: 30pt;
                padding: 15px 0 10px 0;
            }
            
            p {
                text-align: left;
                margin: 0;
                padding: 0;
                margin-left: 10px;
                font-size: 16pt;
            }
            
            #leftclock {
                position:absolute;
                left: 100px;
                top: 10;
                padding: 0;
                margin: 0;
                width: 100px;
            }
            
            #rightclock {
                position: absolute;
                left: 800px;
                top: 1px;
                padding: 0;
                margin: 0;
                width: 115px;
                width: 115px;
            }
            
            #top td {
                width: 1%;
               
            }

            img {
                width: 50px;
            }

        </style>
            

        
    </head>
    <body>
        <page size="a4">
            <div id="innerPage"></div>            
                <div id="fixedWidth">
                    <div class="sections" id="questions">
                        <img id="leftclock" src="images/evil-alarm-clock-18436257.jpg" />
                        <h1>Times Table Challenge!</h1>
                        <img id="rightclock" src="images/evil-alarm-clock-18436241.jpg" />    
                        <table id="top">
                            <tr>
                                <td><p>Name: </p></td>
                                <td><p>Previous score:</p></td>
                            </tr>
                            <tr>
                                <td><p>Date: </p></td>
                                <td><p>Score:</p></td>
                            </tr>
                        </table>
                        <br />
                    </div>

            <div class="sections">
            <? echo $timestable->createTable($questions); ?>
            </div>
            <div class="footer" id="footer">M Pearson 2016</div>
            
            <div class="page-break"></div>
            
            <div class="sections" id="answers">
                <h1>Times Table Challenge!</h1>
                <h2>What was your time?</h2>
            </div>

            <div class="sections">
            <? echo $timestable->createTable($answersArray); ?>
            </div>
            
   
    </body>
    
    
</html>
        
        
        
                