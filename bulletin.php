<?php
include("head.php");//上層的灰色的區塊
    error_reporting(0);
    session_start();
    if(!isset($_SESSION["id"])){
        echo"請登入系統";
        echo "<meta http-equiv='refresh' content='1;url=login.html'>";
    }//meta標籤是一個專門提供給搜尋引擎透過crawlers-spiders爬行蜘蛛索引你的網站，包含了標示各種元素來描述你的網站資訊
     //                                                                      ↑↑簡單說明網站 https://www.maya.com.tw/blog_detail.php?idn=35
    else{
        echo"歡迎{$_SESSION["id"]} 登入 [<a href =logout.php>登出</a>]<p>[<a href=bulletin_add_form.php>新增佈告</a>]<p>";

        //連資料庫固定寫法
        $conn=mysqli_connect("localhost","root","","mydb");//mysqli_connect函數:連結資料庫。
        $result=mysqli_query($conn,"select * from bulletin");//mysqli_query函數:執行針對數據庫(bulletin)的查詢。

        echo "<table border=2><tr><td>佈告操作</td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發布時間</td></tr>";

        while($row=mysqli_fetch_array($result))//mysqli_fetch_array函數:從result(bulletin數據庫的資料)
                                            //取出要的一筆資料，如title、content。
        {          
        echo "<tr><td>";//td:(直)列，tr:(橫)行//有迴圈所以有幾筆就有幾列
        echo "<a href=bulletin_edit_form.php?bid={$row[bid]}>修改</a>";
        echo "<a href=delete.php?bid={$row[bid]}>刪除</a>";
        echo "</td><td>";
        echo $row[bid];//bid:排序編號
        echo "</td><td>";
        echo $row[type];//type:分類項目號，如1.系上公告2.招生訊息
        echo "</td><td>";
        echo $row[title];//title:標題
        echo "</td><td>";
        echo $row[content];//content:內容
        echo "</td><td>";
        echo $row[time];//time:時間
        echo "</td></tr>";}
        //echo $row:印出變數
        //$row=mysqli_fetch_array($result);印出一筆資料的寫法

        echo "</table>";
    }

    include("footer.php");//下層的灰色的區塊


    


?>