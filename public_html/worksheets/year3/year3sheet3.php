<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Sheet 3</title>
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
        "20" => "twenty",
        "21" => "twentyone",
        "22" => "twentytwo",
        "23" => "twentythree",
        "24" => "twentyfour",
        "25" => "twentyfive",
        "26" => "twentysix",
        "27" => "twentyseven",
        "28" => "twentyeight",
        "29" => "twentynight",
        "30" => "thirty",
        "31" => "thirtyone",
        "32" => "thirtytwo",
        "33" => "thirtythree",
        "34" => "thirtyfour",
        "35" => "thirtyfive",
        "36" => "thirtysix",
        "37" => "thirtyseven",
        "38" => "thirtyeight",
        "39" => "thirtynine",
        "40" => "forty",
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
        <h1>Exercise 3</h1>
        <h3>Start Up</h3><img src="images/run.gif" />
            
        <div class="sections" id="startup">
            <?php
            
            // a1a = startup, question 1, 1st required number. 
            
            $a1a = rand(100, 200);
            $a1b = numberXten();
            $a1qtn = $a1b . " + " . $a1a;
            $a1answr = $a1b + $a1a;

            $a2a = rand(100, 900);
            $a2b = numberXTen();
            $a2qtn = $a2a . " - " . $a2b;
            $a2answr = $a2a - $a2b;

            $a3a = rand(100, 900);
            $a3b = numberXTen();
            $a3qtn = $a3a . " + " . $a3b;
            $a3answr = $a3a + $a3b;

            $a4a = rand(100, 900);
            $a4b = numberXten();
            $a4qtn = $a4a . " - " . $a4b;
            $a4answr = $a4a - $a4b;

            $a5a = rand(100, 900);
            $a5b = numberXHundred();
            $a5qtn = $a5a . " + " . $a5b;
            $a5answr = $a5a + $a5b;

            $a6a = rand(100, 900);
            $a6b = rand(1, 9);
            $a6qtn = $a6a . " - " . $a6b;
            $a6answr = $a6a - $a6b;

            $a7a = rand(100, 900);
            $a7b = numberXTen();
            $a7qtn = $a7a . " - " . $a7b;
            $a7answr = $a7a - $a7b;

            $a8a = rand(100, 900);
            $a8b = rand(1,9);
            $a8qtn = $a8a . " + " . $a8b;
            $a8answr = $a8a + $a8b;

            $a9a = rand(100, 1000);
            $a9b = numberXHundred();
            $a9qtn = $a9a . " + " . $a9b;
            $a9answr = $a9a + $a9b;
            
            $a10a = rand(200, 900);
            $a10b = numberXHundred();
            $a10qtn = $a10a . " - " . $a10b;
            $a10answr = $a10a - $a10b;

            $a11a = numberXTen();
            $a11b = rand(200, 1000);
            $a11qtn = $a11a . " + " . $a11b;
            $a11answr = $a11a + $a11b;

            $a12a = rand(200, 900);
            $a12b = rand(1,9);
            $a12qtn = $a12a . " - " . $a12b;
            $a12answr = $a12a - $a12b;
                                
            function numberXTen() {
                $a = rand(1, 9) * 10;
                return $a;
            }
            function numberXHundred() {
                $a = rand(1, 9) * 100;
                return $a;
            }
            ?>
            <!-- Print questions -->
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
            <?php
            
            // Question 1
            $b1a = rand(10, 100) * 2;
            $b1qtn = ("Make " . $b1a . " half the size.");
            $b1answr = $b1a / 2;
             
            // Question 2
            $sltr = rand(11, 19);
            $b2a = $numbersInWords[$sltr];
            $b2b = rand(10, 40);
            $b2qtn = ("Find the difference between " . $b2a .  " and " . $b2b);
            $b2answr = $b2b - $b2a;
            
            
            // Question 3
            $oddNumsArray1 = rand(11, 100);
            $oddNumsArray2 = rand(11, 100);
            $oddNumsArray3 = rand(11, 100);
            $oddNumsArray4 = rand(11, 100);
            $oddNumsArray5 = rand(11, 100);
            $oddNumsArray6 = rand(11, 100);
            $oddNumsArray7 = rand(11, 100);
                
            $b3a = array( 
                rand(11, 100),
                rand(11, 100),
                rand(11, 100),
                rand(11, 100),
                rand(11, 100),
                rand(11, 100),
                rand(11, 100),
            );
            $odd = false;
            $nums = "";
            $oddNums = "";
            foreach($b3a as $value) {
                $nums = $nums . $value . " - " ;
                if($value % 2 != 0) {
                    $oddNums = $oddNums . $value . " - ";
                    $odd = true;
                }
            }
            $oddNums = substr($oddNums, 0, -2);
            if($odd == false) {
                $b3answr = "Trick question. There were none.";
            } else {
                $b3answr = $oddNums;
            }
            $b3qtn = "Find the odd numbers: " . substr($nums, 0, -2);

            
            //Question 4
            $b4a = rand(5, 15) * 3;
            $b4answr = $b4a / 3;
            $b4qtn = "Find a third of " . $b4a;
            
            // question 5
            $b5a = numberXTen();
            $b5b = rand(21, 99) * 10;
            $b5qtn = "Take " . $b5a . " from " . $b5b;
            $b5answr = $b5b - $b5a;
            
            ?>
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
            <?php
            
            //Question 1
            $c1a = rand(2,9) * 10;
            $c1qtn = "How many ten pence coins make " . $c1a . "p?";
            $c1answr = $c1a / 10;
            
            //Question 2
            $c2a = array( 
                rand(11, 100) . "mm",
                rand(11, 100) . "mm",
                rand(11, 100) . "mm",
                rand(11, 100) . "mm",
                rand(11, 100) . "mm",
                rand(11, 100) . "mm",
            );
            $c2aString = "";
            $c2High = 0;
            $c2Low = 100;
            foreach($c2a as $value) {
                $c2aString = $c2aString . $value . " - ";
                if($value > $c2High) {
                    $c2High = $value;
                }
                if($value < $c2Low) {
                    $c2Low = $value;
                }
            }
            $c2qtn = "Add the biggest length of string to the shortest length of string." . "</br>" . "</br>" . substr($c2aString, 0, -2);
            $c2answr = $c2High - $c2Low;
            
            
            //Question 3
            $names = array( 
                "Susan",
                "Mary",
                "Hannah",
                "Janet",
                "Sasha",
                "Menique",
                "Sandra",
                "Phillipa",
            );
            $namesltr = rand(0,7);
            $name = $names[$namesltr];
            $age = rand(30, 90);
            $yearsltr = rand(10,19);
            $years = $numbersInWords[$yearsltr];
            $c3qtn = $name . " is " . $age . ". How old was she " . $years . " years ago?";
            $newAge = $age - $yearsltr;
            $c3answr = $name . " was " . $newAge;
            
            //question 4
            $c4a = rand(1, 4) * 10;
            $c4b = rand(5, 9) * 10;
            $fruits = array(
                "lemons",
                "apples",
                "pears",
                "oranges",
                "limes",
            );
            $fruit = $fruits[rand(0, 4)];
            $c4qtn = "Take " . $c4a . " " . $fruit . " from " . $c4b. " ". $fruit . ".";
            $c4answr = $c4b - $c4a;
            
            
            
            ?>

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

