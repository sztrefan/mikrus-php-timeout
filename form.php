<?php
    if(isset($_POST['submit']))
    {
        $name = $_POST['url'];
        $email = $_POST['comment'];
        
        //database details. You have created these details in the third step. Use your own.
        $host = "pma.mikr.us";
        $username = "name";
        $password = "password";
        $dbname = "database";

        //create connection
        $con = mysqli_connect($host, $username, $password, $dbname);
        //check connection if it is working or not
        if (!$con)
        {
            die("Connection failed!" . mysqli_connect_error());
        }
        //This below line is a code to Send form entries to database
        $sql = "INSERT INTO dane (link, dodatek) VALUES ('$url', '$comment')";
      //fire query to save entries and check it with if statement
        $rs = mysqli_query($con, $sql);
        if($rs)
        {
            echo "Successfully saved";
        }
      //connection closed.
        mysqli_close($con);
    }
?>
