<?php
  $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "regist";
    $conn = mysqli_connect( $db_server,$db_user,$db_pass,$db_name);

    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $check = $_COOKIE['user'];
        $stmt = $conn->prepare("SELECT R_name FROM accounts
        WHERE R_name = ?");
        $stmt->bind_param("s", $check);
        $stmt->execute();
        $stmt->store_result();
        if($stmt->num_rows == 1){
            echo "Welcom";
        }else {
            //echo  $_COOKIE['user'];
            header('Location: http://localhost/filtered/login.php');
        }
        $stmt->close();
        mysqli_close($conn); 
    ?>
</body>
</html>