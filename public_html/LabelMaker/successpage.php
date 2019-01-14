<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Last Minute Teacher</title>
    <link rel="stylesheet" href="../LabelMaker/a4Label.css" />
</head>
<body>
        
<?php
    
    $numberOfSc = 0;
    
    $sc1 = $_POST["first1"];
    $sc2 = $_POST["second1"];
    $sc3 = $_POST["third1"];
    
    $sc1a = explode("\r", $sc1);
    $sc2a = explode("\r", $sc2);
    $sc3a = explode("\r", $sc3);
    
    if(!empty($sc1a[0]) || !empty($sc1a[1])) {
        $numberOfSc = 1;
        if(!empty($sc2a[0]) || !empty($sc2a[1])) {
            $numberOfSc = 2;
            if(!empty($sc3a[0]) || !empty($sc3a[1])) {
                $numberOfSc = 3;
            } 
        }
    }
    
    function removeArbitrary($str) {
        $str = preg_replace("/•/", "", $str);
        return $str;
    }
    
    function printSc($array) {
        for($i = 0; $i < count($array); $i++) {
            $array[$i] = removeArbitrary($array[$i]);
            if(strlen($array[$i]) > 1) {
                echo "<ul><li>" . $array[$i] . "</li></ul>";
            }
        }
    }
        
    ?>
    
