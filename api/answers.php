<?
session_start();
require "conn.php";
require "ip.php";
header('Content-type:text/json;charset=utf-8');
$ask_id=mysql_real_escape_string($_REQUEST["ask_id"]);
$sql ="SELECT * FROM `answers` where ask_id='$ask_id' order by id desc"; //SQL语句
$result = mysql_query($sql,$conn); //查询
$arr=array();
while($row = mysql_fetch_array($result)){
    array_push($arr,$row);
}
echo json_encode($arr,JSON_UNESCAPED_UNICODE);
exit;