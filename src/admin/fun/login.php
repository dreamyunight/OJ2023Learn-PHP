<?php

require_once("../../config/database.php");

if (!$db) {
  die('Fail to connect to Server');
} //如果连接失败就报错并且中断程序

if (!isset($_POST['username']) || !isset($_POST['password'])) {
  die("账号和密码不能为空!");
}

$user = mysqli_real_escape_string($db, $_POST['username']);
$pass = mysqli_real_escape_string($db, $_POST['password']);

$sql = 'select 
          * 
        from
          student
        where 
          Sno=' . "'{$user}'
        and 
          Spassword=" . "'$pass';";
$res = mysqli_query($db, $sql);
$row = $res->num_rows; //将获取到的用户名和密码拿到数据库里面去查找匹配
if ($row != 0) {
  session_start();
  $_SESSION["admin"] = $user;
  $_SESSION["limit"] = "root";
  header('Location: ../home.php');
} else {
  echo "<script>alert('用户名或密码错误');history.go(-1);</script>";
}
