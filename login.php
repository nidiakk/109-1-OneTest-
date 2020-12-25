<?php
    //error_reporting(0);
    $conn=mysqli_connect("localhost","root","","mydb");
    if (mysqli_connect_error($conn))
        die("資料庫連線錯誤");


    $result=mysqli_query($conn,"select * from user");
    $login=False;
    while ($row=mysqli_fetch_array($result))
    {
        
        if ($_POST["id"]==$row[id] && $_POST["pwd"]==$row[pwd])//==判斷是否是true
            $login=True;
    }
    if($login==True)
    {
        //echo "歡迎登入";
        session_start();
        $_SESSION["id"]=$_POST["id"];
         echo "<meta http-equiv='refresh' content='0;url=bulletin.php'>";
    }
    else
    {
       echo "帳號密碼錯誤"; 
        echo "<meta http-equiv='refresh' content='1;url=login.html'>";
    }                                    //N秒後轉跳


?>