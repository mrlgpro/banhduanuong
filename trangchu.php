<?php
    session_start();
	include('config.php');
	echo "Chào: " .$_SESSION['account'];
	echo "<a href='exit.php'>  Thoát</a>"
?>
<html>
<head>
<title>Trang chủ</title>
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Classy Login form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
<!--header start here-->
<div class="header">
		<div class="header-main">
        <div align="center">
		       <h1 align="center">Ngân Hàng Paylak</h1><br>
               <div><h3>Xin chào <?php echo $row['account']; ?> <br></h3></div>
				<div class="header-bottom">
				<div class="header-right w3agile">
				<div class="header-left-bottom agileinfo">	
					 <form method="post">
                        <div align="center">
                        <input type="submit" name="ok1" value="Rút Tiền" /><br>
                        <input type="submit" name="ok2" value="Truy Vấn" /><br>
                        <input type="submit" name="ok3" value="Chuyển tiền" /><br>
                        <input type="submit" name="ok4" value="Thoát" /><br>
                        </div>
                      </form>

<?php
	if (isset($_POST["ok2"]))
	{
	$sql="select * from atmls where account='".$_SESSION['account']."'";
	$run=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($run);
	if ($run) 
		echo "<font color=#FFFFFF>Xin chào bạn !"; 
		echo "<br>";
		echo "Tài khoản: " .$_SESSION['account'];
		echo "<br>";
		echo "Số dư: " .$row['money'];
	}
?>
<?php
	if (isset($_POST["ok1"]))
	echo header ('location:ruttien.php')
?>
<?php
	if (isset($_POST["ok3"]))
	echo header ('location:chuyentien.php')
?>
<?php
	if (isset($_POST["ok4"]))
	echo header ('location:exit.php')
?></div>
</body>
</html>