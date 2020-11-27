<?php
session_start();
include_once('interface.php');
include_once('services.php');

$i = 1;



if ($_SESSION['id'] == "") {
	header("location: login.php");
} else {

?>

	<head>
		<title>Authentication</title>
	</head>

	<body>

		<div class="container col-xl-12 col-lg-12 col-md-12 col-sm-6 text-center mt-5 mb-4">
			<h1>ข่าวรับสมัครงาน</h1>
			<section id="cta" class="main special">
				<div class="mb-3">
					<table class="table table-hover">
						<thead>
							<th class="text-center">ลำดับที่</th>
							<th class="text-center">วันที่ประกาศ</th>
							<th class="text-center">วันที่สิ้นสุด</th>
							<th class="text-center">ประเภท</th>
							<th class="text-center">ตำแหน่ง</th>
							<th class="text-center">หน่วยงาน</th>
							<th class="text-center">จำนวน</th>
							<th class="text-center">อัตราค่าจ้าง</th>
							<th class="text-center">สถานะ</th>
							<th class="text-center">หมายเหตุ</th>
							<th class="text-center">เวลาโพสต์</th>
							<th class="text-center">รายละเอียด</th>
							<th class="text-center">แก้ไข</th>
							<th class="text-center">ลบ</th>
						</thead>
						<tbody>
							<?php
							$fetchdata = new DB_conn();
							$sql = $fetchdata->showtable();
							while ($row = mysqli_fetch_array($sql)) {
							?>
								<tr>
									<td><?php echo $i; ?></td>
									<td><?php echo $row['pw_fregisday']; ?></td>
									<td><?php echo $row['pw_lregisday']; ?></td>
									<td><?php echo $row['pw_category']; ?></td>
									<td><?php echo $row['pw_rank']; ?></td>
									<td><?php echo $row['pw_agency']; ?></td>
									<td><?php echo $row['pw_rankblank']; ?></td>
									<td><?php echo $row['pw_wagerate']; ?></td>
									<td><?php echo $row['pw_status']; ?></td>
									<td><?php echo $row['pw_note']; ?></td>
									<td><?php echo $row['pw_datatime']; ?></td>
									<td><a href="authen_showed.php?id=<?php echo $row['pw_id']; ?>" class="btn fas fa-book fa-2x"></a>
									</td>
									<td><a href="authen_edit.php?id=<?php echo $row['pw_id']; ?>" class="btn btn-warning">แก้ไข</a></td>
									<td><a href="authen_delete.php?del=<?php echo $row['pw_id']; ?>" class="btn btn-danger">ลบ</a></td>
								</tr>
							<?php
								$i++;
							}
							?>
						</tbody>
					</table>
					<ul class="actions">
						<li><a href="authen.php" class="button big">ย้อนกลับ</a></li>
						<li><a href="authen_add.php" class="button big">สร้างโพสต์ประกาศ</a></li>
					</ul>
				</div>
			</section>
		</div>

	</body>

<?php
}
?>