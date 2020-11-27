<style>
    @media only screen and (max-width: 600px) {

        .col,
        .col-1,
        .col-10,
        .col-11,
        .col-12,
        .col-2,
        .col-3,
        .col-4,
        .col-5,
        .col-6,
        .col-7,
        .col-8,
        .col-9,
        .col-auto,
        .col-lg,
        .col-lg-1,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12,
        .col-lg-2,
        .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9,
        .col-lg-auto,
        .col-md,
        .col-md-1,
        .col-md-10,
        .col-md-11,
        .col-md-12,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9,
        .col-md-auto,
        .col-sm,
        .col-sm-1,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-sm-auto,
        .col-xl,
        .col-xl-1,
        .col-xl-10,
        .col-xl-11,
        .col-xl-12,
        .col-xl-2,
        .col-xl-3,
        .col-xl-4,
        .col-xl-5,
        .col-xl-6,
        .col-xl-7,
        .col-xl-8,
        .col-xl-9,
        .col-xl-auto {
            width: 50% !important;
        }
    }
</style>
<?php
include_once('interface.php');
$id = $_POST['id'];
$outp = '';
$conn = mysqli_connect("localhost", "root", "", "data001");
mysqli_query($conn, 'SET CHARACTER SET UTF8');
$query = "SELECT * FROM tb_work WHERE pw_id =$id";
$sql = mysqli_query($conn, $query);
$outp .= '<div class="container-fluid">';
while ($row = mysqli_fetch_array($sql)) {
    $outp .= '<div class="row mt-2">
                    <div class="col-sm-3 text-right">วันที่ประกาศ :</div>
                    <div class="col-sm-3 text-left">' . $row['pw_fregisday'] . '</div>
                    <div class="col-sm-3 text-right">วันที่สิ้นสุด :</div>
                    <div class="col-sm-3 text-left">' . $row['pw_lregisday'] . '</div>
                </div>';
    $outp .= '<div class="row mt-2">
                    <div class="col-sm-3 text-right">สถานะ :</div>
                    <div class="col-sm-3 text-left">' . $row['pw_status'] . '</div>
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3"></div>
                </div>';
    $outp .= '<div class="row mt-2">
                    <div class="col-sm-3 text-right">ตำแหน่ง :</div>
                    <div class="col-sm-3 text-left">' . $row['pw_rank'] . '</div>

                    <div class="col-sm-3 text-right">ตำแหน่งเลขที่ :</div>
                    <div class="col-sm-3 text-left">' . $row['pw_ranknum'] . '</div>
                </div>';

    $outp .= '<div class="row mt-2">
                    <div class="col-sm-3 text-right">หน่วยงาน :</div>
                    <div class="col-sm-3 text-left">' . $row['pw_agency'] . '</div>

                    <div class="col-sm-3 text-right">ประเภท :</div>
                    <div class="col-sm-3 text-left">' . $row['pw_category'] . '</div>
                </div>';
    $outp .= '<div class="row mt-2">
                    <div class="col-sm-3 text-right">จำนวนตำแหน่งว่าง :</div>
                    <div class="col-sm-3 text-left">' . $row['pw_rankblank'] . '</div>

                    <div class="col-sm-3 text-right">อัตราค่าจ้าง :</div>
                    <div class="col-sm-3 text-left">' . $row['pw_wagerate'] . '</div>
                </div>';
    $outp .= '<div class="row mt-2">
                <div class="col-sm-3 text-right">วันที่ประกาศรายชื่อ :</div>
                <div class="col-sm-3 text-left">' . $row['pw_ancnameday'] . '</div>
            </div>';
    $outp .= '<div class="row mt-2">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6"><hr></div>
                    <div class="col-sm-3"></div>
                </div>';
    $outp .= '<div class="row mt-2">
                    <div class="col-sm-3 text-right">สอบข้อเขียน :</div>
                    <div class="col-sm-3 text-left">' . $row['pw_writtenexam'] . '</div>
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3"></div>
                </div>';
    $outp .= '<div class="row mt-2">
                    <div class="col-sm-3 text-right">วันที่สอบ :</div>
                    <div class="col-sm-3 text-left">' . $row['pw_wted'] . '</div>

                    <div class="col-sm-3 text-right">วันที่ประกาศผลสอบ :</div>
                    <div class="col-sm-3 text-left">' . $row['pw_wterd'] . '</div>
                </div>';
    $outp .= '<div class="row mt-2">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6"><hr></div>
                    <div class="col-sm-3"></div>
                </div>';
    $outp .= '<div class="row mt-2">
                    <div class="col-sm-3 text-right">สัมภาษณ์เขียน :</div>
                    <div class="col-sm-3 text-left">' . $row['pw_interview'] . '</div>
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3"></div>
                </div>';
    $outp .= '<div class="row mt-2">
                    <div class="col-sm-3 text-right">วันที่สอบ :</div>
                    <div class="col-sm-3 text-left">' . $row['pw_itved'] . '</div>

                    <div class="col-sm-3 text-right">วันที่ประกาศผลสอบ :</div>
                    <div class="col-sm-3 text-left">' . $row['pw_itverd'] . '</div>
                </div>';
    $outp .= '<div class="row mt-2">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6"><hr></div>
                    <div class="col-sm-3"></div>
                </div>';
    $outp .= '<div class="row mt-2 mb-4">
                    <div class="col-sm-3 text-right">หมายเหตุ :</div>
                    <div class="col-sm-3 text-left">' . $row['pw_note'] . '</div>
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3"></div>
                </div>';
}
$outp .= '</div">';
echo $outp;
