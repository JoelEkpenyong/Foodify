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


    $url = parse_url(getenv("mysql://bdbfa2b2f48496:f8434cfd@us-cdbr-east-02.cleardb.com/heroku_db670458dcc6813?reconnect=true"));

    $server = $url["us-cdbr-east-02.cleardb.com"];
    $username = $url["bdbfa2b2f48496"];
    $password = $url["f8434cfd"];
    $db = substr($url["heroku_db670458dcc6813"], 1);

    $conn = new mysqli($server, $username, $password, $db);

    if($conn->connect_error){
            die('Connection Failed : '.$conn->connect_error);
        }else{
            echo "connection established";
            // $stmt = $conn->prepare('insert into mailing-list(email) values(?)');
            // $stmt->bind_param('s', $email);
            // $stmt->execute();
            // echo "registration succesful";
            // $stmt->close();
            // $conn->close();
        }

    // $conn = mysqli_connect($server, $username, $password, $db);
    // if(! $conn){
    //     die('Could not connect: '. mysqli_errno($link));
    // }

  

?>

