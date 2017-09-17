<?php
$coo = "william";
$expire=time()+3000;//cookie存在时间,暂时设 300秒 
//创建cookie
$a = setcookie("user1", $coo, $expire);//cookie值之所以可以用参数,所以可以模拟服务器发来的不同的cookie值来创建cookie
print $a."<br>";
?>

<meta charset="utf-8">

<?php
//输出 cookie 值
echo $_COOKIE["user1"]."<br>";
//查看所有 cookie
print_r($_COOKIE)."<br><br>";
//测试
if (isset($_COOKIE["user1"]))
	echo "欢迎 " . $_COOKIE["user1"] . "!<br>";
else
	echo "普通访客!<br>";
//设置 cookie 过期时间, 可以删除cookie 
$a = setcookie("user1", "", time()-3000);
//测试
if (isset($_COOKIE["user1"]))
	echo "欢迎 " . $_COOKIE["user1"] . "!<br>";
else
	echo "普通访客!<br>";
?>
