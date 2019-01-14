<?php 

session_start();

/// Make connection to database



function connect_to_database() {
    $dbhost = '127.0.0.1';
    $dbuser = 'root';
    $dbpass = 'pianodawG1';
    $dbname = "cl34-users-3237fa3e";
    $connect = mysqli_connect("shareddb-g.hosting.stackcp.net", "cl34-users-3237fa3e", "pianodawG1", "cl34-users-3237fa3e");

    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    } 

    return $connect;
}

//register user

function register() {
    $first_name = $_POST["first_name"];
    $second_name = $_POST["second_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $dob = $_POST["date_of_birth"];
    
    $hash = password_hash($password, PASSWORD_DEFAULT);
    
    $link = connect_to_database();

    /*$query = "INSERT INTO people (first_name, second_name, email, password, dob) VALUES ('$first_name', '$second_name', '$email', '$hash', '$dob')";

    if (mysqli_query($link, $query)) {
            echo "It worked!";
            header("Location: ../../index.php?link=user/register/confirm.php");
        } else {
            echo "It failed because user already exists";
        }*/

    $sql = "INSERT INTO people (first_name, second_name, email, password, dob) VALUES ('$first_name', '$second_name', '$email', '$hash', '$dob')";

    if ($link->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

//login

function login_user() {
    $email = $_POST["email"];
    $hash = $_POST["hash"];
    $link = connect_to_database();
    
    $query = "SELECT * FROM people WHERE (email) = ('$email')";
            
    if ($result = mysqli_query($link, $query)) {
        $row = mysqli_fetch_assoc($result);
        if(password_verify($hash, $row['user_pass'])) {
            $_SESSION['email'] = $row['email'];
            $_SESSION['first'] = $row['first'];
            $_SESSION['second'] = $row['second'];
            $_SESSION['id'] = $row['id'];
            header("Location: ../../index.php");
        }  
    } else {
        echo "Select failed";
        if (count($_POST) > 0) {
            foreach ($_POST as $k=>$v) {
                unset($_POST[$k]);
            }
            session_destroy();
        }
    }
}

// Logout
function logout() {
    if (count($_POST) > 0) {
        foreach ($_POST as $k=>$v) {
            unset($_POST[$k]);
        }
            
    }
    
    $_SESSION = array();
    session_destroy();

    header('Location: ../../index.php');
}


?>