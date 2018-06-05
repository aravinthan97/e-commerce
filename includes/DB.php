<?php
     $serverName = "localhost";
     $dbUserName= "root";
     $dbPassword = "";
     $dbName = "ecom";

     $conn = mysqli_connect($serverName,$dbUserName,$dbPassword,$dbName);

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


?>
