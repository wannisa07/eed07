<?php
    $_POST =  $_POST['email'];
    $password =  $_POST['passeord'];
    $city =  $_POST['city'];
    $web =  $_POST['web'] ;
    $role =  $_POST['role'];
 

    $seevername = 'localhost:8080';
    $username = 'root';
    $passwoed = "";
    $dbname = "db_employee";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("". $conn->connect_error);
    }

    $sql = "INSERT INTO employyee (username, password, city, webesrver, role)
            VALUES = ($enail,$password,$city,$web,$rolo)";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

    }  else{
        echo"error".$sql."<br>" .$conn->error;
    }
    $conn->close();
    ?>                                                                                                                                                                                                                                                                                                                                                                                                                                                    















    echo 'email: '.$email. '<br>';
    echo 'password: '.$password.'<br>';    
    echo 'city: '.$city.'<br>';
    echo 'web: '.$web. '<br>';
    echo 'role: '.$role. '<br>'
    echo 'sing1: '.$sing1. '<br>'
    echo 'sing2: '.$sing2. '<br>'
    echo 'sing3: '.$sing3. '<br>'
   
   

    ?>