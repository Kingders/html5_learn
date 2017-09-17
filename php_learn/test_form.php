<!-- 这里php脚本框外是不规则的 html 脚本内容,不过没有语法错误 -->
<meta charset="utf-8"> 
欢迎 <?php echo $_POST["fname"]; ?>!<br>
你的年龄是 <?php echo $_POST["age"]; ?>  岁。

<!-- 
下拉菜单 
注意,这里 if else 使用两个php脚本框隔开相当妙
因为初打开from.php时, Sa1没有内容
所以if($a1)内容不执行,执行else段,所以显示 下拉菜单条
当"提交"后,会重新打开from.php,这是$a1有内容了
所以执行if($a1)内容,不执行else段,所以就不再显示 下拉菜单条
这里使用了 method = get:
$_GET 变量: 预定义的 $_GET 变量用于收集来自 method="get" 的表单中的值。
从带有 GET 方法的表单发送的信息，对任何人都是可见的（会显示在浏览器的地址栏），并且对发送信息的量也有限制。
何时使用 method="get":
	在 HTML 表单中使用 method="get" 时，所有的变量名和值都会显示在 URL 中。
	注释：所以在发送密码或其他敏感信息时，不应该使用这个方法！
	然而，正因为变量显示在 URL 中，因此可以在收藏夹中收藏该页面。在某些情况下，这是很有用的。
	注释：HTTP GET 方法不适合大型的变量值。它的值是不能超过 2000 个字符的。
-->
<h2>下拉表单</h2>
<?php echo "<br>"; ?>
<?php
$a1 = isset($_GET['a1'])? htmlspecialchars($_GET['a1']) : '';
if($a1) {
	echo '大家好<br>';
        if($a1 =='RUNOOB') {
                echo '菜鸟教程<br>http://www.runoob.com'. "<br>";
        } else if($a1 =='GOOGLE') {
                echo 'Google 搜索<br>http://www.google.com'. "<br>";
        } else if($a1 =='TAOBAO') {
                echo '淘宝<br>http://www.taobao.com'. "<br>";
        }
} else {
?>
<form action="" method="get"> 
	<select name="a1">
	<option value="">选择一个站点:</option>
	<option value="RUNOOB">Runoob</option>
	<option value="GOOGLE">Google</option>
	<option value="TAOBAO">Taobao</option>
	<select>
	<input type="submit" value="提交">
<form>
<?php
}
?>

<!-- 
下拉菜单多选 ctrl+多处点击 
注意,这里使用了 _POST上交参数,而不是 _GET方法上交参数,
关于_POST _GET,由于每按一个独立提交按钮,只会上传一个参数,
而现阶段服务器只会接受最新参数,以前收到的参数会丢弃,所以测试只能测试当前表单功能,
其他表单功能就体现出冲突的情况来.
这里使用了 method = post:
$_POST 变量:预定义的 $_POST 变量用于收集来自 method="post" 的表单中的值。
从带有 POST 方法的表单发送的信息，对任何人都是不可见的（不会显示在浏览器的地址栏），并且对发送信息的量也没有限制。
然而，默认情况下，POST 方法的发送信息的量最大值为 8 MB（可通过设置 php.ini 文件中的 post_max_size 进行更改）。
何时使用 method="post":
	从带有 POST 方法的表单发送的信息，对任何人都是不可见的，并且对发送信息的量也没有限制。
	然而，由于变量不显示在 URL 中，所以无法把页面加入书签。
补充:$_REQUEST 变量:
	预定义的 $_REQUEST 变量包含了 $_GET、$_POST 和 $_COOKIE 的所有内容。
	即表示 $_POST['a2'] == $_REQUEST['a2'],$_GET['a1'] == $_REQUEST['a1']
	$_REQUEST 变量可用来收集通过 GET 和 POST 方法发送的表单数据。
-->
<h2>多选下拉表单</h2>
<?php
$a2 = isset($_POST['a2'])? $_POST['a2'] : '';
if(is_array($a2)) {
	$sites1 = array(
		'RUNOOB' => '菜鸟教程: http://www.runoob.com',
		'GOOGLE' => 'Google 搜索: http://www.google.com',
		'TAOBAO' => '淘宝: http://www.taobao.com',
);
	foreach($a2 as $val1) {
		// PHP_EOL 为常量，用于换行
		echo $sites1[$val1] . "<br>";
	}     
} else {
?>
<form action="" method="post"> 
	<select multiple="multiple" name="a2[]">
	<option value="">选择一个站点:</option>
	<option value="RUNOOB">Runoob</option>
	<option value="GOOGLE">Google</option>
	<option value="TAOBAO">Taobao</option>
	</select>
	<input type="submit" value="提交">
</form>
<?php
}
?>

<!-- checkbox 复选框 -->
<h2>checkbox 复选框</h2>
<?php
$a3 = isset($_POST['a3'])? $_POST['a3'] : '';
if(is_array($a3)) {
	$sites2 = array(
		'RUNOOB' => '菜鸟教程: http://www.runoob.com',
		'GOOGLE' => 'Google 搜索: http://www.google.com',
		'TAOBAO' => '淘宝: http://www.taobao.com',
	);
	foreach($a3 as $val2) {
		// PHP_EOL 为常量，用于换行
		echo $sites2[$val2] . "<br>";
	} 
} else {
?>
<form action="" method="post"> 
	<input type="checkbox" name="a3[]" value="RUNOOB"> Runoob<br> 
	<input type="checkbox" name="a3[]" value="GOOGLE"> Google<br> 
	<input type="checkbox" name="a3[]" value="TAOBAO"> Taobao<br>
	<input type="submit" value="提交">
</form>
<?php
}
?>

