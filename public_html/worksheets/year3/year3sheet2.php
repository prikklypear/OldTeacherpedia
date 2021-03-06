<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Sheet 2</title>
        <link rel="stylesheet" href="../css/worksheet.css" />
        
    </head>
    <body>
        <?php
    
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
?>        
        <div id="fixedWidth">
        <h1>Exercise 2</h1>
        <h3>Start Up</h3><img src="images/run.gif" />
            
        <div class="sections" id="startup">
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
            ?>
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
            <?php
            $questionb1a = rand(1,9);
            $questionb1b = rand(1,9);
            $questionb1c = rand(1,9);
            $questionb1d = rand(1,9);
            $questionb1e = rand(1,9);

            while (($questionb1b % 2) != 0) {
                $questionb1b = rand(1,9);
            }
            while (($questionb1d % 2) != 0) {
                $questionb1d = rand(1,9);
            }
            while (($questionb1a % 2) == 0) {
                $questionb1a = rand(1,9);
            }
            while (($questionb1c % 2) == 0) {
                $questionb1c = rand(1,9);
            }
            while (($questionb1e % 2) == 0) {
                $questionb1e = rand(1,9);
            }

            $questionb2a = rand(1,9) * 10;

            $questionb3a = rand (1,9) * 10;
            $questionb3b = rand (6,20);

            $questionb3mult = rand(2,5);
            $questionb3a = rand(20, 70);
            $questionb3b = $questionb3a + $questionb3mult;
            $questionb3c = $questionb3a + ($questionb3mult * 2);
            $questionb3d = $questionb3a + ($questionb3mult * 3);
            $questionb3e = $questionb3a + ($questionb3mult * 4);
            $questionb3f = $questionb3a + ($questionb3mult * 5);
            $questionb3g = $questionb3a + ($questionb3mult * 6);
            $questionb3h = $questionb3a + ($questionb3mult * 7);
            ?>
            <ol>
                <li title="question 1"><?php 
                    echo("Multiply the even numbers: " . $questionb1a . "," . $questionb1b . "," . $questionb1c . "," . $questionb1d . "," . $questionb1e);    
                    ?>
                </li>
                <li title="question 2"><?php 
                    echo("How many must be taken from 100 to leave " . $questionb2a . "?");    
                    ?>
                </li>
                <li title="question 3"><?php 
                    echo("What number is " . $questionb3b . " more than " . $questionb3a . "?");    
                    ?>
                </li>
                <li title="question 4"><?php 
                    echo("Write in the missing number: " . $questionb3a . " > " . $questionb3b . " > " . $questionb3c . " > " . $questionb3d . " > " . "____" . " > " . $questionb3f . " > " . $questionb3g);    
                    ?>
                </li>
            </ol>
        </div>
        
        <h3>Tough Challenge</h3><img src="images/lift.jpeg" />
        <div class="sections" id="toughChallenge">
            <?php
            $questionc1a = rand(2,4) * 4;

            $questionc2a = rand(1,3);
            $questionc2b = 60 * $questionc2a;

            $questionc3a = rand(100, 150);

            $questionc4a = rand(2,4);
            ?>

            <ol>
                <li title="question 1"><?php 
                    echo("Josh has " . $questionc1a . " football stickers. He sticks one quarter in his book. How many stickers has he stuck in?");   
                    ?>
                </li>
                <li title="question 2"><?php 
                    echo("How many seconds in " . $questionc2a . " minutes?")   
                    ?>
                </li>
                <li title="question 3"><?php 
                    echo("The weight of a kitten is 200 grams. A puppy weighs " . $questionc3a . " grams more. How much does the puppy weigh?");   
                    ?>
                </li>
                <li title="question 4"><?php 
                    echo("How many days in " . $questionc4a . " weeks?");   
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
                    echo($questionb1b * $questionb1d);    
                    ?>
                </li>
                <li title="question 2"><?php 
                    echo(100 - $questionb2a);    
                    ?>
                </li>
                <li title="question 3"><?php 
                    echo($questionb3b + $questionb3a);    
                    ?>
                </li>
                <li title="question 4"><?php
                    echo($questionb3e);
                        
                    ?>
                </li>
            </ol>
        </div>
        
        <h3>Tough Challenge</h3><img src="images/lift.jpeg" />
        <div class="sections" id="toughChallenge">
            <ol>
                <li title="question 1"><?php 
                    echo($questionc1a / 4);   
                    ?>
                </li>
                <li title="question 2"><?php 
                    echo($questionc2b)   
                    ?>
                </li>
                <li title="question 3"><?php 
                    echo($questionc3a + 200);   
                    ?>
                </li>
                <li title="question 4"><?php 
                    echo($questionc4a * 7)   
                    ?>
                </li>
                
            </ol>
        </div>
        <div class="footer"> M Pearson 2016 </div>
        </div>
    </body>
</html>

