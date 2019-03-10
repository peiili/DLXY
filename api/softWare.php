<?php
/**
 * www.dlsjf.top/api/softWare.php
 */
  $conn = mysqli_connect('qdm174930677.my3w.com','qdm174930677','Zzz123456','qdm174930677_db');
  $sql = 'select * from softwareshere';
  $res = mysqli_query($conn,$sql);
  $data = array();
  while($row = mysqli_fetch_array($res)){
    $data[] = $row;
  }
  mysqli_close($conn);
  function gbk2utf8($data){
    if(is_array($data)){
      return array_map('gbk2utf8',$data);
    }
    return iconv('gbk','utf-8',$data);
  }
  $raw_success = array('success'=>true,'code'=>200,'sharasoftware'=>gbk2utf8($data));
  echo json_encode($raw_success);
?>