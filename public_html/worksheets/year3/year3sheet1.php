<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Generator 1</title>
        <link rel="stylesheet" href="../css/worksheet.css" />
        
    </head>
    <body>
        <?php
    
    $questiona1a = rand(100, 200);
    $questiona1b = rand(1,9);
    
    $questiona2a = rand(1, 5) * 10;
    $questiona2b = rand(100,200);
                    
    $questiona3a = rand(500, 700);
    $questiona3b = rand(1,5) * 100;
                    
    $questiona4a = rand(500, 700);
    $questiona4b = rand(1,5) * 100;
                    
    $questiona5a = rand(200, 500);
    $questiona5b = rand(1,5) * 100;
                    
    $questiona6a = rand(100, 200);
    $questiona6b = rand(1,10);
                    
    $questiona7a = rand(100, 800);
    $questiona7b = rand(1,10);
                    
    $questiona8a = rand(100, 200);
    $questiona8b = rand(1,5) * 10;
        
    $questiona9a = rand(1, 5) * 10;
    $questiona9b = rand(100, 600);
                    
    $questiona10a = rand(100, 300);
    $questiona10b = rand(1, 9) * 100;
                    
    $questiona11a = rand(100, 300);
    $questiona11b = rand(1, 9);
                    
    $questiona12a = rand(100, 300);
    $questiona12b = rand(1, 9) * 10;

        
        
    $questionb2rand = rand(1,9);

    $questionb3rand1 = rand(1,9);
    $questionb3rand2 = rand(2,3);

    $questionb4rand1 = rand (5,50);
    $questionb4rand2 = rand (5,50);

    $questionb5rand1 = rand(1,9);
    $questionb5rand2 = rand(11,19);
    $questionb5rand3 = rand(3,9) * 10;

    $questionc1rand1 = rand(1,19);
    $questionc1rand2 = rand(1,19);
    $questionc1rand3 = rand(1,9);

    $questionc2rand1 = rand(1,9) * 10;

    $questionc3rand1 = rand(11,19);
    $questionc3rand2 = rand(1,9);

    $questionc4rand1 = rand(1,5) * 100;
    $questionc4rand2 = rand(100,500);


    $numbersInWords = array(
        "1" => "one",
        "2" => "two",
        "3" => "three",
        "4" => "four",
        "5" => "five",
        "6" => "six",
        "7" => "seven",
        "8" => "eight",
        "9" => "nine",
        "10" => "ten",
        "11" => "eleven",
        "12" => "twelve",
        "13" => "thirteen",
        "14" => "fourteen",
        "15" => "fifteen",
        "16" => "sixteen",
        "17" => "seventeen",
        "18" => "eighteen",
        "19" => "nineteen",
    );

    $tensInWords = array(
        "1" => "ten",
        "2" => "twenty",
        "3" => "thirty",
        "4" => "fourty",
        "5" => "fifty",
        "6" => "sixty",
        "7" => "seventy",
        "8" => "eighty",
        "9" => "ninety",
    );

    $question12 = array(
        "1" => rand(100, 300),
        "2" => rand(1, 9) * 10,
    );

    $questionb1 = array(
        "1" => rand(1,19),
        "2" => rand(1,19),
    );
    $questionb2 = array(
        "1" => $tensInWords[$questionb2rand],
    );
