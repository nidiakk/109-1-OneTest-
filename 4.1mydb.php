<?php
error_reporting(0);//把警告訊息關掉
//字號是註解，不會執行

//php要怎麼跟mysql資料庫進行連結，有三個步驟
//1. mysqli_connect，必須要設定ip(本地端為localhost)
                         //id      帳號、密碼、連結的資料庫(mydb)
$conn=mysqli_connect("localhost","root","","mydb");
//conn、result是名稱可以自己取

//2.mysqli_query從表格user來找出表格資料
$result=mysqli_query($conn,"select*from user");
                        // * 是所有的意思，select*from user是選擇所有來自user的資料
//3.mysqli_fetch_array從$result來擷取每筆資料
while ($row=mysqli_fetch_array($result)) //當還有資料時就執行迴圈
{        
    echo $row[id]." ".$row[pwd];//顯示資料id和pwd的資料
    echo"<br>";
}

//這隻程式要先在XAMPP的MySQL欄位按Admin，將打好的資料庫匯入，再在瀏覽器執行localhost/php學習註解/4.1mydb.php，才能顯示出來。
                                                                                         //↑檔案的名稱








?>