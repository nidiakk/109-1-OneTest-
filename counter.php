<?php
//error_reporting(0);
session_start();//要用SESSION(計數器)之前一定要宣告session_start();
if(!isset($_SESSION["counter"]))//判斷沒有定義變數counter時=1
{
    $_SESSION["counter"]=1;
}
else  //反之+1
{
    $_SESSION["counter"]++;
}
echo"登入{$_SESSION["counter"]}人次";



?>