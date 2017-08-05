<?
session_start();
require "conn.php";
require "ip.php";
header('Content-type:text/json;charset=utf-8');
$id=mysql_real_escape_string($_REQUEST["article_id"]);
$sql ="SELECT * FROM `articles` where id='$id'"; //SQL语句
$result = mysql_query($sql,$conn); //查询

if($row = mysql_fetch_array($result)){
    echo json_encode($row,JSON_UNESCAPED_UNICODE);

}
exit;