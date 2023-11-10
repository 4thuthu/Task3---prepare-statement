<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2> Nhập ip: </h2>
  <form action="" method="post">
    <input type="text" name="ip">
    <input type="submit" value="Tracert">
  </form>

  <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      $ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP);
      //echo $ip;   
      if( $ip == ""){
        echo "Nhập ip hợp lệ";
      }else{ 
        $ip = escapeshellarg($ip);
        $tracert = shell_exec("tracert $ip");
        echo "<pre>$tracert<pre>"; 
      }
    }
  ?>
</body>
</html>
