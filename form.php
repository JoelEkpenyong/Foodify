<?php
    $email = $_POST['email'];

    // database information
    $url = parse_url(getenv('mysql://bdbfa2b2f48496:f8434cfd@us-cdbr-east-02.cleardb.com/heroku_db670458dcc6813?reconnect=true'));
    $server = $url["us-cdbr-east-02.cleardb.com"];
    $username = $url["bdbfa2b2f48496"];
    $password = $url["f8434cfd"];
    $db = substr($url["heroku_db670458dcc6813"], 1);


    // connecting to the database
    $conn = new mysqli($server, $username, $password, $db);
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare('insert into mailing-list(email) values(?)');
        $stmt->bind_param('s', $email);
        $stmt->execute();
        echo "registration succesful";
        $stmt->close();
        $conn->close();
    };
?>
