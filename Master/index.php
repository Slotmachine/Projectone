<?php
session_start();
include_once('interface.php');
include_once('services.php');
date_default_timezone_set("Asia/Bangkok");
$i = 1;

?>

<title>DEMO SYSTEM</title>

<body>

	<!-- Header -->
	<header id="header" class="alt">
		<div class="inner">
			<h1>DEMOSYSTEM</h1>
			<p>BY WORAPONG AUTEN OR <a href="login.php">LOGIN</a></p>
		</div>
		<style>
			body {
				background-color: #f4f4f4;
			}

			@media only screen and (max-width: 600px) {
				.fa-book {
					font-size: 2em;
				}
			}
		</style>
	</header>

	<!-- Wrapper -->
	<div id="wrapper">
		<section id="intro" class="main special">
			<span class="icon fa-bullhorn major"></span>
			<h2>ข่าวรับสมัครงาน</h2>
			<div class="container mt-4 mb-3">
				<table class="table table-hover">
					<thead>
						<th class="text-center">ลำดับที่</th>
						<th class="text-center">รายละเอียด</th>
						<th class="text-center">รายละเอียดเพิ่มเติม</th>
					</thead>
					<tbody>
						<?php
						$fetchdata = new DB_conn();
						$sql = $fetchdata->showtables();
						while ($row = mysqli_fetch_array($sql)) {
							$date_start = $row['pw_fancday'];
							$date_end = $row['pw_lancday'];
							if (time() >= strtotime($date_start) && time() <= strtotime($date_end)) {
								echo '
								<tr>
									<td>' . $i . '</td>
									<td>
										ประกาศ ณ วันที่: ' . $row['pw_fregisday'] . ' <br>
										รับสมัคร: ' . $row['pw_rank'] . ' <br>
										จำนวน: ' . $row['pw_rankblank'] . '</td>
									<td>
										<ul class="actions">
											<i class="fas fa-book fa-2x mt-4 viewdata" type="button" data-toggle="modal" data-target=".bd-example-modal-xl" id="' . $row['pw_id'] . '"></i>
										</ul>
									</td>
								</tr>
								';
								$i++;
							}
						}
						?>
						<!-- <tr>
								<td><?php echo $i; ?></td>
								<td>

									วันที่: <?php echo $row['pw_fancday']; ?> <br>
									รับสมัคร: <?php echo $row['pw_rank']; ?><br>
									จำนวน: <?php echo $row['pw_rankblank']; ?> อัตรา
								</td>
								<td>
									<i class="fas fa-book fa-2x mt-4 viewdata" type="button" data-toggle="modal" data-target=".bd-example-modal-xl" id="<?php echo $row['pw_id'] ?>"></i>
								</td>
							</tr> -->
					</tbody>
				</table>
			</div>
			<ul class="actions">
				<li><a href="indexs.php" class="button big">เพิ่มเติม</a></li>
			</ul>
		</section>

		<!-- Login -->
		<section id="intro" class="main special">
			<h2>จัดการข้อมูล</h2>
			<p>สามารถล็อคอินเข้าสู่ระบบเพื่อจัดการข้อมูลด้วย<br />
				มีระบบ ดังนี้ สร้างโพสต์รับสมัครพนักงาน แก้ไขการรับสมัคร<br />
				ดูบันทึกเวลาลงประกาศ ตั้งเวลาประกาศต่างๆ และอื่นๆ</p>
			<ul class="actions">
				<li><a href="login.php" class="button big">LOGIN</a></li>
			</ul>
		</section>
	</div>

</body>

<script>
	$(document).ready(function() {
		$('.viewdata').click(function() {
			var uid = $(this).attr("id");
			$.ajax({
				url: "servicemodal.php",
				method: "post",
				data: {
					id: uid
				},
				success: function(data) {
					$('#detail').html(data)
					$('#exampleModal').modal('show');
				}
			});
		});
	});
</script>
<?php
include_once('footer.php');
include_once('viewmodal.php');
?>