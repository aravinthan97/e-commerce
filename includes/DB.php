<?php
     $serverName = "localhost";
     $dbUserName= "root";
     $dbPassword = "";
     $dbName = "zedtext";

     $conn = mysqli_connect($serverName,$dbUserName,$dbPassword,$dbName);


     // // Check connection
     // if (!$conn->connect_errno) {
     //     die("Connection failed: " . mysqli_connect_error());
     // }

           /* check connection */
      if ($conn->connect_errno) {
          echo "Connect failed:".$mysqli->connect_error;
          exit();
      }

      /* check if server is alive */
      if ($conn->ping()) {
          echo "Our connection is ok!";
      } else {
          echo "Error: ".$mysqli->error;
      }
     //
     // echo "Connected successfully";

?>
