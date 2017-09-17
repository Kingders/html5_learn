<?php 
//session_start()要在<html>前
session_start(); 
//创建 session 数据
if(isset($_SESSION['views']))
{
    $_SESSION['views']=$_SESSION['views']+1;
}
else
{
    $_SESSION['views']=1;
}
if(isset($_SESSION['views1']))
{
    $_SESSION['views1']=$_SESSION['views1']+1;
}
else
{
    $_SESSION['views1']=1;
}
?>

<html>
<meta charset="utf-8">
<body>

<?php
// 检索 session 数据
echo "浏览量：". $_SESSION['views'] . "<br>";
print_r($_SESSION) . "<br>";
echo "计数：". $_SESSION['views1'] . "<br>";
print_r($_SESSION) . "<br>";
//销毁 session 变量
if($_SESSION['views'] > 10 )	//超10便 销毁 session 的 view 变量
{
    unset($_SESSION['views']);
}

if($_SESSION['views1'] > 25 )	//超25便 销毁 整个 session 变量数组
{
	session_destroy();
}

?>

</body>
</html>
