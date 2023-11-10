<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>Ping</h2>
  <form action="" method="post">
    Nhập IP: <input type="text" name="ip">
    <input type="submit" value="Get gô">
  </form>

  <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      $ip = $_POST["ip"];
      if (strpos($ip, "&") !== false)
      die("Detected");
            
      $ping = shell_exec("ping -n 4 $ip");
      echo"<pre> $ping </pre>"; 
    }
  ?>
</body>
</html>