<page size="a4">
    <div id="innerPage">
        <div id="border">
            <div id="row1">
                <div class="label row" id="label1">
                    <div class="title">Success Criteria</div>
                    <?php
                        if($numberOfSc == 1) {
                            printSc($sc1a);
                        } else if($numberOfSc == 2) {
                            printSc($sc1a);
                        } else if ($numberOfSc == 3) {
                            printSc($sc1a);
                        }
                    ?>
                </div>
                <div class="label" id="label2">
                    <div class="title">Success Criteria</div>
                    <?php
                        if($numberOfSc == 1) {
                            printSc($sc1a);
                        } else if($numberOfSc == 2) {
                            printSc($sc1a);
                        } else if ($numberOfSc == 3) {
                            printSc($sc2a);
                        }
                    ?>
                </div>
                <div class="label" id="label3">
                    <div class="title">Success Criteria</div>
                    <?php
                        if($numberOfSc == 1) {
                            printSc($sc1a);
                        } else if($numberOfSc == 2) {
                            printSc($sc1a);
                        } else if ($numberOfSc == 3) {
                            printSc($sc3a);
                        }
                    ?>
                </div>        
            </div><br/>
            
            <div class="row">
                <div class="label" id="label1">
                    <div class="title">Success Criteria</div>
                    <?php
                        if($numberOfSc == 1) {
                            printSc($sc1a);
                        } else if($numberOfSc == 2) {
                            printSc($sc1a);
                        } else if ($numberOfSc == 3) {
                            printSc($sc1a);
                        }
                    ?>
                </div>
                <div class="label" id="label2">
                    <div class="title">Success Criteria</div>
                    <?php
                        if($numberOfSc == 1) {
                            printSc($sc1a);
                        } else if($numberOfSc == 2) {
                            printSc($sc1a);
                        } else if ($numberOfSc == 3) {
                            printSc($sc2a);
                        }
                    ?>
                </div>
                <div class="label" id="label3">
                    <div class="title">Success Criteria</div>
                    <?php
                        if($numberOfSc == 1) {
                            printSc($sc1a);
                        } else if($numberOfSc == 2) {
                            printSc($sc1a);
                        } else if ($numberOfSc == 3) {
                            printSc($sc3a);
                        }
                    ?>
                </div>        
            </div><br/>
            
            <div class="row">
                <div class="label" id="label1">
                    <div class="title">Success Criteria</div>
                    <?php
                        if($numberOfSc == 1) {
                            printSc($sc1a);
                        } else if($numberOfSc == 2) {
                            printSc($sc1a);
                        } else if ($numberOfSc == 3) {
                            printSc($sc1a);
                        }
                    ?>
                </div>
                <div class="label" id="label2">
                    <div class="title">Success Criteria</div>
                    <?php
                        if($numberOfSc == 1) {
                            printSc($sc1a);
                        } else if($numberOfSc == 2) {
                            printSc($sc1a);
                        } else if ($numberOfSc == 3) {
                            printSc($sc2a);
                        }
                    ?>
                </div>
                <div class="label" id="label3">
                    <div class="title">Success Criteria</div>
                    <?php
                        if($numberOfSc == 1) {
                            printSc($sc1a);
                        } else if($numberOfSc == 2) {
                            printSc($sc1a);
                        } else if ($numberOfSc == 3) {
                            printSc($sc3a);
                        }
                    ?>
                </div>        
            </div><br/>
            
            <div class="row">
                <div class="label" id="label1">
                    <div class="title">Success Criteria</div>
                    <?php
                        if($numberOfSc == 1) {
                            printSc($sc1a);
                        } else if($numberOfSc == 2) {
                            printSc($sc2a);
                        } else if ($numberOfSc == 3) {
                            printSc($sc1a);
                        }
                    ?>
                </div>
                <div class="label" id="label2">
                    <div class="title">Success Criteria</div>
                    <?php
                        if($numberOfSc == 1) {
                            printSc($sc1a);
                        } else if($numberOfSc == 2) {
                            printSc($sc2a);
                        } else if ($numberOfSc == 3) {
                            printSc($sc2a);
                        }
                    ?>
                </div>
                <div class="label" id="label3">
                    <div class="title">Success Criteria</div>
                    <?php
                        if($numberOfSc == 1) {
                            printSc($sc1a);
                        } else if($numberOfSc == 2) {
                            printSc($sc2a);
                        } else if ($numberOfSc == 3) {
                            printSc($sc3a);
                        }
                    ?>
                </div>        
            </div><br/>
            
            <div class="row">
                <div class="label" id="label1">
                    <div class="title">Success Criteria</div>
                    <?php
                        if($numberOfSc == 1) {
                            printSc($sc1a);
                        } else if($numberOfSc == 2) {
                            printSc($sc2a);
                        } else if ($numberOfSc == 3) {
                            printSc($sc1a);
                        }
                    ?>
                </div>
                <div class="label" id="label2">
                    <div class="title">Success Criteria</div>
                    <?php
                        if($numberOfSc == 1) {
                            printSc($sc1a);
                        } else if($numberOfSc == 2) {
                            printSc($sc2a);
                        } else if ($numberOfSc == 3) {
                            printSc($sc2a);
                        }
                    ?>
                </div>
                <div class="label" id="label3">
                    <div class="title">Success Criteria</div>
                    <?php
                        if($numberOfSc == 1) {
                            printSc($sc1a);
                        } else if($numberOfSc == 2) {
                            printSc($sc2a);
                        } else if ($numberOfSc == 3) {
                            printSc($sc3a);
                        }
                    ?>
                </div>        
            </div><br/>
            
            <div class="row">
                <div class="label" id="label1">
                    <div class="title">Success Criteria</div>
                    <?php
                        if($numberOfSc == 1) {
                            printSc($sc1a);
                        } else if($numberOfSc == 2) {
                            printSc($sc2a);
                        } else if ($numberOfSc == 3) {
                            printSc($sc1a);
                        }
                    ?>
                </div>
                <div class="label" id="label2">
                    <div class="title">Success Criteria</div>
                    <?php
                        if($numberOfSc == 1) {
                            printSc($sc1a);
                        } else if($numberOfSc == 2) {
                            printSc($sc2a);
                        } else if ($numberOfSc == 3) {
                            printSc($sc2a);
                        }
                    ?>
                </div>
                <div class="label" id="label3">
                    <div class="title">Success Criteria</div>
                    <?php
                        if($numberOfSc == 1) {
                            printSc($sc1a);
                        } else if($numberOfSc == 2) {
                            printSc($sc2a);
                        } else if ($numberOfSc == 3) {
                            printSc($sc3a);
                        }
                    ?>
                </div>        
            </div><br/>
            
            <div class="row">
                <div class="label" id="label1">
                    <div class="title">Success Criteria</div>
                    <?php
                        if($numberOfSc == 1) {
                            printSc($sc1a);
                        } else if($numberOfSc == 2) {
                            printSc($sc2a);
                        } else if ($numberOfSc == 3) {
                            printSc($sc1a);
                        }
                    ?>
                </div>
                <div class="label" id="label2">
                    <div class="title">Success Criteria</div>
                    <?php
                        if($numberOfSc == 1) {
                            printSc($sc1a);
                        } else if($numberOfSc == 2) {
                            printSc($sc2a);
                        } else if ($numberOfSc == 3) {
                            printSc($sc2a);
                        }
                    ?>
                </div>
                <div class="label" id="label3">
                    <div class="title">Success Criteria</div>
                    <?php
                        if($numberOfSc == 1) {
                            printSc($sc1a);
                        } else if($numberOfSc == 2) {
                            printSc($sc2a);
                        } else if ($numberOfSc == 3) {
                            printSc($sc3a);
                        }
                    ?>
                </div>        
            </div><br/>
        </div>
    </div>
</page></div>
    
        
    
    
    
    
</body>
</html>

