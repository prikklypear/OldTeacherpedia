<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Teacherpedia</title>
        
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap.min.css" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="../custom.css">

        <!-- google analuytics-->
            <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125055859-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-125055859-1');
        </script>
</head>
    <body>
        <nav class="navbar navbar-default" style="background: #56bae4">
            <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a id="site-logo" href="index.php?link=main.php" class="navbar-brand">Teacherpedia</a>
                </div>
                
                <!-- Navbar collapse -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li id="browse"><a href="index.php?link=resources.html">Browse Resources</a></li>
                        <li id="latest"><a>Latest Resources</a></li>
                        <li id="vision"><a href="index.php?link=vision.html">Our Vision</a></li>
                    </ul>
                
                    <ul class="nav navbar-nav navbar-right">
                        <li id="browse"><a href="#"><a href="#"></a>  </a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo($_SESSION['first']); ?> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="user/login/logout.php">Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div> <!-- End collapse div -->
            </div> <!-- End container div -->
        </nav>
        
        <div id="header" class="row">
            <div class="col-xs-3 col-sm-3 col-md-3"></div>
            <div class="col-xs-6 col-sm-6 col-md-6">
            <img  id="annete-header" class="img-responsive" src="images/logo.png">
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3"></div>
        </div>
        
        <div class="row">
            <div class="col-xs-2 col-sm-2 col-md-2">
                
            </div>
            <div id="content" class="col-xs-8 col-sm-8 col-md-8">
                <?php include "$link"; ?>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2">
            
            </div>
        
        </div>
        
        
        
                