<!--
表单认证功能 (必要字段,匹配格式)
-->
<h2>表单认证功能</h2>
<?php
// 定义变量并默认设为空值
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name1 = $email1 = $gender1 = $comment1 = $website1 = "";
//以下 if() 和后面的 <form> 添加了必需字段功能
//preg_match 使用正则方程匹配格式
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["name1"])) {
		$nameErr = "名字是必须的。";
	} else {
 		$name1 = test_input($_POST["name1"]);
		// 检测名字是否只包含字母跟空格
		if (!preg_match("/^[a-zA-Z ]*$/",$name1)) {
			$nameErr = "只允许字母和空格"; 
		}
	}
	if (empty($_POST["email1"])) {
		$emailErr = "邮箱是必须的。";
	} else {
		$email1 = test_input($_POST["email1"]);
		// 检测邮箱是否合法
		if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email1)) {
			$emailErr = "非法邮箱格式"; 
		}
	}
	if (empty($_POST["website1"])) {
		$website1 = "";
	} else {
		$website1 = test_input($_POST["website1"]);
		// 检测 URL 地址是否合法
		if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
			$websiteErr = "非法的 URL 的地址"; 
		}
	}
	if (empty($_POST["comment1"])) {
		$comment1 = "";
	} else {
		$comment1 = test_input($_POST["comment1"]);
	}
	if (empty($_POST["gender1"])) {
		$genderErr = "性别是必须的。";
	} else {
		$gender1 = test_input($_POST["gender1"]);
	}
}
function test_input($data)	// 预处理文本函数	
{
	$data = trim($data);	// PHP trim() 函数去除用户输入数据中不必要的字符
	$data = stripslashes($data);	//php stripslashes()函数去除用户输入数据中的反斜杠 (\) 
	$data = htmlspecialchars($data);	//php htmlspecialchars() 把一些预定义的字符转换为 HTML 实体
	return $data;
}
?>
<h2>PHP 表单验证实例</h2>
<!--表单元素详细讨论:
	表单使用 method="post" 
	$_SERVER["PHP_SELF"]是超级全局变量，返回当前正在执行脚本的文件名，与 document root相关
	所以， $_SERVER["PHP_SELF"] 会发送表单数据到当前页面，而不是跳转到不同的页面
	当前页是form.php
	htmlspecialchars() 函数把一些预定义的字符转换为 HTML 实体:
		& （和号） 成为 &amp;
		" （双引号） 成为 &quot;
		' （单引号） 成为 &#039;
		< （小于） 成为 &lt;
		> （大于） 成为 &gt;
	htmlspecialchars()与妨碍黑客xss有关系!!
	如果设置成 <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
	当用户输入 www.xxxxx.com/form.php/时, 浏览器会解析成<form method="post" action="form.php">发到服务器去解析请求!!
	但如果用户输入 www.xxxxx.com/form.php/%22%3E%3Cscript%3Ealert('hacked')%3C/script%3E 时,
	浏览器会解析成<form method="post" action="form.php/"><script>alert('hacked')</script>发到服务器去解析请求!!
	后面带上的js脚本,就是黑客注入的 js攻击命令 服务器会解释这条命令,这里效果是让服务器弹出一个alert弹窗
	但如果设置为 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
	当用户输入 www.xxxxx.com/form.php/%22%3E%3Cscript%3Ealert('hacked')%3C/script%3E 时,
	浏览器会解析成<form method="post" action="test_form.php/&quot;&gt;&lt;script&gt;alert('hacked')&lt;/script&gt;">
	这样子发到服务器时,服务器并不能解析后面被破坏的 js 命令
-->
<p><span class="error">* 必填字段。</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"> 
	<!--"名字", "E-mail", 及"网址"字段为文本输入元素-->
	名字: <input type="text" name="name1">
	<span class="error">* <?php echo $nameErr;?></span>
	<br><br>
	E-mail: <input type="text" name="email1">
	<span class="error">* <?php echo $emailErr;?></span>
	<br><br>
	网址: <input type="text" name="website1">
	<span class="error"><?php echo $websiteErr;?></span>
	<br><br>
	<!--"备注"字段是 textarea-->
	备注: <textarea name="comment1" rows="5" cols="40"></textarea>
	<br><br>
	<!--"性别"字段是单选按钮-->
	性别:
	<input type="radio" name="gender1" value="female">女
	<input type="radio" name="gender1" value="male">男
	<span class="error">* <?php echo $genderErr;?></span>
	<br><br>
	<!--这个按键 一下子把多个表单变量内容都提交了-->
	<input type="submit" name="submit" value="Submit"> 
</form>
<?php
echo "<h2>您输入的内容是:</h2>";
echo $name1;
echo "<br>";
echo $email1;
echo "<br>";
echo $website1;
echo "<br>";
echo $comment1;
echo "<br>";
echo $gender1;
?>



