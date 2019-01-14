<?php

//Number in words
function numbers_in_words($number) {
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
    
    return $numbersInWords[$number];
}

//Tens in words
function tens_in_words($number) {
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
    return $tensInWords[$number];
}

function calcs_in_words() {
        $names = array( 
            "+" => "add",
            "-" => "subtract",
            "÷" => "divide",
            "x" => "times",
        );
        $random = rand(1, 8);
        return($names[$random]);
    }

function fractions_in_words($select) {
        $fractions = array( 
            2 => "half",
            3 => "third",
            4 => "quarter",
            5 => "fifth",
            6 => "sixth",
            7 => "seventh",
            8 => "eight",
            9 => "ninth",
        );
        return($fractions[$select]);
    }



function even_number_to() {
    $even_numbers = array();
    for($i = 0; $i < 100; $i++) {
        if($i % 2 == 0) {
            array_push($even_numbers, $i);
        }
    }
        $random = rand(0, 50);
        return($even_numbers[$random]);
    }

function even_number_o() {
    $even_numbers = array();
    for($i = 0; $i <= 10; $i++) {
        if($i % 2 == 0) {
            array_push($even_numbers, $i);
        }
    }
        $random = rand(1, 5);
        return($even_numbers[$random]);
    }


    
    function girls_name() {
        $names = array( 
            "Annette",
            "Susan",
            "Mary",
            "Hannah",
            "Janet",
            "Sasha",
            "Menique",
            "Sandra",
            "Phillipa",
        );
        $random = rand(1, 8);
        return($names[$random]);
    }

function boys_name() {
        $names = array( 
            "James",
            "Andrew",
            "Mark",
            "Ahmed",
            "Mohammad",
            "Steven",
            "Ashley",
            "Leo",
            "Theo",
        );
        $random = rand(1, 8);
        return($names[$random]);
    }
        
   function month() {

        $months = array(
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
            "August",
            "September",
            "October",
            "November",
            "December",
        );
        $random = rand(0, 11);
        return($months[$random]);
    }
        
function select_question() {
    $all_questions = array(
    "to_add_o",
    "hto_add_o",
    "thhto_add_o",
    "to_add_to",
    "hto_add_to",
    "thhto_add_to",
    "hto_add_hto",
    "thhto_add_hto",
    "to_minus_o",
    "hto_minus_o",
    "thhto_minus_o",
    "to_minus_to",
    "hto_minus_to",
    "thhto_minus_to",
    "hto_minus_hto",
    "thhto_minus_hto",
    "to_x_o",
    "hto_x_o",
    /*"thhto_x_o",*/
    "to_x_to",
    /*"hto_x_to",
    "thhto_x_to",
    "hto_x_hto",
    "thhto_x_hto",*/
);
    $array_length = count($all_questions);
    $x = $all_questions[rand(0, $array_length - 1)];
    return $x();
}
    
    
// --------------------- Addition -----------------------

//tens - ones
function to_add_o() {
    $a = rand(10, 90);
    $b = rand(1, 9);
    $qtn = $a . " + " . $b;
    $answr = $a + $b;
    $array = array(
        "qtn" => $qtn,
        "answr" => $answr, 
    );
    
    return($array);
}

//hundreds - ones
function hto_add_o() {
    $a = rand(100, 900);
    $b = rand(1, 9);
    $qtn = $a . " + " . $b;
    $answr = $a + $b;
    $array = array(
        "qtn" => $qtn,
        "answr" => $answr, 
    );
    
    return($array);
}

//thousands - ones
function thhto_add_o() {
    $a = rand(1000, 9000);
    $b = rand(1, 9);
    $qtn = $a . " + " . $b;
    $answr = $a + $b;
    $array = array(
        "qtn" => $qtn,
        "answr" => $answr, 
    );
    
    return($array);
}

//tens - tens
function to_add_to() {
    $a = rand(10, 90);
    $b = rand(10, 90);
    $qtn = $a . " + " . $b;
    $answr = $a + $b;
    $array = array(
        "qtn" => $qtn,
        "answr" => $answr, 
    );
    
    return($array);
}

//hundreds - tens
function hto_add_to() {
    $a = rand(100, 90);
    $b = rand(10, 90);
    $qtn = $a . " + " . $b;
    $answr = $a + $b;
    $array = array(
        "qtn" => $qtn,
        "answr" => $answr, 
    );
    
    return($array);
}


//thousands - tens
function thhto_add_to() {
    $a = rand(1000, 9000);
    $b = rand(10, 90);
    $qtn = $a . " + " . $b;
    $answr = $a + $b;
    $array = array(
        "qtn" => $qtn,
        "answr" => $answr, 
    );
    
    return($array);
}

//hundreds - hundreds
function hto_add_hto() {
    $a = rand(500, 900);
    $b = rand(100, 500);
    $qtn = $a . " + " . $b;
    $answr = $a + $b;
    $array = array(
        "qtn" => $qtn,
        "answr" => $answr, 
    );
    
    return($array);
}

//thousands - hundreds
function thhto_add_hto() {
    $a = rand(1000, 9000);
    $b = rand(100, 999);
    $qtn = $a . " + " . $b;
    $answr = $a + $b;
    $array = array(
        "qtn" => $qtn,
        "answr" => $answr, 
    );
    
    return($array);
}
// --------------------- Subtraction -----------------------

