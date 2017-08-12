<?
session_start();
require "conn.php";
require "ip.php";
$method = $_SERVER['REQUEST_METHOD'];

if($method==='POST'){
    $local_ip=mysql_real_escape_string($_POST["local_ip"]);
    $answer_id=mysql_real_escape_string($_POST["answer_id"]);
    $text=mysql_real_escape_string($_POST["text"]);
    $author=mysql_real_escape_string($_POST["author"]);
    $sql="INSERT INTO `comments` (`id`, `answer_id`, `text`, `time`, `author`, `ip`, `local_ip`) VALUES (NULL, '$answer_id', '$text', CURRENT_TIMESTAMP, '$author', '$ip', '$local_ip'); ";
    $result = mysql_query($sql,$conn);
    $id=mysql_insert_id($conn);
    echo $id;
}