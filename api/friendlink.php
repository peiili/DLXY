<?php
    $conn = mysqli_connect('qdm174930677.my3w.com','qdm174930677','Zzz123456','qdm174930677_db');
    $sql = 'select * from friendlink';
    $res = mysqli_query($conn,$sql);
    // $data = mysqli_fetch_all($res,1);
    $data = array();
    while($row = mysqli_fetch_array($res)) {
        $data[] = $row;
    }
    //关闭链接
    mysqli_close($conn);
    
    //将编码转换为utf-8
    function gbk2utf8($data){
        if(is_array($data)){
            return array_map('gbk2utf8', $data);
        }
        return iconv('gbk','utf-8',$data);
    };
    $raw_success = array('friendLink' => gbk2utf8($data),'success'=>true,'code'=>200);
        //将返回值转换为json 字符串,
    echo json_encode($raw_success);
?>