//tens - ones
function to_minus_o() {
    $a = rand(10, 90);
    $b = rand(1, 9);
    $qtn = $a . " - " . $b;
    $answr = $a - $b;
    $array = array(
        "qtn" => $qtn,
        "answr" => $answr, 
    );
    
    return($array);
}

//hundreds - ones
function hto_minus_o() {
    $a = rand(100, 900);
    $b = rand(1, 9);
    $qtn = $a . " - " . $b;
    $answr = $a - $b;
    $array = array(
        "qtn" => $qtn,
        "answr" => $answr, 
    );
    
    return($array);
}

//thousands - ones
function thhto_minus_o() {
    $a = rand(1000, 9000);
    $b = rand(1, 9);
    $qtn = $a . " - " . $b;
    $answr = $a - $b;
    $array = array(
        "qtn" => $qtn,
        "answr" => $answr, 
    );
    
    return($array);
}

//tens - tens
function to_minus_to() {
    $a = rand(10, 90);
    $b = rand(10, 90);
    $qtn = $a . " - " . $b;
    $answr = $a - $b;
    $array = array(
        "qtn" => $qtn,
        "answr" => $answr, 
    );
    
    return($array);
}

//hundreds - tens
function hto_minus_to() {
    $a = rand(100, 90);
    $b = rand(10, 90);
    $qtn = $a . " - " . $b;
    $answr = $a - $b;
    $array = array(
        "qtn" => $qtn,
        "answr" => $answr, 
    );
    
    return($array);
}


//thousands - tens
function thhto_minus_to() {
    $a = rand(1000, 9000);
    $b = rand(10, 90);
    $qtn = $a . " - " . $b;
    $answr = $a - $b;
    $array = array(
        "qtn" => $qtn,
        "answr" => $answr, 
    );
    
    return($array);
}

//hundreds - hundreds
function hto_minus_hto() {
    $a = rand(500, 900);
    $b = rand(100, 500);
    $qtn = $a . " - " . $b;
    $answr = $a - $b;
    $array = array(
        "qtn" => $qtn,
        "answr" => $answr, 
    );
    
    return($array);
}

//thousands - hundreds
function thhto_minus_hto() {
    $a = rand(1000, 9000);
    $b = rand(100, 999);
    $qtn = $a . " - " . $b;
    $answr = $a - $b;
    $array = array(
        "qtn" => $qtn,
        "answr" => $answr, 
    );
    
    return($array);
}

// --------------------- Multiplication -----------------------

//to x o
function to_x_o() {
    $a = rand(10, 90);
    $b = rand(1, 9);
    $qtn = $a . " x " . $b;
    $answr = $a * $b;
    $array = array(
        "qtn" => $qtn,
        "answr" => $answr, 
    );
    
    return($array);
}

//hto x o
function hto_x_o() {
    $a = rand(100, 900);
    $b = rand(1, 9);
    $qtn = $a . " x " . $b;
    $answr = $a * $b;
    $array = array(
        "qtn" => $qtn,
        "answr" => $answr, 
    );
    
    return($array);
}

//thhto x o
/*function thhto_x_o() {
    $a = rand(1000, 9000);
    $b = rand(1, 9);
    $qtn = $a . " x " . $b;
    $answr = $a * $b;
    $array = array(
        "qtn" => $qtn,
        "answr" => $answr, 
    );
    
    return($array);
}*/

//to x to
function to_x_to() {
    $a = rand(10, 90);
    $b = rand(10, 90);
    $qtn = $a . " x " . $b;
    $answr = $a * $b;
    $array = array(
        "qtn" => $qtn,
        "answr" => $answr, 
    );
    
    return($array);
}
/*
//hto x to
function hto_x_to() {
    $a = rand(100, 900);
    $b = rand(10, 90);
    $qtn = $a . " x " . $b;
    $answr = $a * $b;
    $array = array(
        "qtn" => $qtn,
        "answr" => $answr, 
    );
    
    return($array);
}

//thhto x to
function thhto_x_to() {
    $a = rand(1000, 9000);
    $b = rand(10, 90);
    $qtn = $a . " x " . $b;
    $answr = $a * $b;
    $array = array(
        "qtn" => $qtn,
        "answr" => $answr, 
    );
    
    return($array);
}

//hto x hto
function hto_x_hto() {
    $a = rand(100, 900);
    $b = rand(100, 900);
    $qtn = $a . " x " . $b;
    $answr = $a * $b;
    $array = array(
        "qtn" => $qtn,
        "answr" => $answr, 
    );
    
    return($array);
}

//thhto x hto
function thhto_x_hto() {
    $a = rand(1000, 9000);
    $b = rand(100, 900);
    $qtn = $a . " x " . $b;
    $answr = $a * $b;
    $array = array(
        "qtn" => $qtn,
        "answr" => $answr, 
    );
    
    return($array);
}
*/

// ---------- Support functions -----------

// x number by 10
function numberXTen() {
                $a = rand(1, 9) * 10;
                return $a;
            }
//number x 0
function numberXHundred() {
    $a = rand(1, 9) * 100;
    return $a;
}


?>