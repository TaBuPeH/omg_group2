<?php

require_once("db.class.php");

$info = array();

$info['user_id'] = $_SESSION['logged_user']['id'];
$info['message'] = htmlentities(mysqli_real_escape_string($db->dbHandle,$_REQUEST['message']));
$info['ondate'] = date("Y-m-d H:i:s");
$db->saveArray("messages", $info);
/*
echo "<pre>";
print_r($messages);
*/