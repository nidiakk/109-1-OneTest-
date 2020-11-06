<?
   echo $_GET["id"];//輸出id的值(echo:輸出字串)
   echo "<br />";
   echo $_GET["pwd"];//輸出pwd的值
    if (($_GET[id] == "john") && ($_GET[pwd]=="john1234"))//如果id等於john，pwd等於john1234
        echo "Welcome";  //正確就輸出字串Welcome
    else
        echo "fail login";//錯誤就輸出字串fail login

    //這個程式是2.login.php和3.login.php合在一起的程式，只有2.login.php的話會顯示帳號密碼，3.login.php的程式可判斷符合帳號密碼就會顯示welcome

?>