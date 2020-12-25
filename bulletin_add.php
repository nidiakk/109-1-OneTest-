<?php
error_reporting(0);
session_start();
if(!isset($_SESSION[id])){//要輸入帳號密碼(對)才能進到新增
    echo "請輸入密碼";
    echo "<meta http-equiv='refresh' content='1,url=login.html'>";
}
else{
    $conn=mysqli_connect("localhost","root","","mydb");
    $sql="insert into bulletin(title,content,type,time) values('{$_POST[title]}','{$_POST[content]}',{$_POST[type]},'{$_POST[time]}')";
    //↑↑將資料新增到資料庫
    //echo $sql;(←←測試)
    //insert into 語句用於向資料庫表中插入新紀錄
    if(!mysqli_query($conn,$sql))
        echo"新增佈告錯誤";
    else
        echo "新增佈告成功";
    
    echo "<meta http-equiv='refresh' content='3,url=bulletin.php'>";


}

?>