<?php
session_start();
include_once('interface.php');
include_once('services.php');


if (isset($_POST[''])) {
	$userid = $_GET['id'];
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
	$in_regisday = $_POST['regisday'];
	$in_ancnameday = $_POST['ancnameday'];
	$in_writtenexam = $_POST['writtenexam'];
	$in_wted = $_POST['wted'];
	$in_wterd = $_POST['wterd'];
	$in_interview = $_POST['interview'];
	$in_itved = $_POST['itved'];
	$in_itverd = $_POST['itverd'];
	$in_note = $_POST['note'];

	$sql = $updatedata->edits(
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
		$in_note,
		$userid
	);
}

if ($_SESSION['id'] == "") {
	header("location: login.php");
} else {


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
				<span class="icon fa-diamond major"></span>
				<h2>ข้อมูลประกาศ</h2>

				<?php
				$userid = $_GET['id'];
				$updateuser = new DB_conn();
				$sql = $updateuser->getid($userid);
				while ($row = mysqli_fetch_array($sql)) {
				?>
					<form action="" method="post">
						<div class="container">
							<hr>
							<div class="row mt-4">
								<div class="col-sm-3 text-right">ผู้สร้างโพสต์ประกาศ :</div>
								<div class="col-sm-3 text-left"><b><?php echo $row['pw_fullname'];?></b></div>
								<div class="col-sm-6 text-right"></div>
							</div>
							<div class="row mt-2">
								<div class="col-sm-3 text-right">สร้างโพสต์ประกาศเมื่อ :</div>
								<div class="col-sm-3 text-left"><?php echo $row['pw_datatime'];?></div>
								<div class="col-sm-3 text-right">จำนวนคนดู</div>
								<div class="col-sm-3 text-left"><?php echo $row['pw_views'];?></div>
							</div>
							<div class="row mt-2">
								<div class="col-sm-3 text-right">ตั้งวันที่เริ่มประกาศ :</div>
								<div class="col-sm-3 text-left"><?php echo $row['pw_fancday'];?></div>
								<div class="col-sm-3 text-right">ตั้งวันที่สิ้นสุดประกาศ :</div>
								<div class="col-sm-3 text-left"><?php echo $row['pw_lancday'];?></div>
							</div>
							<div class="row mt-4">
								<div class="col-sm-3 text-right">เริ่มรับสมัครตั้งแต่วันที่ :</div>
								<div class="col-sm-3 text-left"><?php echo $row['pw_fregisday'];?></div>
								<div class="col-sm-3 text-right">สิ้นสุดรับสมัครถึงวันที่ :</div>
								<div class="col-sm-3 text-left"><?php echo $row['pw_lregisday'];?></div>
							</div>
							<div class="row mt-2">
								<div class="col-sm-3 text-right">สถานะ :</div>
								<div class="col-sm-3 text-left"><?php echo $row['pw_status']; ?></div>
								<div class="col-sm-3"></div>
								<div class="col-sm-3"></div>
							</div>
							<div class="row mt-2">
								<div class="col-sm-3 text-right">ตำแหน่ง :</div>
								<div class="col-sm-3 text-left"><?php echo $row['pw_rank']; ?></div>

								<div class="col-sm-3 text-right">ตำแหน่งเลขที่ :</div>
								<div class="col-sm-3 text-left"><?php echo $row['pw_ranknum']; ?></div>
							</div>
							<div class="row mt-2">
								<div class="col-sm-3 text-right">หน่วยงาน :</div>
								<div class="col-sm-3 text-left"><?php echo $row['pw_agency']; ?></div>

								<div class="col-sm-3 text-right">ประเภท :</div>
								<div class="col-sm-3 text-left"><?php echo $row['pw_category']; ?></div>
							</div>
							<div class="row mt-2">
								<div class="col-sm-3 text-right">จำนวนตำแหน่งว่าง :</div>
								<div class="col-sm-3 text-left"><?php echo $row['pw_rankblank']; ?></div>

								<div class="col-sm-3 text-right">อัตราค่าจ้าง :</div>
								<div class="col-sm-3 text-left"><?php echo $row['pw_wagerate']; ?></div>
							</div>
							<div class="row mt-2 mb-4">
								<div class="col-sm-3 text-right">วันที่ประกาศรายชื่อ :</div>
								<div class="col-sm-3 text-left"><?php echo $row['pw_ancnameday']; ?></div>
							</div>
							<div class="row mt-2">
								<div class="col-sm-3 text-right">สอบข้อเขียน :</div>
								<div class="col-sm-3 text-left"><?php echo $row['pw_writtenexam']; ?></div>
								<div class="col-sm-3"></div>
								<div class="col-sm-3"></div>
							</div>
							<div class="row mt-2">
								<div class="col-sm-3 text-right">วันที่สอบ :</div>
								<div class="col-sm-3 text-left"><?php echo $row['pw_wted']; ?></div>

								<div class="col-sm-3 text-right">วันที่ประกาศผลสอบ :</div>
								<div class="col-sm-3 text-left"><?php echo $row['pw_wterd']; ?></div>
							</div>
							<div class="row mt-2">
								<div class="col-sm-3 text-right">สัมภาษณ์เขียน :</div>
								<div class="col-sm-3 text-left"><?php echo $row['pw_interview']; ?></div>
								<div class="col-sm-3"></div>
								<div class="col-sm-3"></div>
							</div>
							<div class="row mt-2">
								<div class="col-sm-3 text-right">วันที่สอบ :</div>
								<div class="col-sm-3 text-left"><?php echo $row['pw_itved']; ?></div>

								<div class="col-sm-3 text-right">วันที่ประกาศผลสอบ :</div>
								<div class="col-sm-3 text-left"><?php echo $row['pw_itverd']; ?></div>
							</div>
							<div class="row mt-2">
								<div class="col-sm-3 text-right">หมายเหตุ :</div>
								<div class="col-sm-3 text-left"><?php echo $row['pw_note']; ?></div>
								<div class="col-sm-3"></div>
								<div class="col-sm-3"></div>
							</div>
						<?php
					}
						?>
						<hr>
						<div class="row">
							<div class="col-md-4 col-sm-6 text-center">

							</div>
							<div class="col-md-4 col-sm-6">
								<ul class="actions">
									<li><a href="authen_show.php" class="button big">ย้อนกลับ</a></li>
								</ul>
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