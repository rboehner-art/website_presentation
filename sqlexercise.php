<?php
 $hostname = "php-mysql-exercisedb.slccwebdev.com";
 $username = "phpmysqlexercise";
 $password = "mysqlexercise";
 $databasename = "php_mysql_exercisedb";

try{
    //Create NEW PDO object
    $conn = new PDO("mysql:host=$hostname;dbname=$databasename",$username, $password);

    //Set PDO error mode to exception 
    $conn->setAttribute(PDO::ATTR_ERRMODE,
                        PDO:: ERRMODE_EXCEPTION);
    
    //variable containing SQL command

    $sql = "SELECT * FROM RB_NOV22_Contacts;";
    $return =$conn->query($sql);

    echo "<b>The data currently in the database: </b><br>\n";
        foreach ($conn->query($sql) as $row) {
            echo $row['contactID'] . " | ";
            echo $row['name'] . " | ";
            echo $row['email'] . " | ";
            echo $row['contactBack'] . " | ";
            echo $row['comments'] . " | ";
            echo $row['dateSent'] . "<br>\n";}


    } catch (PDOException $error) {

        //Return error code if one is created
        echo "Execution error: <br>" . $sql . "<br>" . $error->getMessage();
    }

    $conn = null;
?>

