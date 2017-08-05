<?
session_start();
require "conn.php";
require "ip.php";
$method = $_SERVER['REQUEST_METHOD'];
if($method==='POST'){
    $local_ip=mysql_real_escape_string($_POST["local_ip"]);
    $title=mysql_real_escape_string($_POST["title"]);
    $text=mysql_real_escape_string($_POST["text"]);
    $sql="INSERT INTO `articles` (`id`, `title`, `headPic`, `time`, `author`, `text`, `viewCount`, `ip`, `local_ip`) VALUES (NULL, '$title', NULL, CURRENT_TIMESTAMP, '来自网络', '$text', '0', '$ip', '$local_ip'); ";
    $result = mysql_query($sql,$conn);
    $id=mysql_insert_id($conn);
    echo $id;
}