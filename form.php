<?php
    session_start();
    // Config for heroku clearDB database
    $db_host = 'us-cdbr-east-02.cleardb.com';
    $db_name = 'heroku_5b84bcd2b902147';
    $db_user = "bf3890888aa279";
    $db_password = "9b8e5fa0";
    $db_tablename = "mailing-list";
    // Connect to the sql database
    $db = mysqli_connect($db_host, $db_user, $db_password, $db_name);
    // Function to check if email is valid
    function checkemail($str) {
        return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
    }
    // assign the value of the email to a variable of same name
    $email = $_POST['email'];
    // VAlidate Email
    if(!checkemail($email)){
        $_SESSION["error"] = "This email is invalid. Please try again";
        header("Location:index.php");
        die();
    }
    // Retrieve any email in db that matches $email
    $sql_e = "SELECT * FROM mailing-list WHERE email='$email'";
    $res_e = mysqli_query($db, $sql_e);
    // Check if email exists
    if(mysqli_num_rows($res_e) > 0){
        $_SESSION["error"] = "This email has already been registered";
        header("Location:index.php");
    } else {
        // Insert new email inside DB
        $query = "INSERT INTO mailing-list(email)values('$email')";
        $result = mysqli_query($db, $query);
        if ($result == true) {
        $_SESSION["success"] = "Registered successfully";
        header("Location:index.php");
        die();
        } else {
        $_SESSION["error"] = "An error occured, please contact support";
        header("Location:index.php");
        die();
        }
    }
?>