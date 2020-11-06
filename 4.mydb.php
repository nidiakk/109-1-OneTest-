<?php
error_reporting(0);//把警告訊息關掉
//字號是註解，不會執行

//php要怎麼跟mysql資料庫進行連結，有三個步驟
//1. mysqli_connect，必須要設定ip(本地端為localhost)
                         //id      帳號、密碼、連結的資料庫(mydb)
$conn=mysqli_connect("localhost","root","","mydb");
//conn是名稱可以改

//2.mysqli_query從表格user來找出表格資料
$result=mysqli_query($conn,"select*from user");
                            // * 是所有的意思，select*from user是選擇所有來自user的資料

//3.mysqli_fetch_array來擷取每筆資料
$row=mysqli_fetch_array($result);//每fetch一次抓一筆資料
echo $row[id]." ".$row[pwd];//顯示id和pwd的資料
            // .是字串與字串連接，如同C#中的+號
echo "<br>";//分行
//▲↓這種方式有幾筆要抓就要將程式碼貼幾次(我貼了兩次，只能顯示兩筆資料)，使用4.1mydb.php的While迴圈寫法才有效率
$row=mysqli_fetch_array($result);//每fetch一次抓一筆資料
echo $row[id]." ".$row[pwd];//顯示id和pwd的資料
                                                                              //↓存放的資料夾名稱
//這隻程式要先在XAMPP的MySQL欄位按Admin，將打好的資料庫匯入，再在瀏覽器執行localhost/php學習註解/4.mydb.php
//，才能顯示出來。   
                                                                                         //↑檔案的名稱


?>