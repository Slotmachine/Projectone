<?php
session_start();
include_once('interface.php');
include_once('services.php');

if ($_SESSION['id'] == "") {
	header("location: login.php");
} else {
	$id = $_SESSION['id'];
	$outp = '';
	$conn = mysqli_connect("localhost", "root", "", "data001");
	mysqli_query($conn, 'SET CHARACTER SET UTF8');
	$query = "SELECT * FROM tb_person WHERE NUM_OT=$id";
	$sql = mysqli_query($conn, $query);

?>

	<head>
		<title>Authentication</title>
	</head>


	<body>

		<div id="wrapper">
			<!-- Banner -->

			<section id="intro" class="main">
				<span class="icon fa-diamond major"></span>
				<h2>ยินดีต้องรับเข้าสู่ระบบ</h2>
				<p>
					<?php
					while ($row = mysqli_fetch_array($sql)) {
					?>
						ชื่อ-นามสกุล : <b><?php echo $row['Fname']; ?>
							<?php echo $row['Lname']; ?></b>
					<?php
					}
					?> <br>
					รหัสพนักงาน : <strong><?php echo $_SESSION['fname']; ?></strong>
				</p>
				<ul class="actions">
					<li><a href="logout.php" class="button big">ออกจากระบบ</a></li>
				</ul>
			</section>

			<!-- Items -->
			<section class="main items">
				<article class="item">
					<header>
						<a href="authen_add.php"><img src="images/pic01.jpg" alt="" /></a>
						<h3>สร้างโพสต์ประกาศ</h3>
					</header>
					<p>สร้างโพสต์ประกาศข่าวการรับสมัครทุกตำแหน่งได้ที่นี้ <br>
					การสร้างโพสต์ประกาศจะบันทึกชื่อของผู้สร้างโพสต์ด้วยอัตโนมัติ เป็นต้นฯ</p>
					<ul class="actions">
						<li><a href="authen_add.php" class="button">สร้างโพสต์</a></li>
					</ul>
				</article>
				<article class="item">
					<header>
						<a href="authen_show.php"><img src="images/pic02.jpg" alt="" /></a>
						<h3>รายละเอียด</h3>
					</header>
					<p>รายละเอียดจะรวบรวมข้อมูลที่โพสต์ประกาศและมีระบบดังนี้
						แสดงข้อมูลรายละเอียดตำแหน่ง เวลาที่รับสมัคร, สร้างโพสต์ประกาศ, แก้ไขข้อมูล, ลบข้อมูล เป็นต้นฯ
					</p>
					<ul class="actions">
						<li><a href="authen_show.php" class="button">ดูรายละเอียด</a></li>
					</ul>
				</article>
			</section>

		</div>
		<?php include_once('footer.php'); ?>
	</body>

<?php

}
?>