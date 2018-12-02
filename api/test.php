<?php
$mysql_server_name="qdm174930677.my3w.com"; //数据库服务器名称
$mysql_username="qdm174930677";                // 连接数据库用户名
$mysql_password="Zzz123456";               // 连接数据库密码
$mysql_database="qdm174930677_db";         // 数据库的名字

//连接到数据库
$conn=mysqli_connect($mysql_server_name,$mysql_username,$mysql_password,$mysql_database);   

    $sql = 'select * from friendlink';

    $res = mysqli_query($conn,$sql);
    if($res){
        function gbk2utf8($data){
            if(is_array($data)){
                return array_map('gbk2utf8', $data);
            };
            return iconv('gbk','utf-8',$data);
        };
        $array = array();
        while ($row = $res->fetch_assoc()) {
            $array[] = $row;
        };
        print_r($array);
        //var_dump($data);

        // $data = mysqli_fetch_all($res,1);
     

        // //将编码转换为utf-8
        // function gbk2utf8($data){
        //     if(is_array($data)){
        //         return array_map('gbk2utf8', $data);
        //     };
        //     return iconv('gbk','utf-8',$data);
        // };
        //     //将返回值转换为json 字符串,
        //     echo json_encode(gbk2utf8($data));
       
    }else{
        echo "select Eorr";
    };
   
//关闭数据库
    //mysqli_close($conn);
?>


