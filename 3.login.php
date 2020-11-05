<?php 
    if (($_GET[id] == "john") && ($_GET[pwd]=="john1234"))#如果id等於john，pwd等於john1234
        echo "Welcome";  #正確就輸出字串Welcome
    else
        echo "fail login";#錯誤就輸出字串fail login
?>