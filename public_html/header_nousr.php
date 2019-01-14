<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Teacherpedia</title>
        
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="custom.css">
        

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
    <body id="bootstrap-overrides">

        <nav id="navbar" class="navbar navbar-expand-lg navbar-light" style="background: #56bae4;">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">Teacherpedia</a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                <a class="nav-link" href="index.php?link=resources.html">Browse Resources <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Latest Resources</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="index.php?link=vision.html">Vision</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" onsubmit="return login_val()" action="user/login/login.php" method="post">
              <div class="form-group">
                            <a href="index.php?link=user/register/register.php" id="register">Register</a>
                            <input name="email" type="text" class="form-control" placeholder="Username">
                            <input name="hash" type="password" class="form-control" placeholder="Password">
                        </div>
                            <button type="submit" class="btn btn-default">Login</button>
            </form>
          </div>
        </nav>


        <!-- Header -->
        <div id="header" class="row">
            <div class="col-xs-3 col-sm-3 col-md-3"></div>
            <div class="col-xs-6 col-sm-6 col-md-6">
            <a href="index.php?link=main.php"><img  id="header-logo" class="img-responsive" src="images/logo.png" style="width: 50%; margin:auto;"></a>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3"></div>
        </div>
        <!-- end of Header -->

        <!-- main content -->
        <div class="row">
            <div class="col-xs-2 col-sm-2 col-md-2">
            
            </div>
            <div id="content" class="col-xs-8 col-sm-8 col-md-8">
                <?php include "$link"; ?>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2">
            
            </div>
        
        </div>
        <!-- end of main content -->
        
        
        
                