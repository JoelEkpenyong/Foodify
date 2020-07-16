<?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $url = getenv('mysql://l8okalfu9st1ww21:grxjo2kvj1t5hgp6@y2w3wxldca8enczv.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/pewz6bnlb8n8aiag');
    $dbparts = parse_url($url);
    
    $hostname = $dbparts['y2w3wxldca8enczv.cbetxkdyhwsb.us-east-1.rds.amazonaws.com'];
    $username = $dbparts['l8okalfu9st1ww21'];
    $passcode = $dbparts['grxjo2kvj1t5hgp6'];
    $database = ltrim($dbparts['pewz6bnlb8n8aiag'], '/');

    // connecting to the database

    $conn = new mysqli($hostname, $username, $passcode, $database);
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        echo "connection established";
        $stmt = $conn->prepare('insert into registration(email, password) values(?, ?)');
        $stmt->bind_param('ss', $email, $password);
        $stmt->execute();
        echo "registration succesful";
        $stmt->close();
        $conn->close();
    }
?>

