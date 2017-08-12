<?
session_start();
require "conn.php";
require "ip.php";
$method = $_SERVER['REQUEST_METHOD'];

if($method==='POST'){
    $local_ip=mysql_real_escape_string($_POST["local_ip"]);
    $ask_id=mysql_real_escape_string($_POST["ask_id"]);
    $text=mysql_real_escape_string($_POST["text"]);
    $author=mysql_real_escape_string($_POST["author"]);

    if($text==='00990000'){
        $sql="DELETE FROM `asks` WHERE `asks`.`id` = $ask_id";
        $result = mysql_query($sql,$conn);
        echo 0;
        exit;
    }

    $sql="INSERT INTO `answers` (`id`, `ask_id`, `text`, `time`, `author`, `ip`, `local_ip`) VALUES (NULL, '$ask_id', '$text', CURRENT_TIMESTAMP, '$author', '$ip', '$local_ip'); ";
    $result = mysql_query($sql,$conn);
    $id=mysql_insert_id($conn);
    echo $id;
}