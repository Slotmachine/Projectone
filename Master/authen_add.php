<?php
session_start();
include_once('interface.php');
include_once('services.php');
$consver = new DB_conn();

if (isset($_POST['savedata'])) {
	$in_fullname = $_POST['pw_fullname'];
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

	$sql = $consver->add(
		$in_fullname,
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
		$in_note
	);
	if ($sql) {
		echo "<script>alert('บันทึกข้อมูลเรียบร้อย!');</script>";
		echo "<script>window.location.href='authen.php'</script>";
	} else {
		echo "<script>alert('มีบางอย่างผิดพลาด! กรุณาลองอีกครั้ง!');</script>";
		echo "<script>window.location.href='authen_add.php'</script>";
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
				<span class="icon fa-bullhorn major"></span>
				<h2>สร้างโพสต์</h2>
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

				<div class="row ml-3">
					<div class="row col-md-6 col-sm-6 text-left">
						<div style="font-size: 18px; color: red;">*หมายเหตุ : &nbsp;</div>
						<div style="margin-top: 2px;">กดตรงรูปปฏิทินเพื่อตั้งวัน/เดือน/ปี</div>
					</div>
				</div>
				<form action="" method="post">
					<?php
					$id = $_SESSION['id'];
					$outp = '';
					$conn = mysqli_connect("localhost", "root", "", "data001");
					mysqli_query($conn, 'SET CHARACTER SET UTF8');
					$query = "SELECT * FROM tb_person WHERE NUM_OT=$id";
					$sql = mysqli_query($conn, $query);
					?>
					<div class="container">
						<hr>
						<div class="row mb-2" style="display: none;">
							<div class="col-md-6 col-sm-6"></div>
							<div class="col-md-6 col-sm-6">
								<!-- 0 -->
								<label><b>ชื่อ-นามสกุล ผู้ประกาศ</b></label>
								<?php
								while ($row = mysqli_fetch_array($sql)) {
								?>
									<input type="text" type="date" value="<?php echo $row['Fname']," ", $row['Lname']; ?>" name="pw_fullname" readonly/>
								<?php } ?>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<!-- 1 -->
								<label><b>ตั้งวันที่เริ่มประกาศ</b></label>
								<input class="custom-selects" type="date" value="{{ $new_date }}" name="pw_fancday" required />
							</div>
							<div class="col-md-6 col-sm-6">
								<!-- 2 -->
								<label><b>ตั้งวันที่สิ้นสุดประกาศ</b></label>
								<input class="custom-selects" type="date" value="{{ $new_date }}" name="pw_lancday" required />
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<!-- 3 -->
								<label><b>เริ่มรับสมัครตั้งแต่วันที่</b></label>
								<input class="custom-selects" type="date" value="{{ $new_date }}" name="pw_fregisday" required />
							</div>
							<div class="col-md-6 col-sm-6">
								<!-- 4 -->
								<label><b>สิ้นสุดรับสมัครถึงวันที่</b></label>
								<input class="custom-selects" type="date" value="{{ $new_date }}" name="pw_lregisday" required />
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-6 col-sm-6">

								<!-- 5 -->
								<label><b>สถานะ</b></label>
								<input type="text" placeholder="กรอกสถานะ" name="status" maxlength="100" required>

								<!-- 6 -->
								<label><b>ตำแหน่งเลขที่</b></label>
								<input type="text" placeholder="กรอกตำแหน่งเลขที่" name="ranknum" maxlength="15" required>

								<!-- 7 -->
								<label><b>ตำแหน่ง</b></label>

								<select class="custom-select" name="rank" required>
									<?php
									$result = $consver->showdata1();
									echo '<option>เลือกตำแหน่ง</option>';
									while ($row = mysqli_fetch_array($result)) {
										echo '<option value="' . $row['position_name'] . '">' . $row['position_name'] . '</option>';
									}
									echo '</select>';
									?>
								</select>

								<!-- 8 -->
								<label><b>หน่วยงาน</b></label>
								<select class="custom-select" name="agency" required>
									<?php
									$result2 = $consver->showdata2();
									echo '<option>เลือกหน่วยงาน</option>';
									while ($row = mysqli_fetch_array($result2)) {
										echo '<option value="' . $row['position_name'] . '">' . $row['position_name'] . '</option>';
									}
									echo '</select>';
									?>
								</select>

								<!-- 9 -->
								<label><b>ประเภท </b></label>
								<input type="text" placeholder="กรอกประเภท" name="category" maxlength="50" required>

								<!-- 10 -->
								<label><b>จำนวนตำแหน่งว่าง</b></label>
								<input class="form-controls" type="number" placeholder="จำนวนตำแหน่งว่าง" onKeyPress="if(this.value.length==3) return false;" name="rankblank" required>

								<!-- 11 -->
								<label><b>อัตราค่าจ้าง</b></label>
								<input class="form-controls" type="number" placeholder="จำนวนอัตราค่าจ้าง" onKeyPress="if(this.value.length==10) return false;" name="wagerate" required>

							</div>

							<div class="col-md-6 col-sm-6">

								<!-- 12 -->
								<label><b>วันที่ประกาศรายชื่อ</b></label>
								<input class="custom-selects" type="date" value="{{ $new_date }}" name="ancnameday" />

								<!-- 13 -->
								<label><b>สอบของเขียน</b></label>
								<input type="text" placeholder="กรอกสอบของเขียน" name="writtenexam" required>

								<!-- 14 -->
								<label><b>วันที่สอบ*</b></label>
								<input class="custom-selects" type="date" value="{{ $new_date }}" name="wted" />

								<!-- 15 -->
								<label><b>วันที่ประกาศผลสอบ*</b></label>
								<input class="custom-selects" type="date" value="{{ $new_date }}" name="wterd" />

								<!-- 16 -->
								<label><b>สอบสัมภาษณ์</b></label>
								<input type="text" placeholder="กรอกสอบสัมภาษณ์ " name="interview" required>

								<!-- 17 -->
								<label><b>วันที่สอบ*</b></label>
								<input class="custom-selects" type="date" value="{{ $new_date }}" name="itved" />

								<!-- 18 -->
								<label><b>วันที่ประกาศผลสอบ*</b></label>
								<input class="custom-selects" type="date" value="{{ $new_date }}" name="itverd" />

							</div>

							<div class="col-md-12 col-sm-6">
								<hr>
								<!-- 19 -->
								<label><b>หมายเหตุ</b></label>
								<input type="text" placeholder="กรอกหมายเหตุ" name="note">
							</div>
						</div>

						<hr>
						<div class="row">
							<div class="col-md-4 col-sm-6 text-center">
								<ul class="actions">
									<li><a href="authen.php" class="button big">ย้อนกลับ</a></li>
								</ul>
							</div>
							<div class="col-md-4 col-sm-6">
								<button type="submit" name="savedata">บันทึกข้อมูล</button>
							</div>
							<div class="col-md-4 col-sm-6">
								<a href="authen_show.php" type="button" class="button big">ดูรายละเอียด</a>
							</div>
						</div>
					</div>
				</form>

			</section>
		</div>
	</body>
<?php

}
?>