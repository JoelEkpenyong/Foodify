<?php
    // $email = $_POST['email'];
        
    // $url = getenv('mysql://bdbfa2b2f48496:f8434cfd@us-cdbr-east-02.cleardb.com/heroku_db670458dcc6813?reconnect=true');
    // $dbparts = parse_url($url);
    
    // $hostname = $dbparts['http://us-cdbr-east-02.cleardb.com/'];
    // $username = $dbparts['bdbfa2b2f48496'];
    // $passcode = $dbparts['f8434cfd'];
    // $database = ltrim($dbparts['heroku_db670458dcc6813']);

    // // connecting to the database

    // $conn = new mysqli($hostname, $username, $passcode, $database);
    // if($conn->connect_error){
    //     die('Connection Failed : '.$conn->connect_error);
    // }else{
    //     echo "connection established";
    //     $stmt = $conn->prepare('insert into mailing-list(email) values(?)');
    //     $stmt->bind_param('s', $email);
    //     $stmt->execute();
    //     echo "registration succesful";
    //     $stmt->close();
    //     $conn->close();
    // }


    // config for heroku clearDB
    // $hostname = 'http://us-cdbr-east-02.cleardb.com/';
    // $username = 'bdbfa2b2f48496';
    // $password = 'f8434cfd';
    // $database = 'heroku_db670458dcc6813';
    // $tablename = 'mailing-list';

    // // establishing clearDB connection
    // $conn =   mysqli_connect($hostname, $username, $password, $database);

    // // inserting email
    // $stmt = 'INSERT INTO mailing-list(email)values($email)';
    // $result = mysqli_query($conn, $stmt);
    // if($result == !true){
    //     echo 'Regsitration not completed';
    // }else{
    //     echo 'Registration succesful';
    // };


    // $url = parse_url(getenv("mysql://bdbfa2b2f48496:f8434cfd@us-cdbr-east-02.cleardb.com/heroku_db670458dcc6813?reconnect=true"));

    // $server = $url["http://us-cdbr-east-02.cleardb.com/"];
    // $username = $url["bdbfa2b2f48496"];
    // $password = $url["f8434cfd"];
    // $db = substr($url["heroku_db670458dcc6813"], 1);

    // $conn = new mysqli($server, $username, $password, $db);

    // if($conn->connect_error){
    //         die('Connection Failed : '.$conn->connect_error);
    //     }else{
    //         echo "connection established";
    //         $stmt = $conn->prepare('insert into mailing-list(email) values(?)');
    //         $stmt->bind_param('s', $email);
    //         $stmt->execute();
    //         echo "registration succesful";
    //         $stmt->close();
    //         $conn->close();
    //     }

    // $conn = mysqli_connect($server, $username, $password, $db);
    // if(! $conn){
    //     die('Could not connect: '. mysqli_errno($link));
    // }

        // Config for heroku clearDB database
  $db_host = 'us-cdbr-east-02.cleardb.com';
  $db_name = 'heroku_db670458dcc6813';
  $db_user = "bdbfa2b2f48496";
  $db_password = "f8434cfd";
  $db_tablename = "mailing-list";


  // Connect to the sql database
  $db = mysqli_connect($db_host, $db_user, $db_password, $db_name);


  // Function to check if email is valid
  function checkemail($str) {
    return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
}

  // Check if the user makes a post request and respond to it
  if(isset($_POST['submit'])){ 
    // assign the value of the email to a variable of same name
    $email = $_POST['email'];

    // VAlidate Email
    // if(!checkemail($email)){
    //   $_SESSION["error"] = "This email is invalid. Please try again";
    //   header("Location:index.php");
    //   exit;
    //   die();
    // }
      

    // Retrieve any email in db that matches $email
    // $sql_e = "SELECT * FROM mailing-list WHERE email='$email'";
    // $res_e = mysqli_query($db, $sql_e);

    // // Check if email exists
    // if(mysqli_num_rows($res_e) > 0){
    //   $_SESSION["error"] = "This email has already been registered";
    //   header("Location:index.php");
  	// } else {

      // Insert new email inside DB
      $query = "INSERT INTO mailing-list(email)values('$email')";

      $result = mysqli_query($db, $query);
    


      if ($result == true) {
        // $_SESSION["success"] = "Registered successfully 😙";
        // header("Location:mail-success.php");
        // exit;
        // die();
        echo 'succesful';
      } else {
        // $_SESSION["error"] = "An error occured, please contact support";
        // header("Location:index.php");
        // exit;
        // die();
        echo 'something happened';
      };

  };

?>

