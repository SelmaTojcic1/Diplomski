<?php
	session_start();
    $servername = "localhost";
    $username   = "root";
    $password   = "";

    $con = new mysqli($servername, $username, $password);

    if($con->connect_error) {
        die("Neuspjelo spajanje na poslužitelj baze podataka: " . $con->connect_error);
    }
	mysqli_select_db($con, "diplomski");

    $tb_test = mysqli_query($con, "SHOW TABLES LIKE {$_SESSION['table_name']}");
    if(!$tb_test) {
        $sql = "CREATE TABLE {$_SESSION['table_name']} 
                (
                    sID INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
                    spol INTEGER UNSIGNED,
                    dob INTEGER UNSIGNED,
                    godina INTEGER UNSIGNED,
                    p1 INTEGER UNSIGNED,
                    p2 INTEGER UNSIGNED,
                    p3 INTEGER UNSIGNED,
                    p4 INTEGER UNSIGNED,
                    p5 INTEGER UNSIGNED,
                    p6 INTEGER UNSIGNED,
                    p7 INTEGER UNSIGNED,
                    p8 INTEGER UNSIGNED,
                    p9 INTEGER UNSIGNED,
                    p10 INTEGER UNSIGNED,
                    p11 INTEGER UNSIGNED,
                    p12 INTEGER UNSIGNED,
                    p13 INTEGER UNSIGNED,
                    PRIMARY KEY (sID)
                )
                ENGINE = InnoDB";
        mysqli_query($con, $sql);
    }
?>