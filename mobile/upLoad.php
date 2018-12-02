<?php

$num = $_GET['num'];
$conn = mysqli_connect('qdm174930677.my3w.com','qdm174930677','Zzz123456','qdm174930677_db');
$sql = "insert into mobileLuck (date,mobile) values (now(),'$num')";
$res = mysqli_query($conn,$sql);
$data = mysqli_fetch_all($res,1);
// echo '<pre>';
// var_dump($data);
mysqli_close($conn);
echo $res;