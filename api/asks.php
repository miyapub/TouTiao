<?
session_start();
require "conn.php";
require "ip.php";
header('Content-type:text/json;charset=utf-8');
$sql ="SELECT * FROM `asks` order by id desc"; //SQL语句
$result = mysql_query($sql,$conn); //查询
$arr=array();
while($row = mysql_fetch_array($result)){
    array_push($arr,$row);
}
echo json_encode($arr,JSON_UNESCAPED_UNICODE);
exit;