<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Nhập ip:</h1>
  <form action="" method="post">
    <input type="text" name="ip">
    <input type="submit" value="Ping">
  </form>

  <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      $ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP);
      if( $ip == false){
        echo "Nhập ip hợp lệ";
      }else{   
      $ip = escapeshellarg($ip); 
      $ping = shell_exec("ping -n 4 $ip");
      echo "<pre>$ping<pre>"; 
      }
    }
  ?>
</body>
</html>
