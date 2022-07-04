<?php 
        $username = "u292740246_wedding";
        $password = "Wedding123";
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost",$username,$password,"u292740246_wedding");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $first_name =  $_REQUEST['first_name'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO guests (Name) VALUES ('$first_name')";
                
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        // Close connection
        mysqli_close($conn);
        header("location:thanks.php");
        ?>