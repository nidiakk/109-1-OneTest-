<?php
error_reporting(0);

session_start();//使用session前要宣告session_start();
unset($_SESSION["id"]);//將session清空
//session_destroy();伺服器上的所有session variable清空
echo "登出中.....";
echo "<meta http-equiv=REFRESH CONTENT='2;url=login.html'>";


?>