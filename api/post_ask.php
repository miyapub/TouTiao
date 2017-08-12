<?
session_start();
require "conn.php";
require "ip.php";
$method = $_SERVER['REQUEST_METHOD'];
if($method==='POST'){
    $local_ip=mysql_real_escape_string($_POST["local_ip"]);
    $title=mysql_real_escape_string($_POST["title"]);
    $text=mysql_real_escape_string($_POST["text"]);
    $tags=mysql_real_escape_string($_POST["tags"]);
    $author=mysql_real_escape_string($_POST["author"]);
    $sql="INSERT INTO `asks` (`id`, `title`, `text`, `tags`, `author`, `time`, `ip`, `local_ip`) VALUES (NULL, '$title', '$text', '$tags', '$author', CURRENT_TIMESTAMP, '$ip', '$local_ip'); ";
    $result = mysql_query($sql,$conn);
    $id=mysql_insert_id($conn);
    echo $id;
}