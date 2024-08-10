<?php
session_start();
if (!isset($_SESSION["admin"])) {
  header("HTTP/1.1 403 Moved Temporatily");
  header("Location: " . "../");
  exit();
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <title>学生选课信息管理系统@2024</title>
  <style>
    * {
      margin: 0;
    }

    body {
      background-color: #f2f2f2;
    }

    .topnav {
      background-color: #70a0d0;
      height: 40px;
      line-height: 40px;
      overflow: hidden;
    }

    .logo {
      font-size: 20px;
      padding-left: 15px;
      color: #f2f2f2;
      vertical-align: middle;
      float: left;

    }

    .userbox {
      color: #eee;
      height: inherit;
      font-size: 14px;
      float: right;
      margin-right: 20px;
    }

    .userbox a:visited {
      color: #eee;
    }

    a {
      text-decoration: none;
    }

    .container {
      width: 100%;
      min-width: 1000px;
      max-width: 1800px;
      margin: 0 auto;
    }

    .main {
      height: 1000px;
      overflow: hidden;
    }

    .homepage a {
      color: #dbdbdb;
    }

    .leftnav {
      width: 20%;
      height: 1000px;
      float: left;
      background-color: #DDDDDD;
    }

    .leftnav a {
      text-decoration: none;
    }

    .homepage {
      font-family: sans-serif;
      text-align: center;
      background-color: #0e84b5;
      font-size: large;
      padding: 10px;
    }

    .item {
      font-family: sans-serif;
      background-color: #ecf0f3;
      text-align: center;
      padding: 10px;
    }

    .item a {
      color: blue;
      text-decoration: none;
      padding: 10px 50px;
    }

    .item a:visited {
      color: blue;
    }

    .item a:hover {
      color: #eee;
    }

    .item:hover {
      background-color: #70a0d0;
    }

    .subtitle {
      font-family: sans-serif;
      text-align: center;
      background-color: #D0DCE0;
      font-size: large;
      padding: 11px;
    }

    .content {
      width: 80%;
      float: left;
    }

    .footer {
      line-height: 100px;
      background-color: #e4e4e4;
      text-align: center;
    }

    iframe {
      margin: 25px;
      height: 950px;
    }
  </style>
</head>

<body>
  <div class="container topnav">
    <div class="logo">
      学生选课信息管理系统
    </div>
    <div class="userbox" style="float:right">
      你好,
      <?= $_SESSION["admin"] ?>
      <a href="./logout.php"> 登出</a>
    </div>

  </div>
  <div class="container main">
    <div class="leftnav">
      <div class="homepage">
        <a href="./welcome.php" target="frame">首页</a>
      </div>
      <div class="subtitle">
        学生管理
      </div>
      <div class="item">
        <a href="./addStudent.php" target="frame">新增学生</a>
      </div>
      <div class="item">
        <a href="./queueStudent.php" target="frame">查询学生</a>
      </div>
    </div>
    <div class="content">
      <iframe name="frame" frameborder="0" width="100%" scrolling="yes" src="./welcome.php"></iframe>
    </div>

  </div>
  <div class="container footer">
    <footer class="my-5 pt-5 text-body-secondary text-center text-small">
      <p class="mb-1">&copy; 数据库系统课程设计@2022–2024</p>
    </footer>
  </div>

</body>

</html>