?>
        <h1>Exercise 1</h1>
        <h3>Start Up</h3><img src="images/run.gif" />
        
        <div id="fixedWidth">
        <div class="sections" id="startup">
            <ol id="section1">
                <li title="Question 1">
                    <?php 
                        echo($questiona1a . " + " . $questiona1b); 
                    ?>
                </li>
                <li title="Question 2">
                    <?php 
                        echo($questiona2a . " + " . $questiona2b); 
                    ?>
                </li>
                <li title="Question 3">
                    <?php 
                        echo($questiona3a . " - " . $questiona3b); 
                    ?>
                </li>
                <li title="Question 4">
                    <?php 
                        echo($questiona4a . " - " . $questiona4b); 
                    ?>
                </li>
                <li title="Question 5">
                    <?php 
                        echo($questiona5a . " + " . $questiona5b); 
                    ?>
                </li>
                <li title="Question 6">
                    <?php 
                        echo($questiona6a . " - " . $questiona6b); 
                    ?>
                </li>
                <li title="Question 7">
                    <?php 
                        echo($questiona7a . " + " . $questiona7b); 
                    ?>
                </li>
                <li title="Question 8">
                    <?php 
                        echo($questiona8a . " - " . $questiona8b); 
                    ?>
                </li>
                <li title="Question 9">
                    <?php 
                        echo($questiona9a . " + " . $questiona9b); 
                    ?>
                </li>
                <li title="Question 10">
                    <?php 
                        echo($questiona10a . " + " . $questiona10b); 
                    ?>
                </li>
                <li title="Question 11">
                    <?php 
                        echo($questiona11a . " - " . $questiona11b); 
                    ?>
                </li>
                <li title="Question 12">
                    <?php 
                        echo($questiona12a . " - " . $questiona12b); 
                    ?>
                </li>
                
            </ol>
        </div>
        
        <h3>Into Gear</h3><img src="images/cycle.jpg" />
        <div class="sections" id=intoGear>
            <ol>
                <li title="question 1"><?php 
                    echo("To " . $numbersInWords[$questionb1["1"]] . " add " . $numbersInWords[$questionb1["2"]]);    
                    ?>
                </li>
                <li title="question 2"><?php 
                    echo("How many tens in " . $questionb2["1"] . "?");    
                    ?>
                </li>
                <li title="question 3"><?php 
                    echo($questionb3rand1 . " groups of " . $numbersInWords[$questionb3rand2] . ". How many is that altogether?");    
                    ?>
                </li>
                <li title="question 4"><?php 
                    echo("Fill in the missing sign (< or >): " . $questionb4rand1 . " ? " . $questionb4rand2);    
                    ?>
                </li>
                <li><?php 
                    echo("Take " . $questionb5rand1 . " and " . $questionb5rand2 . " from " . $questionb5rand3);    
                    ?>
                </li>
            </ol>
        </div>
        
        <h3>Tough Challenge</h3><img src="images/lift.jpeg" />
        <div class="sections" id="toughChallenge">
            <ol>
                <li title="question 1"><?php 
                    echo("John has " . $numbersInWords[$questionc1rand1] . " pence. Judy has " . $numbersInWords[$questionc1rand2] . " pence and Susan has " . $questionc1rand3 . "p. What is the total amount?");   
                    ?>
                </li>
                <li title="question 2"><?php 
                    echo("Work out half of " . $questionc2rand1 . ".")   
                    ?>
                </li>
                <li title="question 3"><?php 
                    echo("The length of a line is " . $questionc3rand1 . "cm.  Find the length of a line that is " . $questionc3rand2 . "cm shorter.");   
                    ?>
                </li>
                <li title="question 4"><?php 
                    echo("Add " . $questionc4rand1 . " cars to " . $questionc4rand2 . " cars.")   
                    ?>
                </li>
                
            </ol>
        </div>
        
            
            
        <div class="footer" id="footer">M Pearson 2016</div>
        <div class="page-break"></div>
                    
        <h2>Answers</h2>
        <h3>Start Up</h3><img src="images/run.gif" />
        <div class="sections" id="startup">
            <ol id="section1">
                <li title="Question 1">
                    <?php 
                        echo($questiona1a + $questiona1b); 
                    ?>
                </li>
                <li title="Question 2">
                    <?php 
                        echo($questiona2a + $questiona2b); 
                    ?>
                </li>
                <li title="Question 3">
                    <?php 
                        echo($questiona3a - $questiona3b); 
                    ?>
                </li>
                <li title="Question 4">
                    <?php 
                        echo($questiona4a - $questiona4b); 
                    ?>
                </li>
                <li title="Question 5">
                    <?php 
                        echo($questiona5a + $questiona5b); 
                    ?>
                </li>
                <li title="Question 6">
                    <?php 
                        echo($questiona6a - $questiona6b); 
                    ?>
                </li>
                <li title="Question 7">
                    <?php 
                        echo($questiona7a + $questiona7b); 
                    ?>
                </li>
                <li title="Question 8">
                    <?php 
                        echo($questiona8a - $questiona8b); 
                    ?>
                </li>
                <li title="Question 9">
                    <?php 
                        echo($questiona9a + $questiona9b); 
                    ?>
                </li>
                <li title="Question 10">
                    <?php 
                        echo($questiona10a + $questiona10b); 
                    ?>
                </li>
                <li title="Question 11">
                    <?php 
                        echo($questiona11a - $questiona11b); 
                    ?>
                </li>
                <li title="Question 12">
                    <?php 
                        echo($questiona12a - $questiona12b); 
                    ?>
                </li>
            </ol>
        </div>
        
        <h3>Into Gear</h3><img src="images/cycle.jpg" />
        <div class="sections" id=intoGear>
            <ol>
                <li title="question 1"><?php 
                    echo($questionb1["1"] + $questionb1["2"]);    
                    ?>
                </li>
                <li title="question 2"><?php 
                    echo($questionb2rand);    
                    ?>
                </li>
                <li title="question 3"><?php 
                    echo($questionb3rand1 * $questionb3rand2);    
                    ?>
                </li>
                <li title="question 4"><?php
                    if ($questionb4rand1 > $questionb4rand2) {
                        echo(">");
                    } else {
                        echo("<");
                    }
                        
                    ?>
                </li>
                <li><?php 
                    echo($questionb5rand3 - ($questionb5rand1 + $questionb5rand2));    
                    ?>
                </li>
            </ol>
        </div>
        
        <h3>Tough Challenge</h3><img src="images/lift.jpeg" />
        <div class="sections" id="toughChallenge">
            <ol>
                <li title="question 1"><?php 
                    echo($questionc1rand1 + $questionc1rand2 + $questionc1rand3 . "p");   
                    ?>
                </li>
                <li title="question 2"><?php 
                    echo($questionc2rand1 / 2)   
                    ?>
                </li>
                <li title="question 3"><?php 
                    echo($questionc3rand1 - $questionc3rand2 . "cm");   
                    ?>
                </li>
                <li title="question 4"><?php 
                    echo($questionc4rand1 + $questionc4rand2)   
                    ?>
                </li>
                
            </ol>
        </div>
        <div class="footer"> M Pearson 2016 </div>
        </div>
    </body>
</html>

