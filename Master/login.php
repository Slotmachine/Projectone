<?php

session_start();
include_once('interface.php');
include_once('services.php');


$userdata = new DB_conn();

if (isset($_POST['login'])) {
	$uname = $_POST['username'];
	$pass = $_POST['password'];

	$result = $userdata->login($uname, $pass);
	$num = mysqli_fetch_array($result);

	if ($num > 0) {
		$_SESSION['id'] = $num['NUM_OT'];
		$_SESSION['fname'] = $num['NUM_OT'];
		echo "<script>alert('ระบบกำลังนำท่านไปยัง Dashboard!');</script>";
		echo "<script>window.location.href='authen.php'</script>";
	} else {
		echo "<script>alert('Username หรือ Passwordd ไม่ถูกต้อง!! กรุณาลองใหม่อีกครั้ง');</script>";
		echo "<script>window.location.href='login.php'</script>";
	}
}

?>

<head>
	<title>LOGIN</title>
	<style>
		body {
			background-color: #f4f4f4;
		}
	</style>
</head>

<body>


	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Banner -->

		<form method="post">
			<section id="intro" class="main">
				<h1>SIGIN</h1>
				<ul class="actions">
					<li><input type="text" placeholder="Username" name="username" required></li>
				</ul>
				<ul class="actions">
					<li><input type="password" placeholder="Password" name="password" required></li>
				</ul>
				<ul class="actions">
					<button class="button big" type="submit" name="login">LOGIN</button> <br>
					<a href="index.php">กลับหน้าแรก</a>
				</ul>
			</section>
		</form>
	</div>


</body>