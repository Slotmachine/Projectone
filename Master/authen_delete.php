<?php

include_once('services.php');

if (isset($_GET['del'])) {
    $userid = $_GET['del'];
    $deletedata = new DB_conn();
    $sql = $deletedata->delete($userid);


    if ($sql) {
        echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
        echo "<script>window.location.href='authen_show.php'</script>";
    }
}
