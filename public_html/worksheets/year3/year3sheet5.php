<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Sheet 5</title>
        <link rel="stylesheet" href="../css/worksheet.css" />
        
    </head>
    <body>       
        <div id="fixedWidth">
        <h1>Exercise 5</h1>
        <h3>Start Up</h3><img src="images/run.gif" />
            
        <div class="sections" id="startup">
            <?php
            include "year3_calcs.php";
            
            // a1a = startup, question 1, 1st required number. 
            // Fully automatic for full year 3 curriculum.
            // Or select from calcs.php
            $a1a = select_question();
            $a2a = select_question();
            $a3a = select_question();
            $a4a = select_question();
            $a5a = select_question();
            $a6a = select_question();
            $a7a = select_question();
            $a8a = select_question();
            $a9a = select_question();
            $a10a = select_question();
            $a11a = select_question();
            $a12a = select_question();
            

            // ---------------------- Section 2 ------------------
            
            // Question 1
            $b1a = even_number_to();
            $b1b = even_number_o();
            while($b1a % $b1b != 0) {
                $b1a = even_number_to();
                $b1b = even_number_o();
            }
            $b1c = rand(1, 9);
            
            $b1qtn = "Divide " . $b1a . " by " . $b1b . " then add " . $b1c . ".";
            $b1answr = ($b1a / $b1b) + $b1c;
             
            // Question 2
            $b2b = rand(2,50);
            
            
            $b2qtn = "What number is 10 times more than " . $b2b;
            $b2answr = $b2b * 10;
            
            // Question 3
            $sltra = rand(2, 9);
            $sltrb = rand(2, 9);
            $sltrc = rand(0, 5);
            $b3a = numbers_in_words($sltra);
            $b3b = numbers_in_words($sltrb);
            $b3c = numbers_in_words($sltrc);
            
            $b3qtn = "Multiply " . $b3a . " by " . $b3b . " and then subtract " . $b3c . " from your answer.";
            
            $b3answr = ($sltra * $sltrb) - $sltrc;

            
            //Question 4
            $b4a = rand(10, 500);
            $b4b = rand(10, 500);
            while($b4a - $b4b > 50 || $b4a + $b4b > 50) {
                $b4a = rand(10, 500);
                $b4b = rand(10, 500);
            }
            
            
            $b4qtn = "Is " . $b4a . " >, < or = to " . $b4b . " ?";
            $smbl = "";
            if($b4a > $b4b) {
                $smbl = " > ";
            } elseif($b4a < $b4b) {
                $smbl = " < ";
            } else {
                $smbl = " = ";
            };
            $b4answr = $smbl;
            
            // question 5
            $b5asltr = rand(0,39);
            $b5bsltr = rand(0,39);
            $b5csltr = rand(0,39);
            $b5a = numbers_in_words($b5asltr);
            $b5b = numbers_in_words($b5bsltr);
            $b5c = numbers_in_words($b5csltr);
            $b5qtn = "Add together " . $b5a . ", " . $b5b . " and " . $b5c . ".";
            $b5answr = $b5asltr + $b5bsltr + $b5csltr;
            
            
            
            
            
            
                                
            //----------------------------section 3 -----------------
            
            //Question 1
            $c1a = 2;
            $c1b = rand(50,100);
            $c1c = rand(50,100);
            $c1qtn = $c1a . " poles are " . $c1b . "m and " . $c1c . "m high. What is their total height?";
            $c1answr = $c1b + $c1c . "m";
            
            //Question 2
            $c2asltr = rand(2,6);
            $c2bsltr = rand(1,5);

            $c2a = fractions_in_words($c2asltr);
            $c2b = $c2bsltr;

            
            $c2qtn = "One " . $c2a . " of a pizza is " . $c2bsltr . " slices. How many pieces are in the whole pizza?";
            
            $c2answr = $c2asltr * $c2bsltr . " slices";
            
            
            //Question 3
            $name = boys_name();
            $c3a = rand(3, 9);
            $c3b = rand(3, 9);
            $c3c = rand(3, 9);
            
            
            
            $c3qtn = $name . " gave " . $c3a . " sweets to " . $c3b . " friends. He had " . $c3c . " left over. How many sweets he have to start with?";
            $c3answr = ($c3a * $c3b) + $c3c;
            
            //question 4
            $c4a = rand(1,9);
            $c4b = rand(1,9);
            $c4qtn = "How many hours from " . $c4a . "am to " . $c4b . "pm?";
            $c4answr = (12 - $c4a) + $c4b;
            
            ?>
            <ol id="section1">
                <li title="Question 1">
                    <?php 
                        echo($a1a["qtn"]); 
                    ?>
                </li>
                <li title="Question 2">
                    <?php 
                        echo($a2a["qtn"]); 
                    ?>
                </li>
                <li title="Question 3">
                    <?php 
                        echo($a3a["qtn"]); 
                    ?>
                </li>
                <li title="Question 4">
                    <?php 
                        echo($a4a["qtn"]); 
                    ?>
                </li>
                <li title="Question 5">
                    <?php 
                        echo($a5a["qtn"]); 
                    ?>
                </li>
                <li title="Question 6">
                    <?php 
                        echo($a6a["qtn"]); 
                    ?>
                </li>
                <li title="Question 7">
                    <?php 
                        echo($a7a["qtn"]); 
                    ?>
                </li>
                <li title="Question 8">
                    <?php 
                        echo($a8a["qtn"]); 
                    ?>
                </li>
                <li title="Question 9">
                    <?php 
                        echo($a9a["qtn"]); 
                    ?>
                </li>
                <li title="Question 10">
                    <?php 
                        echo($a10a["qtn"]); 
                    ?>
                </li>
                <li title="Question 11">
                    <?php 
                        echo($a11a["qtn"]); 
                    ?>
                </li>
                <li title="Question 12">
                    <?php 
                        echo($a12a["qtn"]); 
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
                        echo($a1a["answr"]); 
                    ?>
                </li>
                <li title="Question 2">
                    <?php 
                        echo($a2a["answr"]); 
                    ?>
                </li>
                <li title="Question 3">
                    <?php 
                        echo($a3a["answr"]); 
                    ?>
                </li>
                <li title="Question 4">
                    <?php 
                        echo($a4a["answr"]); 
                    ?>
                </li>
                <li title="Question 5">
                    <?php 
                        echo($a5a["answr"]); 
                    ?>
                </li>
                <li title="Question 6">
                    <?php 
                        echo($a6a["answr"]); 
                    ?>
                </li>
                <li title="Question 7">
                    <?php 
                        echo($a7a["answr"]); 
                    ?>
                </li>
                <li title="Question 8">
                    <?php 
                        echo($a8a["answr"]); 
                    ?>
                </li>
                <li title="Question 9">
                    <?php 
                        echo($a9a["answr"]); 
                    ?>
                </li>
                <li title="Question 10">
                    <?php 
                        echo($a10a["answr"]); 
                    ?>
                </li>
                <li title="Question 11">
                    <?php 
                        echo($a11a["answr"]); 
                    ?>
                </li>
                <li title="Question 12">
                    <?php 
                        echo($a12a["answr"]); 
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

