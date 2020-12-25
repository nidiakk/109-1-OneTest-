
<?php
include("head.php");
echo"
<h1>新增佈告</h1>
<form method=post action=bulletin_add.php>
佈告標題:<input type=text name=title size=88><p>
佈告內容:<p><textarea cols=100 rows=20 name=content></textarea><p>
佈告類型:<input type=radio name=type value=1 checked>系上公告
        <input type=radio name=type value=2 >招生訊息
        <input type=radio name=type value=3 >企業徵才  
<p>
發布時間:<input type=date name=time><p>
<input type=submit value=發布公告>
</form>
";

//用來輸入新的公告的程式，打完之後會傳到bulletin_add.php
//textarea:多行文字輸入欄位，radio:單選圓鈕；適用於多個可選答案但單一答案選取的場合，為了讓多個單選按鈕成為單選的群組，故同群組內的單選按鈕其「name」屬性值必須為相同的「識別名」。
//checked:用來核取 。        radio說明 https://forum.twbts.com/thread-3151-1-1.html


include("footer.php");










?>