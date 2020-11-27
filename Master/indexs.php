<?php
session_start();
include_once('interface.php');
include_once('services.php');
$i = 1;

?>


<body>

	<!-- Header -->
	<header>
		<title>DEMO SYSTEM</title>
		<style>
			body {
				background-color: #f4f4f4;
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
						$sql = $fetchdata->showtable();
						while ($row = mysqli_fetch_array($sql)) {
							$date_start = $row['pw_fancday'];
							$date_end = $row['pw_lancday'];
							if (time() >= strtotime($date_start) && time() <= strtotime($date_end)) {
								echo '
								<tr>
									<td>' . $i . '</td>
									<td>
										ประกาศ ณ วันที่: ' . $row['pw_fancday'] . ' <br>
										รับสมัคร: ' . $row['pw_rank'] . ' <br>
										จำนวน: ' . $row['pw_rankblank'] . '</td>
									<td>
										<i class="fas fa-book fa-2x mt-4 viewdata" type="button" data-toggle="modal" data-target=".bd-example-modal-xl" id="' . $row['pw_id'] . '"></i>
									</td>
								</tr>
								';
								$i++;
							}
						}
						?>
					</tbody>
				</table>
			</div>
			<ul class="actions">
				<li><a href="index.php" class="button big">ย้อนกลับ</a></li>
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
include_once('viewmodal.php');
?>