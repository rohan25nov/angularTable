<?php
include 'sql.php';
$str="select * from userdetails where ActiveFlag=1";
$res=mysqli_query($sql,$str);
$details=[];
while ($arr=mysqli_fetch_assoc($res))
{
    $details[]=$arr;
}
echo json_encode($details);
