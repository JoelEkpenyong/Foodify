<?php
    $email = $_POST['email'];
        
    $url = getenv('mysql://bdbfa2b2f48496:f8434cfd@us-cdbr-east-02.cleardb.com/heroku_db670458dcc6813?reconnect=true');
    $dbparts = parse_url($url);
    
    $hostname = $dbparts['http://us-cdbr-east-02.cleardb.com/'];
    $username = $dbparts['bdbfa2b2f48496'];
    $passcode = $dbparts['f8434cfd'];
    $database = ltrim($dbparts['pewz6bnlb8n8aiag'], '/');

    // connecting to the database

    $conn = new mysqli($hostname, $username, $passcode, $database);
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        echo "connection established";
        $stmt = $conn->prepare('insert into mailing-list(email) values(?)');
        $stmt->bind_param('s', $email);
        $stmt->execute();
        echo "registration succesful";
        $stmt->close();
        $conn->close();
    }
?>

