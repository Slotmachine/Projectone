<?php

define('SERVER', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'data001');

class DB_conn
{

  function __construct()
  {
    $conn = mysqli_connect(SERVER, USER, PASS, DBNAME);
    $this->dbcon = $conn;
    mysqli_query($conn, 'SET CHARACTER SET UTF8');
    echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    } else {
      /*  echo "สำเร็จ"; */
    }
  }


  public function login($uname, $pass)
  {
    $loginquery = mysqli_query($this->dbcon, "SELECT NUM_OT FROM tb_nuser WHERE NUM_OT = '$uname' AND Upass = '$pass'");
    return $loginquery;
  }


  public function showdata()
  {
    $result = mysqli_query($this->dbcon, "SELECT * FROM tb_work");
    return $result;
  }
  public function showtable()
  {
    $result = mysqli_query($this->dbcon, "SELECT * FROM tb_work ORDER BY pw_id DESC");
    return $result;
  }
  public function showtables()
  {
    $result = mysqli_query($this->dbcon, "SELECT * FROM tb_work ORDER BY pw_id DESC LIMIT 5");
    return $result;
  }
  public function showdata1()
  {
    $result = mysqli_query($this->dbcon, "SELECT * FROM tb_position");
    return $result;
  }
  public function showdata2()
  {
    $result = mysqli_query($this->dbcon, "SELECT * FROM sev_position");
    return $result;
  }



  public function add(
    $pw_fullname,
    $pw_fancday,
    $pw_lancday,
    $pw_fregisday,
    $pw_lregisday,
    $pw_status,
    $pw_rank,
    $pw_ranknum,
    $pw_agency,
    $pw_category,
    $pw_rankblank,
    $pw_wagerate,
    $pw_ancnameday,
    $pw_writtenexam,
    $pw_wted,
    $pw_wterd,
    $pw_interview,
    $pw_itved,
    $pw_itverd,
    $pw_note
  ) {
    $result = mysqli_query($this->dbcon, "INSERT INTO tb_work(
      pw_fullname,
      pw_fancday,
      pw_lancday,
      pw_fregisday,
      pw_lregisday,
      pw_status,
      pw_rank,
      pw_ranknum,
      pw_agency,
      pw_category,
      pw_rankblank,
      pw_wagerate,
      pw_ancnameday,
      pw_writtenexam,
      pw_wted,
      pw_wterd,
      pw_interview,
      pw_itved,
      pw_itverd,
      pw_note
      ) VALUES(
      '$pw_fullname',
      '$pw_fancday',
      '$pw_lancday',
      '$pw_fregisday',
      '$pw_lregisday',
      '$pw_status',
      '$pw_rank',
      '$pw_ranknum',
      '$pw_agency',
      '$pw_category',
      '$pw_rankblank',
      '$pw_wagerate',
      '$pw_ancnameday',
      '$pw_writtenexam',
      '$pw_wted',
      '$pw_wterd',
      '$pw_interview',
      '$pw_itved',
      '$pw_itverd',
      '$pw_note'
        )");
    return $result;
  }



/*   public function addview(
    $pw_views,
    $userid
  ) {
    $result = mysqli_query($this->dbcon, "UPDATE tb_work SET pw_views = '$pw_views' + 1, WHERE pw_id = '$userid'");
    return $result;
  } */



  public function getid($userid)
  {
    $result = mysqli_query($this->dbcon, "SELECT * FROM tb_work WHERE pw_id = '$userid'");
    return $result;
  }

  public function edit(
    $pw_fancday,
    $pw_lancday,
    $pw_fregisday,
    $pw_lregisday,
    $pw_status,
    $pw_rank,
    $pw_ranknum,
    $pw_agency,
    $pw_category,
    $pw_rankblank,
    $pw_wagerate,
    $pw_ancnameday,
    $pw_writtenexam,
    $pw_wted,
    $pw_wterd,
    $pw_interview,
    $pw_itved,
    $pw_itverd,
    $pw_note,
    $userid
  ) {
    $result = mysqli_query($this->dbcon, "UPDATE tb_work SET 
    pw_fancday = '$pw_fancday',
    pw_lancday = '$pw_lancday',
    pw_fregisday = '$pw_fregisday',
    pw_lregisday = '$pw_lregisday',
    pw_status = '$pw_status',
    pw_rank = '$pw_rank',
    pw_ranknum = '$pw_ranknum',
    pw_agency = '$pw_agency',
    pw_category = '$pw_category',
    pw_rankblank = '$pw_rankblank',
    pw_wagerate = '$pw_wagerate',
    pw_ancnameday = '$pw_ancnameday',
    pw_writtenexam = '$pw_writtenexam',
    pw_wted = '$pw_wted',
    pw_wterd = '$pw_wterd',
    pw_interview = '$pw_interview',
    pw_itved = '$pw_itved',
    pw_itverd = '$pw_itverd',
    pw_note = '$pw_note '
    WHERE pw_id = '$userid'");
    return $result;
  }

  public function edits(
    $pw_fullname,
    $pw_fancday,
    $pw_lancday,
    $pw_fregisday,
    $pw_lregisday,
    $pw_status,
    $pw_rank,
    $pw_ranknum,
    $pw_agency,
    $pw_category,
    $pw_rankblank,
    $pw_wagerate,
    $pw_ancnameday,
    $pw_writtenexam,
    $pw_wted,
    $pw_wterd,
    $pw_interview,
    $pw_itved,
    $pw_itverd,
    $pw_note,
    $userid
  ) {
    $result = mysqli_query($this->dbcon, "UPDATE tb_work SET 
    pw_fullname = '$pw_fullname',
    pw_fancday = '$pw_fancday',
    pw_lancday = '$pw_lancday',
    pw_fregisday = '$pw_fregisday',
    pw_lregisday = '$pw_lregisday',
    pw_status = '$pw_status',
    pw_rank = '$pw_rank',
    pw_ranknum = '$pw_ranknum',
    pw_agency = '$pw_agency',
    pw_category = '$pw_category',
    pw_rankblank = '$pw_rankblank',
    pw_wagerate = '$pw_wagerate',
    pw_ancnameday = '$pw_ancnameday',
    pw_writtenexam = '$pw_writtenexam',
    pw_wted = '$pw_wted',
    pw_wterd = '$pw_wterd',
    pw_interview = '$pw_interview',
    pw_itved = '$pw_itved',
    pw_itverd = '$pw_itverd',
    pw_note = '$pw_note '
    WHERE pw_id = '$userid'");
    return $result;
  }


  public function delete($userid)
  {
    $deleterecord = mysqli_query($this->dbcon, "DELETE FROM tb_work WHERE pw_id = '$userid'");
    return $deleterecord;
  }
}
