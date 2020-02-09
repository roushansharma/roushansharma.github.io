<?php
 session_start();$name = $_SESSION['name'];
 session_start();$c_name = $_SESSION['c_name'];
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Thank You</title>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/roushan_logo.jpg" />
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link href="static/css/404.css" rel="stylesheet">
	<style type="text/css">
		body {
    background: #ffde29;
}


	</style>
</head>
<body>

<div class="page_not_found">
 
	<img src="img/thankyou.jpg" align="Thank you"><span><?php echo $name;?><?php echo $c_name;?></span></span>
</div>
<?php session_destroy();?>

<script>
setTimeout(function(){ 
	window.location.href = '/';         
}, 5000);      </script>
</body>
</html>