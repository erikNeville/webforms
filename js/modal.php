<?php
include 'conn.php';

    $email = ($_GET['email']);

    $sql = "SELECT * FROM NewsletterList WHERE email = '".$email."'";

    $result =mysqli_query($con, $sql);

    $row = mysql_fetch_array($result);

    if(empty($row)){
        $sqlAdd = "INSERT INTO NewsletterList (email) VALUES '".$email."'";
    } 



?>