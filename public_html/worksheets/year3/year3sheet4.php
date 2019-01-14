<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Sheet 4</title>
        <link rel="stylesheet" href="../css/worksheet.css" />
        
    </head>
    <body>       
        <div id="fixedWidth">
        <h1>Exercise 4</h1>
        <h3>Start Up</h3><img src="images/run.gif" />
            
        <div class="sections" id="startup">
            <?php
            include "calcs.php";
            
            // a1a = startup, question 1, 1st required number. 
            $a1a = hto_minus_o();
            $a1qtn = $a1a["qtn"];
            $a1answr = $a1a["answr"];

            $a2a = numberXTen();
            $a2b = rand(100, 900);
            $a2qtn = $a2a . " + " . $a2b;
            $a2answr = $a2a + $a2b;

            $a3a = rand(100, 900);
            $a3b = numberXTen();
            $a3qtn = $a3a . " - " . $a3b;
            $a3answr = $a3a - $a3b;

            $a4a = rand(500, 900);
            $a4b = rand(100, 500);
            $a4qtn = $a4a . " - " . $a4b;
            $a4answr = $a4a - $a4b;

            $a5a = rand(100, 900);
            $a5b = rand(1,9);
            $a5qtn = $a5a . " + " . $a5b;
            $a5answr = $a5a + $a5b;

            $a6a = rand(100, 900);
            $a6b = 100;
            $a6qtn = $a6a . " - " . $a6b;
            $a6answr = $a6a - $a6b;

            $a7a = rand(100, 900);
            $a7b = rand(1,9);
            $a7qtn = $a7a . " - " . $a7b;
            $a7answr = $a7a - $a7b;

            $a8a = rand(500, 900);
            $a8b = rand(1,4) * 100;
            $a8qtn = $a8a . " - " . $a8b;
            $a8answr = $a8a - $a8b;

            $a9a = rand(100, 1000);
            $a9b = rand(1,9);
            $a9qtn = $a9a . " + " . $a9b;
            $a9answr = $a9a + $a9b;
            
            $a10a = rand(500, 900);
            $a10b = rand(1,4) * 100;
            $a10qtn = $a10a . " - " . $a10b;
            $a10answr = $a10a - $a10b;

            $a11a = rand(10,90) * 10;
            $a11b = rand(1, 9) * 10;
            $a11qtn = $a11a . " + " . $a11b;
            $a11answr = $a11a + $a11b;

            $a12a = rand(200, 900);
            $a12b = 25;
            $a12qtn = $a12a . " - " . $a12b;
            $a12answr = $a12a - $a12b;
            
            
            
            
            
            
            
            
            
            
            // ---------------------- Section 2 ------------------
            
            // Question 1
            $b1asltr = rand(1, 9);
            $b1bsltr = rand(1, 9);
            $b1csltr = rand(1, 9);
            $b1a = numbers_in_words($b1asltr);
            $b1b = numbers_in_words($b1bsltr);
            $b1c = numbers_in_words($b1csltr);
            
            $b1qtn = "Find the total of " . $b1a . ", " . $b1b . " and " . $b1c . ".";
            $b1answr = $b1asltr + $b1bsltr + $b1csltr;
             
            // Question 2
            $b2asltr = rand(5, 9);
            $b2bsltr = rand(5, 9);
            $b2a = numbers_in_words($b2asltr);
            $b2b = numbers_in_words($b2bsltr);
            $b2qtn = ("By how many is " . $b2a .  " and " . $b2b . " more than 10?");
            $b2answr = ($b2asltr + $b2bsltr) - 10;
            
            
            // Question 3
            $b3a = rand(1,50);
            $b3b = rand(1, 9);
            $b3sltr = rand(1,7);
            $sequence = array();
            for($i = 0; $i < 8; $i++) {
                $sequence[$i] = $b3a + $b3b;
                $b3a += $b3b;
            }
            
            $sequence[$b3sltr] = "_?_";
            
            $qtn3String = "";
            
            foreach($sequence as $value) {
                $qtn3String = $qtn3String . $value . " - ";
            }
            $qtn3String = substr($qtn3String, 0, -2);
            
            $b3qtn = "What is the missing number?" . "<br />" . "<br />" . $qtn3String;
            
            $b3answr = $sequence[$b3sltr - 1] + $b3b;

            
            //Question 4
            $b4a = rand(1, 9);
            $b4b = rand(1, 9);
            $b4sltr = rand(0,2);
            $calc = array(
                $b4a + $b4b,
                $b4a * $b4b,
                $b4a - $b4b,
            );
            
            $b4qtn = "Write the missing calculation: " . $b4a . " ? " . $b4b . " = " . $calc[$b4sltr];
            $b4answr = "";
            switch ($b4sltr) {
                case 0:
                    $b4answr = "+";
                    break;
                case 1:
                    $b4answr = "x";
                    break;
                case 2:
                    $b4answr = "-";
                    break;
            }
            
            // question 5
            $b5asltr = rand(20, 40);
            $b5bsltr = rand(1, 9);
            $b5csltr = rand(1, 9);
            $b5a = numbers_in_words($b5asltr);
            $b5b = numbers_in_words($b5bsltr);
            $b5c = numbers_in_words($b5csltr);
            $b5qtn = "From " . $b5a . " take " . $b5b . " and " . $b5c . ".";
            $b5answr = $b5asltr - $b5bsltr - $b5csltr;
            
            
            
            
            
            
                                
            //----------------------------section 3 -----------------
            
            //Question 1
            $c1a = rand(20, 30);
            $c1b = rand(1,9);
            $c1c = rand(1,9);
            $name = girls_name();
            $c1qtn = girls_name() . " has £" . $c1a . ". She spends £" . $c1b . " and then £" .  $c1c . ". How much has she left?";
            $c1total = $c1a - $c1b - $c1c;
            $c1answr = "£" . $c1total;
            
            //Question 2
            
            $c2a = rand(5, 20);
            $c2b = rand(1, 9);
            $c2c = rand(0, 11);
            $amonth = month();
            
            $c2qtn = "It is the " . $c2a . "th of " . $amonth . ". What will be the date in " . $c2b . " days time?";
            
            $c2answr = $c2a + $c2b . "th of " . $amonth . ".";
            
            
            //Question 3
            $c3a = array( 
                rand(100, 200) . "ml",
                rand(100, 200) . "ml",
                rand(100, 200) . "ml",
                rand(100, 200) . "ml",
                rand(100, 200) . "ml",
                rand(100, 200) . "ml"
            );
            $c3aString = "";
            $c3High = 0;
            $c3Low = 200;
            foreach($c3a as $value) {
                $c3aString = $c3aString . $value . " - ";
                if($value > $c3High) {
                    $c3High = $value;
                }
                if($value < $c3Low) {
                    $c3Low = $value;
                }
            }
            $c3qtn = "Add the lowest measurement to the highest measurement of liquid." . "</br>" . "</br>" . substr($c3aString, 0, -2);
            $c3answr = $c3High + $c3Low . "ml";
            
            //question 4
            $c4a = rand(10, 20) * 4;
            $c4qtn = "Find a quarter of " . $c4a;
            $c4answr = $c4a / 4;
            
            ?>
            <ol id="section1">
                <li title="Question 1">
                    <?php 
                        echo($a1qtn); 
                    ?>
                </li>
                <li title="Question 2">
                    <?php 
                        echo($a2qtn); 
                    ?>
                </li>
                <li title="Question 3">
                    <?php 
                        echo($a3qtn); 
                    ?>
                </li>
                <li title="Question 4">
                    <?php 
                        echo($a4qtn); 
                    ?>
                </li>
                <li title="Question 5">
                    <?php 
                        echo($a5qtn); 
                    ?>
                </li>
                <li title="Question 6">
                    <?php 
                        echo($a6qtn); 
                    ?>
                </li>
                <li title="Question 7">
                    <?php 
                        echo($a7qtn); 
                    ?>
                </li>
                <li title="Question 8">
                    <?php 
                        echo($a8qtn); 
                    ?>
                </li>
                <li title="Question 9">
                    <?php 
                        echo($a9qtn); 
                    ?>
                </li>
                <li title="Question 10">
                    <?php 
                        echo($a10qtn); 
                    ?>
                </li>
                <li title="Question 11">
                    <?php 
                        echo($a11qtn); 
                    ?>
                </li>
                <li title="Question 12">
                    <?php 
                        echo($a12qtn); 
                    ?>
                </li>
                
            </ol>
        </div>
        
            
            
            
            
            
            
            
        <h3>Into Gear</h3><img src="images/cycle.jpg" />
        <div class="sections" id=intoGear>
            
            <ol>
                <li title="question 1"><?php 
                    echo($b1qtn); 
                    ?>
                </li>
                <li title="question 2"><?php 
                    echo($b2qtn);    
                    ?>
                </li>
                <li title="question 3"><?php 
                    echo($b3qtn);    
                    ?>
                </li>
                <li title="question 4"><?php 
                    echo($b4qtn);    
                    ?>
                </li>
                <li title="question 4"><?php 
                    echo($b5qtn);    
                    ?>
                </li>
            </ol>
        </div>
        
            
            
        
        <h3>Tough Challenge</h3><img src="images/lift.jpeg" />
        <div class="sections" id="toughChallenge">
            <ol>
                <li title="question 1"><?php 
                    echo($c1qtn);   
                    ?>
                </li>
                <li title="question 2"><?php 
                    echo($c2qtn)   
                    ?>
                </li>
                <li title="question 3"><?php 
                    echo($c3qtn);   
                    ?>
                </li>
                <li title="question 4"><?php 
                    echo($c4qtn);   
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
                        echo($a1answr); 
                    ?>
                </li>
                <li title="Question 2">
                    <?php 
                        echo($a2answr); 
                    ?>
                </li>
                <li title="Question 3">
                    <?php 
                        echo($a3answr); 
                    ?>
                </li>
                <li title="Question 4">
                    <?php 
                        echo($a4answr); 
                    ?>
                </li>
                <li title="Question 5">
                    <?php 
                        echo($a5answr); 
                    ?>
                </li>
                <li title="Question 6">
                    <?php 
                        echo($a6answr); 
                    ?>
                </li>
                <li title="Question 7">
                    <?php 
                        echo($a7answr); 
                    ?>
                </li>
                <li title="Question 8">
                    <?php 
                        echo($a8answr); 
                    ?>
                </li>
                <li title="Question 9">
                    <?php 
                        echo($a9answr); 
                    ?>
                </li>
                <li title="Question 10">
                    <?php 
                        echo($a10answr); 
                    ?>
                </li>
                <li title="Question 11">
                    <?php 
                        echo($a11answr); 
                    ?>
                </li>
                <li title="Question 12">
                    <?php 
                        echo($a12answr); 
                    ?>
                </li>
            </ol>
        </div>
        
        <h3>Into Gear</h3><img src="images/cycle.jpg" />
        <div class="sections" id=intoGear>
            <ol>
                <li title="question 1"><?php 
                    echo($b1answr);    
                    ?>
                </li>
                <li title="question 2"><?php 
                    echo($b2answr);    
                    ?>
                </li>
                <li title="question 3"><?php 
                    echo($b3answr);    
                    ?>
                </li>
                <li title="question 4"><?php
                    echo($b4answr);
                        
                    ?>
                </li>
                <li title="question 4"><?php
                    echo($b5answr);
                        
                    ?>
                </li>
            </ol>
        </div>
        
        <h3>Tough Challenge</h3><img src="images/lift.jpeg" />
        <div class="sections" id="toughChallenge">
            <ol>
                <li title="question 1"><?php 
                    echo($c1answr);   
                    ?>
                </li>
                <li title="question 2"><?php 
                    echo($c2answr);
                    ?>
                </li>
                <li title="question 3"><?php 
                    echo($c3answr);   
                    ?>
                </li>
                <li title="question 4"><?php 
                    echo($c4answr);   
                    ?>
                </li>
                
            </ol>
        </div>
        <div class="footer"> M Pearson 2016 </div>
        </div>
    </body>
</html>

