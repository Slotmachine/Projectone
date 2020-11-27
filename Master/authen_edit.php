<?php
session_start();
include_once('interface.php');
include_once('services.php');

$updatedata  = new DB_conn();

if (isset($_POST['saveedit'])) {
	$userid = $_GET['id'];
	$in_fancday = $_POST['pw_fancday'];
	$in_lancday = $_POST['pw_lancday'];
	$in_fregisday = $_POST['pw_fregisday'];
	$in_lregisday = $_POST['pw_lregisday'];
	$in_status = $_POST['status'];
	$in_rank = $_POST['rank'];
	$in_ranknum = $_POST['ranknum'];
	$in_agency = $_POST['agency'];
	$in_category = $_POST['category'];
	$in_rankblank = $_POST['rankblank'];
	$in_wagerate = $_POST['wagerate'];
	$in_ancnameday = $_POST['ancnameday'];
	$in_writtenexam = $_POST['writtenexam'];
	$in_wted = $_POST['wted'];
	$in_wterd = $_POST['wterd'];
	$in_interview = $_POST['interview'];
	$in_itved = $_POST['itved'];
	$in_itverd = $_POST['itverd'];
	$in_note = $_POST['note'];

	$sql = $updatedata->edit(
		$in_fancday,
		$in_lancday,
		$in_fregisday,
		$in_lregisday,
		$in_status,
		$in_rank,
		$in_ranknum,
		$in_agency,
		$in_category,
		$in_rankblank,
		$in_wagerate,
		$in_ancnameday,
		$in_writtenexam,
		$in_wted,
		$in_wterd,
		$in_interview,
		$in_itved,
		$in_itverd,
		$in_note,
		$userid
	);
	if ($sql) {
		echo "<script>alert('แก้ไขข้อมูลเรียบร้อย!');</script>";
		echo "<script>window.location.href='authen_show.php'</script>";
	} else {
		echo "<script>alert('มีบางอย่างผิดพลาด! กรุณาลองอีกครั้ง!');</script>";
		echo "<script>window.location.href='authen_edit.php'</script>";
	}
}

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
	<style>
		.custom-select {
			height: calc(1.8em + .85rem + 2px);
			padding: .375rem 1.75rem .375rem .75rem;
		}

		.custom-selects {
			display: inline-block;
			width: 100%;
			height: calc(1.8em + .85rem + 2px);
			padding: .375rem 1.75rem .375rem .75rem;
			font-size: 1rem;
			font-weight: 400;
			line-height: 1.5;
			color: #495057;
			vertical-align: middle;
			background: none;
			border: 1px solid #ced4da;
			border-radius: .25rem;
			-webkit-appearance: none;
			-moz-appearance: none;
			appearance: none;
		}

		body {
			background-color: #f4f4f4;
		}

		.form-controls {
			display: block;
			width: 100%;
			height: calc(1.9em + .82rem + 2px);
			padding: .375rem .75rem;
			font-size: 1rem;
			font-weight: 400;
			line-height: 1.5;
			color: #495057;
			background-color: #fff;
			background-clip: padding-box;
			border: 1px solid #ced4da;
			border-radius: .25rem;
			transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
		}

		input[type="text"],
		input[type="password"],
		input[type="email"],
		select,
		textarea {
			background: none;
			border-color: #666666;
		}
	</style>

	<body>

		<div id="wrapper">
			<!-- Banner -->

			<section id="intro" class="main">
				<span class="icon fa-pencil major"></span>
				<h2>แก้ไขข้อความประกาศ</h2>
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
				<div class="row text-left ml-3">
					<div style="font-size: 18px; color: red;">*หมายเหตุ : &nbsp;</div>
					<div style="margin-top: 2px;">กดตรงรูปปฏิทินเพื่อตั้งวัน/เดือน/ปี</div>
				</div>
				<?php
				$userid = $_GET['id'];
				$updateuser = new DB_conn();
				$sql = $updateuser->getid($userid);
				while ($row = mysqli_fetch_array($sql)) {
				?>


					<form action="" method="post">
						<div class="container">
							<hr>
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<!-- 1 -->
									<label><b>วันที่ประกาศ</b></label>
									<input class="custom-selects" type="date" name="pw_fancday" value="<?php echo $row['pw_fancday']; ?>" />
								</div>
								<div class="col-md-6 col-sm-6">
									<!-- 2 -->
									<label><b>วันที่สิ้นสุด</b></label>
									<input class="custom-selects" type="date" name="pw_lancday" value="<?php echo $row['pw_lancday']; ?>">
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<!-- 3 -->
									<label><b>รับสมัครถึงวันที่*</b></label>
									<input class="custom-selects" type="date" name="pw_fregisday" value="<?php echo $row['pw_fregisday']; ?>">
								</div>
								<div class="col-md-6 col-sm-6">
									<!-- 4 -->
									<label><b>รับสมัครถึงวันที่*</b></label>
									<input class="custom-selects" type="date" name="pw_lregisday" value="<?php echo $row['pw_lregisday']; ?>">
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<!-- 5 -->
									<label><b>สถานะ</b></label>
									<input type="text" placeholder="กรอกสถานะ" name="status" value="<?php echo $row['pw_status']; ?>">

									<!-- 6 -->
									<label><b>ตำแหน่งเลขที่</b></label>
									<input type="text" placeholder="กรอกตำแหน่งเลขที่" name="ranknum" value="<?php echo $row['pw_ranknum']; ?>">

									<!-- 7 -->
									<label><b>ตำแหน่ง</b></label>
									<select class="custom-select" name="rank">
										<option><?php echo $row['pw_rank']; ?></option>
									</select>

									<!-- 8 -->
									<label><b>หน่วยงาน</b></label>
									<select class="custom-select" name="agency">
										<option><?php echo $row['pw_agency']; ?></option>
									</select>

									<!-- 9 -->
									<label><b>ประเภท </b></label>
									<input type="text" placeholder="กรอกประเภท" name="category" value="<?php echo $row['pw_category']; ?>" required>

									<!-- 10 -->
									<label><b>จำนวนตำแหน่งว่าง</b></label>
									<input type="text" placeholder="กรอกจำนวนตำแหน่งว่าง" name="rankblank" onKeyPress="if(this.value.length==3) return false;" value="<?php echo $row['pw_rankblank']; ?>" required>

									<!-- 11 -->
									<label><b>อัตราค่าจ้าง</b></label>
									<input type="text" placeholder="กรอกอัตราค่าจ้าง" name="wagerate" onKeyPress="if(this.value.length==10) return false;" value="<?php echo $row['pw_wagerate']; ?>" required>


								</div>

								<div class="col-md-6 col-sm-6">
									<!-- 12 -->
									<label><b>วันที่ประกาศรายชื่อ*</b></label>
									<input class="custom-selects" type="date" name="ancnameday" value="<?php echo $row['pw_ancnameday']; ?>">

									<!-- 13 -->
									<label><b>สอบของเขียน</b></label>
									<input type="text" placeholder="กรอกสอบของเขียน" name="writtenexam" value="<?php echo $row['pw_writtenexam']; ?>" required>

									<!-- 14 -->
									<label><b>วันที่สอบ*</b></label>
									<input class="custom-selects" type="date" name="wted" value="<?php echo $row['pw_wted']; ?>">

									<!-- 15 -->
									<label><b>วันที่ประกาศผลสอบ*</b></label>
									<input class="custom-selects" type="date" name="wterd" value="<?php echo $row['pw_wterd']; ?>">

									<!-- 16 -->
									<label><b>สอบสัมภาษณ์</b></label>
									<input type="text" placeholder="กรอกสอบสัมภาษณ์ " name="interview" value="<?php echo $row['pw_interview']; ?>" required>

									<!-- 17 -->
									<label><b>วันที่สอบ*</b></label>
									<input class="custom-selects" type="date" name="itved" value="<?php echo $row['pw_itved']; ?>">

									<!-- 18 -->
									<label><b>วันที่ประกาศผลสอบ*</b></label>
									<input class="custom-selects" type="date" placeholder="กรอกวันที่ประกาศผลสอบ" name="itverd" value="<?php echo $row['pw_itverd']; ?>">

								</div>
								<div class="col-md-12 col-sm-6">
									<hr>
									<!-- 19 -->
									<label><b>หมายเหตุ</b></label>
									<input type="text" placeholder="กรอกหมายเหตุ" name="note" value="<?php echo $row['pw_note']; ?>">
								</div>
							</div>
						<?php
					}
						?>
						<hr>
						<div class="row">
							<div class="col-md-4 col-sm-6 text-center">
								<ul class="actions">
									<li><a href="authen_show.php" class="button big">ย้อนกลับ</a></li>
								</ul>
							</div>
							<div class="col-md-4 col-sm-6">
								<button type="submit" name="saveedit">แก้ไขข้อมูล</button>
							</div>
							<!-- <div class="col-md-4 col-sm-6">
								<button type="submit" class="button big" name="clear">ล้างข้อมูล</button>
							</div> -->
						</div>
						</div>
					</form>

			</section>

		</div>

	</body>

<?php

}
?>