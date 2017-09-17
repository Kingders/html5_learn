 <!DOCTYPE html>
<html>
<head>
	<!-- 支持中文 -->
	<meta charset="utf-8"> 
</head>
<body>
	<h1>My first PHP page</h1>
<?php
// 这是 PHP 单行注释
/*
这是 PHP 的
多行注释
*/
?>

<?php
/********* echo print *********/
echo "<h2>echo 实例</h2>";
echo "Hello world!<br>";	//<br>是隔行符
echo "我要学 PHP!<br>";
echo "这是一个", "字符串，", "使用了", "多个", "参数。";
$a1="学习 PHP";
$a2="RUNOOB.COM";
$a3=array("Volvo","BMW","Toyota");
echo $a1;
echo "<br>";
echo "在 $a2 学习 PHP ";
echo "<br>";
echo "我车的品牌是 {$a3[0]}";
print "<h2>print 实例</h2>";
print "Hello world!<br>";
print "我要学习 PHP!";
$a4="学习 PHP";
$a5="RUNOOB.COM";
$a6=array("Volvo","BMW","Toyota");
print $a4;
print "<br>";
print "在 $a5 学习 PHP ";
print "<br>";
print "我车的品牌是 {$a6[0]}";
?>

<?php
/********* 变量 变量名不能包含空格,区分大小写 *********/
echo "<h2>全局 局部 实例</h2>";
$b1=5;	// 全局变量
$b2=6;	// 全局变量
$b3=$b1+$b2;
$b4="你好!";
echo "$b1+$b2=$b3";
echo "<p>$b1+$b2=$b3<p>";	//复杂echo
echo $b4;			//未知如何显示中文
function myTest()
{
	$b1=20; // 局部变量
	$b2=10; // 局部变量
	echo "<p>测试函数内变量:<p>";
	echo "变量 b1 为: $b1";
	echo "<br>";
	echo "变量 b2 为: $b2";	
} 
myTest();
echo "<p>测试函数外变量:<p>";
echo "变量 b1 为: $b1";
echo "<br>";
echo "变量 b2 为: $b2"; 
echo "<h2>global static 作用 实例</h2>";
function myTest1()	//php 函数
{
	global $b1,$b2;	//标记使用全局变量
	$b2=$b1+$b2;
}
myTest1();
echo "$b2"; // 11
function myTest2()	 
{			
	$GLOBALS['b2']=$GLOBALS['b1']+$GLOBALS['b2'];	
	//实际上PHP 将所有全局变量存储在一个名为 $GLOBALS[indeb1] 的数组中,index 保存变量的名称
} 
myTest2();
echo "<br>$b2"; //5+11=16
function myTest3()
{
	static $b5=0;	//static作用,b5局部变量在函数执行完后并不会自动被消除
	echo "<br>$b5";
	$b5++;
}
myTest3();
myTest3();
myTest3();
?>

<?php
/********* 变量 的 数据类型 *********/
echo "<h2>数据类型 实例</h2>";
//字符串类型
$c1 = "Hello";	//字符串数据 使用""
echo $c1;
echo "<br>"; 
$c1 = 'world!';	//字符串数据 也可以使用''
echo $c1;
echo "<br>"; 
$c1_1 = 'Hello';
echo $c1_1 . " " . $c1; // 并置运算符 "."
echo "<br>"; 
echo "Hello world!"."=".strlen("Hello world!")."bytes";	//strlen() 函数返回字符串的长度 
echo "<br>"; 
echo strpos("Hello world!","world"); 
	//strpos() 函数用于在字符串内查找一个字符或一段指定的文本
	//成功返回第一个匹配的字符位置,否则返回 FALSE
echo "<br>"; 
//浮点类型
$c2 = 10.365;
var_dump($c2);
echo "<br>";
$c2 = 2.4e3;
var_dump($c2);
echo "<br>";
$c2 = 8E-5;
var_dump($c2);
echo "<br>"; 
//数组
$c3=array("Volvo","BMW","Toyota");	//自动创建 数序数组
$c3[4]="BYD";		//手动创建数组成员
$c3[6]="Tesla"; 
var_dump($c3);
echo "<br>"; 
echo "I like " . $c3[0] . ", " . $c3[6] . " and " . $c3[2] . ".";
echo "<br>"; 
echo arry_member_count.":".count($c3);	//获取数组的长度 - count() 函数
echo "<br>"; 
foreach($c3 as $c3_key=>$c3_value)	//遍历数组 key+value	学习 foreach 循环
{
	echo "Key=" . $c3_key . ", Value=" . $c3_value;
	echo "<br>";
}
foreach($c3 as $c3_value)	//遍历数组 value		学习 foreach 循环
{
	echo "Value=" . $c3_value;
	echo "<br>";
}
$c3=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");//创建 关联数组c3 覆盖了原数序数组c3 ,[]里的不是数字,而是字符串
echo "Peter is " . $c3['Peter'] . " years old."."<br>";
foreach($c3 as $c3_key=>$c3_value)	//遍历数组
{
	echo "Key=" . $c3_key . ", Value=" . $c3_value;
	echo "<br>";
}
//对象
class car	//定义一个car对象
{
	var $color;
	var $speed;
	function Car($color="green",$speed=200) {
		$this->color = $color;	//this 指 对象 car
		$this->speed = $speed;	
	}
	function what_color() {
		return $this->color;
	}
	function what_speed() {
		return $this->speed;
	}
}
function print_vars($obj) {	//php 函数带参数
	foreach (get_object_vars($obj) as $prop => $val) {
		echo "\t$prop = $val\n";
	}
}
$c4 = new car();		// 初始化一个对象变量
$c5 = new car("white",700);	// 初始化一个对象变量
echo "\c4: Properties\n";
print_vars($c4);
echo "<br>\c5: Properties\n";
print_vars($c5);
echo "<br>"; 
//NULL 值
$c6 = "Hello world!";
$c6 = null;	//清空了 c6 变量,相当与不存在
var_dump($c6);	//c6 变量相当于什么都没有,所以显示NULL
echo "<br>"; 	
var_dump($c7);	//c7 变量都没有初始化起来,跟被清空了的 c6 变量一样,不存在
echo $c6;	//因为 c6 什么没有,所以什么都没显示
echo "<br>"; 
//常量, 常量是全局的,常量名区分大小写
define("c7", "欢迎 william");
function myTest4() {
	echo "<br>"; 
	echo c7;
}
echo c7;
myTest4();    // 输出 "欢迎访问 Runoob.com"
echo "<br>"; 
?>

<?php
/*********php 超级全局变量 *********/
echo "<h2>php 超级全局变量 实例</h2>";
//	$_FILES
//	$_ENV
//	$_COOKIE
//	$_SESSION
//$GLOBALS	超级全局变量组(特殊关联数组)
	$c8 = 75;
	$c9 = 25;
	function addition()
	{
		$GLOBALS['c10'] = $GLOBALS['c8'] + $GLOBALS['c9'];
	}
	addition();
	echo $c10; 
	echo "<br>"; 
//$_SERVER	包含了诸如头信息(header)、路径(path)、以及脚本位置(script locations)等等信息的数组
//	这个数组中的项目由 Web 服务器创建。不能保证每个服务器都提供全部项目；
	echo 'PHP_SELF:'.$_SERVER['PHP_SELF'];
	echo "<br>";
	echo 'SERVER_NAME:'.$_SERVER['SERVER_NAME'];
	echo "<br>";
	echo 'HTTP_HOST:'.$_SERVER['HTTP_HOST'];
	echo "<br>";
	echo 'HTTP_REFERER:'.$_SERVER['HTTP_REFERER'];
	echo "<br>";
	echo 'HTTP_USER_AGENT:'.$_SERVER['HTTP_USER_AGENT'];
	echo "<br>";
	echo 'SCRIPT_NAME:'.$_SERVER['SCRIPT_NAME'];
	echo "<br>"; 
//$_REQUEST	用于收集HTML表单提交的数据
//	$_REQUEST 配合实验 显示了一个输入字段（input）及提交按钮(submit)的表单(form)。 
//	当用户通过点击 "Submit" 按钮提交表单数据时, 表单数据将发送至<form>标签中 action 属性中指定的脚本文件。 
//	在这个实例中，我们指定文件来处理表单数据。
//	如果你希望其他的PHP文件来处理该数据，你可以修改该指定的脚本文件名。 
//	然后，我们可以使用超级全局变量 $_REQUEST 来收集表单中的 input 字段数据:
	$c11 = $_REQUEST['fname']; 
	echo "\$_REQUEST:".$c11;
	echo "<br>"; 
//$_POST	应用于收集表单数据,在HTML form标签的指定该属性："method="post"
//	例子与 $_REQUEST 类似
//	我们可以使用超级全局变量 $_POST 来收集表单中的 input 字段数据
	$c12 = $_POST['fname1'];
	echo "\$_POST:".$c12;
	echo "<br>"; 
//$_GET		应用于收集表单数据,在HTML form标签的指定该属性："method="get"
//		也可以收集URL中发送的数据。
/**  	配合实验外部文件  :test_get.php内容
*	<html>
*	<body>
*		<?php
*		echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
*		?>
*	</body>
*	</html>
**/
//与下方php脚本框后的 $_GET 配合实验 内容一致,
//这里显示如何 使用php打印出html规则的执行内容, 
	echo "<a href=\"test_get.php?subject=PHP&web=runoob.com\">Test \$_GET</a>";
	echo "<br>"; 
?>
<!-- 超级全局变量示例 配合实验 -->
<!-- $_REQUEST -->
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		$_REQUEST Name: <input type="text" name="fname">
		<input type="submit">
	</form>
<!-- $_POST -->
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		$_POST Name: <input type="text" name="fname1">
		<input type="submit">
	</form>
<!-- $_GET -->
	<a href="test_get.php?subject=PHP&web=runoob.com">Test $_GET</a>
	<br>

<!-- ////////////////////////////////////////长篇独立内容分割符/////////////////////////////////////////// -->
<?php
/*********php 函数深入讨论 *********/
echo "<h2>php 函数深入讨论 实例</h2>";
//上面例子已经展示了 无参数,单参数的操作,
//讨论多参数 函数,
	function writeName($c13,$c14)
	{
		echo $c13 . " Refsnes" . $c14 . "<br>";
	}
	echo "My name is ";
	writeName("Kai Jim",".");
	echo "My sister's name is ";
	writeName("Hege","!");
	echo "My brother's name is ";
	writeName("Ståle","?");
//返回值
	function add($c15,$c16)
	{
		$c17=$c15+$c16;
		return $c17;
	}
	echo "1 + 16 = " . add(1,16)."<br>";
?>

<?php
/********* PHP 魔术变量 ,根据实际情况系统自动赋值的特定变量 *********/
echo "<h2>php 魔术变量 实例</h2>";
echo '这是第 " '  . __LINE__ . ' " 行'."<br>";	//魔术变量 __LINE__ 变量值是当前行数
echo '文件路径: " '  . __FILE__ . ' " '."<br>"; 
echo '该文件位于 " '  . __DIR__ . ' " '."<br>";
function mytest5()
{	echo  '函数名为：' . __FUNCTION__ ."<br>";}
mytext5;
class c18 {
    function _print() {
        echo '类名为：'  . __CLASS__ . "<br>";
        echo  '函数名为：' . __FUNCTION__ . "<br>";
    }
}
$c19 = new c18();
$c19->_print();
//__TRAIT__ 	与实现了代码复用的traits方法有关. 
//__METHOD__	类的方法名
class c21 {
	public function sayHello() {
		echo 'Hello ';
		echo  '__METHOD__名为：' . __METHOD__ . "<br>";
	}
}
trait c22 {
	public function sayHello() {
		parent::sayHello();
		echo 'World!'."<br>";
		echo '__TRAIT__1：'  . __TRAIT__ . "<br>";
		echo  '__METHOD__1名为：' . __METHOD__ . "<br>";
	}
}
class c23 extends c21 {
	use c22;
	public function say() {
	echo '__TRAIT__2：'  . __TRAIT__ . "<br>";
	echo  '__METHOD__2名为：' . __METHOD__ . "<br>";
	}
}
$c20 = new c23();
$c20->sayHello();
$c20->say();
//__NAMESPACE__	当前命名空间的名称 (不能测试,因为 namespace之前不能先出现 <html> )
//namespace Testproject;
//echo '命名空间为："', __NAMESPACE__, '"'. "<br>"; // 输出当前命名空间的名称（区分大小写
?>

<?php
/********* PHP 命名空间(namespace) 未深入学习 *********/	
echo "<h2>php 命名空间 实例</h2>";
echo "<a href=\"test_namespace.php\">Test \Namespace</a>";
echo "<br>"; 
?>

<?php
/********* PHP 面向对象 *********/
//广义的 面向对象 概念内容
//	类 − 定义了一件事物的抽象特点。类的定义包含了数据的形式以及对数据的操作。
//	对象 − 是类的实例。
//	类成员变量 − 定义在类内部的变量。该变量的值对外是不可见的，但是可以通过成员函数访问，在类被实例化为对象后，该变量即可称为对象的属性。
//	类成员函数 − 定义在类的内部，可用于访问对象的数据。
//	继承 − 继承性是子类自动共享父类数据结构和方法的机制，这是类之间的一种关系。
//	       在定义和实现一个类的时候，可以在一个已经存在的类的基础之上来进行，
//	       把这个已经存在的类所定义的内容作为自己的内容，并加入若干新的内容。
//	父类 − 一个类被其他类继承，可将该类称为父类，或基类，或超类。
//	子类 − 一个类继承其他类称为子类，也可称为派生类。
//	多态 − 多态性是指相同的函数或方法可作用于多种类型的对象上并获得不同的结果。不同的对象，收到同一消息可以产生不同的结果，这种现象称为多态性。
//	重载 − 简单说，就是函数或者方法有同样的名称，但是参数列表不相同的情形，这样的同名不同参数的函数或者方法之间，互相称之为重载函数或者方法。
//	抽象性 − 抽象性是指将具有一致的数据结构（属性）和行为（操作）的对象抽象成类。
//	         一个类就是这样一种抽象，它反映了与应用有关的重要性质，而忽略其他一些无关内容。任何类的划分都是主观的，但必须与具体的应用有关。
//	封装 − 封装是指将现实世界中存在的某个客体的属性与行为绑定在一起，并放置在一个逻辑单元内。
//	构造函数 − 主要用来在创建对象时初始化对象， 即为对象成员变量赋初始值，总与new运算符一起使用在创建对象的语句中。
//	析构函数 − 析构函数(destructor) 与构造函数相反，当对象结束其生命周期时（例如对象所在的函数已调用完毕），
//		  系统自动执行析构函数。析构函数往往用来做"清理善后" 的工作
//		 （例如在建立对象时用 new开辟了一片内存空间，应在退出前在析构函数中用delete释放）。
echo "<h2>php 面向对象 实例</h2>";
//类
class d1 {
	//成员变量
	var $url;
	var $title;
	//构造函数
	function __construct( $par1, $par2 ) {
		$this->url = $par1;
		$this->title = $par2;
	}
	//析构函数,析构函数需要定义,并没有系统默认的	
	function __destruct() {
		print "销毁 " . $this->title . "\n";
		echo "<br>"; 
	}
	//成员函数
	function setUrl($par){
		$this->url = $par;
	}
	function getUrl(){
		echo $this->url . PHP_EOL;	//php 换行 PHP_EOL变量(从显示看并没有换行?)
		echo "<br>"; 
	}
	function setTitle($par){
		$this->title = $par;
	}
	function getTitle(){
		echo $this->title . PHP_EOL;
		echo "<br>"; 
	}
	//类常数,及测试类常数的成员函数
	const constant = '常量值';
	function showConstant() {	//测试类常数成员函数
		echo  self::constant ."<br>";
	}
}
//子类
class Child_d2 extends d1 {
   var $category;

	function setCate($par){
		$this->category = $par;
	}
  
	function getCate(){
		echo $this->category . PHP_EOL;
		echo "<br>"; 
	}
	//方法重写
	function getUrl() {
		echo getUrl.$this->url . PHP_EOL;
		echo "<br>"; 
		return $this->url;
	}  
	function getTitle(){
		echo getTitle.$this->title . PHP_EOL;
		echo "<br>"; 
		return $this->title;
	}
}
//创建对象
	$d2 = new d1;
	$d3 = new d1('www.taobao.com',"淘宝");
	$d4 = new Child_d2;
// 调用成员函数，设置标题和URL
	$d2->setTitle( "菜鸟教程" );
	$d4->setTitle( "Google 搜索" );
	$d2->setUrl( 'www.runoob.com' );
	$d4->setUrl( 'www.google.com' );
	$d4->setCate("网页");
// 调用成员函数，获取标题和URL
	$d2->getTitle();
	$d3->getTitle();
	echo $d4->getTitle()."<br>";
	$d2->getUrl();
	$d3->getUrl();
	echo $d4->getUrl()."<br>";
	$d4->getCate();
//测试析构函数
	var_dump($d2);
	$d2->__destruct();	//尝试析构,但好像并没成功析构,后来发现,主动调用析构函数并没有什么用,是页面加载完自动调用的
	var_dump($d2);
	echo "<br>"; 
//类常数测试
	echo d1::constant ."<br>";
	$d2_1 = "d1";
	echo $d2_1::constant ."<br>";
	$d2->showConstant();
	echo $d2::constant ."<br>";
?>

<?php
/********* PHP 面向对象 访问控制 public protected private *********/
class d5
{
	public $public = 'Public';		//公有的类成员		可以在任何地方被访问	
	protected $protected = 'Protected';	//受保护的类成员	可以被类自身成员函数,以及其子类和父类成员函数访问
	private $private = 'Private';		//私有的类成员		只能被类自身成员函数访问

    
	public function MyPublic() {		//公有的成员函数	可以在任何地方被调用
		echo 公有成员函数."<br>";	
	}	
	protected function MyProtected() {	//受保护的成员函数	可以被类自身成员函数,以及其子类和父类成员函数调用
 		echo 受保护成员函数."<br>";	
	}
	private function MyPrivate() {		//私有的成员函数	只能被类自身成员函数调用
		echo 私有成员函数."<br>";	
	}
	function printHello()	//类自身成员函数 默认为共有函数
	{
		echo $this->public."<br>";	
		echo $this->protected."<br>";	
		echo $this->private."<br>";	
	}

	function Foo()		//默认为共有函数
	{
		$this->MyPublic();
		$this->MyProtected();
		$this->MyPrivate();
	}
}
class Child_d5 extends d5
{
	// 可以对 public 和 protected 进行重定义,
	protected $protected = 'Protected2';
	//private 不能进行重定义
	//private $private = 'Private2';	
	function printHello()			//子类自身成员函数 默认为共有函数
	{
		//echo parent::protected."<br>";	//语法错误,不能执行
		echo $this->public."<br>";		
		echo $this->protected."<br>";
		echo $this->private."<br>";	//可执行	private是d5的私有类成员参数 这里能访问,但固定为空,非常奇怪
	}
	function Foo2()				//子类自身成员函数 默认为共有函数
	{
		$this->MyPublic();
		$this->MyProtected();
		//$this->MyPrivate(); 		//不可执行	MyPrivate()是d5的私有类成员函数,所以不能用
	}
}
//类成员变量 执行示例
	$d6 = new d5();
	echo $d6->public."<br>"; 	//可执行	
	//echo $d6->protected."<br>"; 	//不可执行 因为不是自身成员函数,以及其子类和父类成员函数访问
	//echo $d6->private."<br>"; 	//不可执行 因为不是类自身成员函数访问
	$d6->printHello(); 		//可执行   类自身成员函数访问
//子类成员变量 执行示例
	$d7 = new Child_d5();
	echo $d7->public."<br>"; 	//可执行
	echo $d7->private."<br>"; 	//可执行  但 $d7->private 显示为空	
					//	  因为private是d5私有成员,Child_d5继承下来了,但用不了,所以$d7->private固定为null
					//	  再者private也不能被类自身成员函数访问,所以这里能运行,是非常奇怪的
	//echo $d7->protected."<br>";	//不可执行 因为不可以被非类成员函数执行
	$d7->printHello(); 	// 输出 Public、Protected2 和 Undefined
//类成员还是函数 执行示例
	$d6->MyPublic();		// 可执行
	//$d6->MyProtected(); 		// 不可执行	因为不是自身成员函数,以及其子类和父类成员函数调用
	//$d6->MyPrivate(); 		// 不可执行	因为不是类自身成员函数访问
	$d6->Foo();			// 可执行	类自身成员函数调用
//子类成员还是函数 执行示例
	$d7->MyPublic();		// 可执行
	//$d7->MyProtected(); 		// 不可执行	因为不是自身成员函数,以及其子类和父类成员函数调用
	//$d7->MyPrivate(); 		// 不可执行	因为不是类自身成员函数访问
	$d7->Foo2();			// 可执行	子类自身成员函数调用
//关于子类成员函数复写是深入讨论!!
	class d8 
	{
		public function test() {
			$this->testPrivate();
			$this->testProtected();
			$this->testPublic();
		}
		public function testPublic() {
			echo "Bar::testPublic\n"."<br>";
		}
		protected function testProtected() {
			echo "Bar::testProtected\n"."<br>";
		}
		private function testPrivate() {
			echo "Bar::testPrivate\n"."<br>";
		}
	}
	class Child_d8 extends d8 
	{
		public function testPublic() {
			echo "Foo::testPublic\n"."<br>";
		}
		protected function testProtected() {
			echo "Foo::testProtected\n"."<br>";
		}
		private function testPrivate() {	//理论上不能被覆写的,这里覆写了,但没有报错
			echo "Foo::testPrivate\n"."<br>";
		}
	}
	$d9 = new Child_d8();
	$d9->testPublic();
	$d9->test(); 	// Bar::testPrivate 
			// Foo::testProtected
	              	// Foo::testPublic
?>

<?php	
/********* PHP 类接口 *********/
//使用接口（interface），可以指定某个类必须实现哪些方法，但不需要定义这些方法的具体内容
//接口是通过 interface 关键字来定义的，就像定义一个标准的类一样，但其中定义所有的方法都是空的。
//接口中定义的所有方法都必须是公有 
//要实现一个接口，使用 implements 操作符。类中必须实现接口中定义的所有方法，否则会报一个致命错误。
//类可以实现多个接口，用逗号来分隔多个接口的名称。
//声明一个'iTemplate'接口
	interface d10
	{
		public function setVariable($name, $var);
		public function getHtml($template);
	}
//实现接口
	class d11 implements d10
	{
		private $vars = array(); 
		public function setVariable($name, $var)
		{
			$this->vars[$name] = $var;
		}
		public function getHtml($template)	
		{
			foreach($this->vars as $name => $value) {
				$template = str_replace('{' . $name . '}', $value, $template);
			}
			return $template;
	    	}
	}
//测试 ()	不知道怎么测试是使用getHtml ,先搁置
$d12 = new d11();
$d13 = new d11();
$d12->setVariable("ka",123456);
$d12->setVariable("jj",666666);
$d12->setVariable("li",897685);
$d13->setVariable("ka",111111);
var_dump($d12);
echo "<br>";	
//$d12->getHtml($d13);
//echo $d13."<br>";
?>

<?php
/********* PHP 抽象类 *********/
//任何一个类，如果它里面至少有一个方法是被声明为抽象的，那么这个类就必须被声明为抽象的。
//定义为抽象的类不能被实例化。
//被定义为抽象的方法只是声明了其调用方式（参数），不能定义其具体的功能实现。
//继承一个抽象类的时候，子类必须定义父类中的所有抽象方法；
//另外，这些方法的 访问控制 必须和父类中一样（或者更为宽松）。
//例如某个抽象方法被声明为受保护的，那么子类中实现的方法就应该声明为受保护的或者公有的，而不能定义为私有的。
//此外方法的调用方式必须匹配，即类型和所需参数数量必须一致。
//例如，子类定义了一个可选参数，而父类抽象方法的声明里没有，则两者的声明并无冲突。
abstract class d14	//这个类就必须被声明为抽象的
{
	// 强制要求子类定义这些方法
	abstract protected function getValue();
	abstract protected function prefixValue($prefix);
	// 普通方法（非抽象方法）
	public function printOut() {
		print $this->getValue() ."<br>";
	}
}
class Child1_d14 extends d14
{
	protected function getValue() {
		return "ConcreteClass1";
	}
	public function prefixValue($prefix) {
		return "{$prefix}ConcreteClass1";
	}
}
class Child2_d14 extends d14
{
	public function getValue() {
		return "ConcreteClass2";
	}
	public function prefixValue($prefix) {
		return "{$prefix}ConcreteClass2";
	}
}
$d15 = new Child1_d14;
$d15->printOut();
echo $d15->prefixValue('FOO_') ."<br>";
$d16 = new Child2_d14;
$d16->printOut();
echo $d16->prefixValue('FOO_') ."<br>";
?>

<?php
/********* PHP 类关键字 *********/
//Static 关键字
//声明类属性或方法为 static(静态)，就可以不实例化类而直接访问。
//静态属性不能通过一个类已实例化的对象来访问（但静态方法可以）。
//由于静态方法不需要通过对象即可调用，所以伪变量 $this 在静态方法中不可用。
//静态属性不可以由对象通过 -> 操作符来访问。
//自 PHP 5.3.0 起，可以用一个变量来动态调用类。但该变量的值不能为关键字 self，parent 或 static
//Final 关键字
//PHP 5 新增了一个 final 关键字。如果父类中的方法被声明为 final，则子类无法覆盖该方法。
//如果一个类被声明为 final，则不能被继承
class d17 {
	public static $my_static = '静态属性'; 
	var $no_static;
	public function staticValue() {
		return self::$my_static;
	}
	public function staticValue1() {	
		return self::$no_static;	//对于普通变量,不能用 self:: 这个来指向自身
	}
	public function staticValue2() {
		return $this->my_static;	//对于静态变量,不能用 $this 这个自身类对象指针
	}
	public function staticValue3() {
		return $this->no_static;
	}
	final public function moreTesting() {	//final 属性的成员函数
		echo "father"  ."<br>";
	}
}
final class Child1_d17 extends d17
{
	public function moreTesting1() {	//final 属性的类!!
		echo "child_b"  ."<br>";
	}
	//public function moreTesting() {	//显然不能覆写,不然报错
	//	echo "child_a"  ."<br>";
	//}
}
//class Child2_d17 extends d14 Child1_d17	//显然不能继承,不然报错
//{
//	public function moreTesting1() {
//		echo "child_child"  ."<br>";
//	}
//}
print d17::$my_static ."<br>";
$d18 = new d17();
$d18->no_static = 12;
print $d18->staticValue() ."<br>";
//print $d18->staticValue1() ."<br>";		//虽然可以定义函数,但调用就会出错	
//print $d18->staticValue2() ."<br>";		//虽然可以定义函数,但调用就会出错
print $d18->staticValue3() ."<br>";
?>

<?php
/********* PHP 调用父类构造方法 *********/
//PHP 不会在子类的构造方法中自动的调用父类的构造方法。要执行父类的构造方法，
//需要在子类的构造方法中调用 parent::__construct() 。
class d19 {
	function __construct() {
		print "BaseClass 类中构造方法" ."<br>";
	}
}
class Child_d19 extends d19 {
	function __construct() {
		parent::__construct();  // 子类构造方法不能自动调用父类的构造方法
		print "SubClass 类中构造方法" ."<br>";
	}
}
class Child2_d19 extends d19 {
	// 继承 BaseClass 的构造方法
}
$d20 = new d19();		// 调用 BaseClass 构造方法
$d20 = new Child_d19();		// 调用 BaseClass、SubClass 构造方法
$d20 = new Child2_d19();	// 调用 BaseClass 构造方法
?>

<?php
/********* PHP 多维数组 *********/
echo "<h2>php 多维数组 实例</h2>";
// 二维数组:
$d21_cars = array
(
    array("Volvo",100,96),
    array("BMW",60,59),
    array("Toyota",110,100)
);
print_r($d21_cars);	//print_r()是数组显示函数；
echo "<br>";
//多维数组
$d21_sites = array
(
    "runoob"=>array
    (
        "菜鸟教程",
        "http://www.runoob.com"
    ),
    "google"=>array
    (
        "Google 搜索",
        "http://www.google.com"
    ),
    "taobao"=>array
    (
        "淘宝",
        "http://www.taobao.com"
    )
);
// 格式化输出数组
print("<pre>"); 
print_r($d21_sites);
print("</pre>"); 
echo "<br>";
//显示上面数组中的某个值：
echo $d21_sites['runoob'][0] . '地址为：' . $d21_sites['runoob'][1];
?>

<?php
/********* PHP 文件操作 *********/
//fopen():
//	r 	只读。在文件的开头开始。
//	r+ 	读/写。在文件的开头开始。
//	w 	只写。打开并清空文件的内容；如果文件不存在，则创建新文件。
//	w+ 	读/写。打开并清空文件的内容；如果文件不存在，则创建新文件。
//	a 	追加。打开并向文件末尾进行写操作，如果文件不存在，则创建新文件。
//	a+ 	读/追加。通过向文件末尾写内容，来保持文件内容。
//	x 	只写。创建新文件。如果文件已存在，则返回 FALSE 和一个错误。
//	x+ 	读/写。创建新文件。如果文件已存在，则返回 FALSE 和一个错误。
echo "<h2>php 文件操作 实例</h2>";
//只读模式打开文件,打开失败就显示错误信息
$file1=fopen("fileoperation_test.txt","r") or exit("Unable to open file1!");
//读取文件每一行，直到文件结尾
while(!feof($file1))
{
    echo fgets($file1). "<br>";
}
//feof() 函数检测是否已到达文件末尾（EOF）。
//但在 w 、a 和 x 模式下，您无法读取打开的文件！
if (feof($file1)) echo "文件结尾". "<br>"; 
fclose($file1);	//关闭文件
?>

<?php
/********* PHP 上传文件*********/
echo "<h2>php 上传文件 实例</h2>";
?>
<!-- 
上传文件 配合实验 
特别注意到 type="file" 的表框,这里是选择文件的表框
-->
	<form action="test_uploadfile.php" method="post" enctype="multipart/form-data">
		<label for="file">文件名：</label>
		<input type="file" name="file" id="file"><br>	
		<input type="submit" name="submit" value="提交">
	</form>

<?php
/********* PHP 深入表单*********/
echo "<h2>PHP 深入表单 实例</h2>";
//链接到的 test_form.php文件
?>
<!-- 深入表单配合实验 -->
	<form action="test_form.php" method="post">
		名字: <input type="text" name="fname">
		年龄: <input type="text" name="age">
		<input type="submit" value="提交">
	</form>
	<br>

<?php
/********* PHP cookies*********/
//cookie 常用于识别用户。cookie 是一种服务器留在用户计算机上的小文件。
//每当同一台计算机通过浏览器请求页面时，这台计算机将会发送 cookie。通过 PHP，您能够创建并取回 cookie 的值。
//这里之所以使用一个部链接来测试cookie是因为,setcookie() 函数必须位于 <html> 标签之前
echo "<h2>php cookie 实例</h2>";
echo "<a href=\"test_cookie.php\">Test_cookie</a>";
	//测试知道,创建cookie 是一个异步动作,有时间差,
	//即setcookie创建cookie函数后,cookie文件其实还没建立好,所以接下来就访问cookie是得不到数据的!!!
	//所以测试时,不要同时创建和删除cookie操作一块上!!,把其中一个掉
	//还有 setcookie("user1", $coo, $expire); cookie值之所以可以用参数$coo,是在模拟服务器发来的特定的cookie值来创建cookie
?>

<?php
/********* PHP Session 和 会话 *********/
//PHP session 变量用于存储关于用户会话（session）的信息，或者更改用户会话（session）的设置。
//Session 变量存储单一用户的信息，并且对于应用程序中的所有页面都是可用的。
//session_start() 函数必须位于 <html> 标签之前：所以用一个外部链接来实验
echo "<h2>php seesion 会话 实例</h2>";
echo "<a href=\"test_seesion.php\">Test_session</a>";
	//测试知道,自定义的session变量在创建后会一直暂时存在服务器上,
	//只要客户端的浏览器不关,就算页面关了,与服务器的会话还不算结束.
	//但是客户端的浏览器关了,与服务器的会话就算结束了.自定义的session变量会被删掉
	//重新打开浏览器,重新登录服务器,会重新建立新对话,创建新的自定义session变量
	//此外,留在页面上超时不作为,也会导致会话结束.
?>

<?php
/********* PHP mail() 函数 *********/
//注意:虽然显示发送成功,但是感觉发送失败了!!! 先不管
// mail(to,subject,message,headers,parameters) 就是给某邮箱发邮件的意思
//	to 	必需。规定 email 接收者。
//	subject 	必需。规定 email 的主题。注释：该参数不能包含任何新行字符。
//	message 	必需。定义要发送的消息。应使用 LF (\n) 来分隔各行。每行应该限制在 70 个字符内。
//	headers 	可选。规定附加的标题，比如 From、Cc 和 Bcc。应当使用 CRLF (\r\n) 分隔附加的标题。
//	parameters 	可选。对邮件发送程序规定额外的参数。
echo "<h2>php mail() 实例</h2>";
				//还有的是 发件人 似乎可以不填的,发件人合到 header上!!
echo "普通邮件方式" . "<br>";
if (isset($_REQUEST['email'])) { // 如果接收到邮箱参数则发送邮件
	// 发送邮件
    $email = $_REQUEST['email'] ;	//发件人,是mail()-> headers参数的一部分
    $subject = $_REQUEST['subject'] ;
    $message = $_REQUEST['message'] ;
    mail("418128064@qq.com", $subject,
    $message, "From:" . $email);
    echo "邮件发送成功";
} else { // 如果没有邮箱参数则显示表单
    echo "<form method='post' action='phptest.php'>
    Email: <input name='email' type='text'><br>
    Subject: <input name='subject' type='text'><br>
    Message:<br>
    <textarea name='message' rows='15' cols='40'>
    </textarea><br>
    <input type='submit'>
    </form>";
}

echo "安全邮件方式" . "<br>";
//headers头可以插入数据,造成 mail注入攻击!!!
//比如说header头输入这段内容:
//	someone@example.com%0ACc:person2@example.com
//	%0ABcc:person3@example.com,person3@example.com,
//	anotherperson4@example.com,person5@example.com
//	%0ABTo:person6@example.com
//头部有了额外的 Cc:、Bcc: 和 To: 字段。当用户点击提交按钮时，这封 e-mail 会被发送到上面所有的地址！
//所以下面的对 发件人表单的输入内容执行过滤, 从而避免headers注入攻击
function spamcheck($field)
{
    // filter_var() 过滤 e-mail
    // 使用 FILTER_SANITIZE_EMAIL
    $field=filter_var($field, FILTER_SANITIZE_EMAIL);

    //filter_var() 过滤 e-mail
    // 使用 FILTER_VALIDATE_EMAIL
    if(filter_var($field, FILTER_VALIDATE_EMAIL))
    {
        return TRUE;
    }
    else
    {
        return FALSE;
    }
}

if (isset($_REQUEST['email1']))
{
    // 如果接收到邮箱参数则发送邮件

    // 判断邮箱是否合法
    $mailcheck = spamcheck($_REQUEST['email1']);
    if ($mailcheck==FALSE)
    {
        echo "非法输入";
    }
    else
    {    
        // 发送邮件
        $email = $_REQUEST['email1'] ;
        $subject = $_REQUEST['subject1'] ;
        $message = $_REQUEST['message1'] ;
        mail("418128064@qq.com", "Subject: $subject1",
        $message1, "From: $email1" );
        echo "Thank you for using our mail form";
    }
}
else
{ 
    // 如果没有邮箱参数则显示表单
    echo "<form method='post' action='phptest.php'>
    Email: <input name='email1' type='text'><br>
    Subject: <input name='subject1' type='text'><br>
    Message:<br>
    <textarea name='message1' rows='15' cols='40'>
    </textarea><br>
    <input type='submit'>
    </form>";
}
?>

<?php
/********* PHP 错误处理 *********/
//透过外部文件来演示如何做错误处理
echo "<h2>PHP 错误处理 实例</h2>";
echo "<a href=\"test_error.php\">Test_session</a>";
?>

<?php
/********* PHP 异常处理 *********/
//异常处理用于在指定的错误（异常）情况发生时改变脚本的正常流程。这种情况称为异常。
//异常处理 有分层的概念!!
//当异常被触发时，通常会发生：
//	当前代码状态被保存
//	代码执行被切换到预定义（自定义）的异常处理器函数
//	根据情况，处理器也许会从保存的代码状态重新开始执行代码，终止脚本执行，或从代码中另外的位置继续执行脚本
//透过外部文件来演示如何做异常处理
echo "<h2>PHP 异常处理 实例</h2>";
echo "<a href=\"test_exception.php\">Test_session</a>";
?>

<?php
/********* PHP 过滤器 *********/
//PHP 过滤器用于验证和过滤来自非安全来源的数据，比如用户的输入。
//	filter_var() - 通过一个指定的过滤器来过滤单一的变量
//	filter_var_array() - 通过相同的或不同的过滤器来过滤多个变量
//	filter_input - 获取一个输入变量，并对它进行过滤
//	filter_input_array - 获取多个输入变量，并通过相同的或不同的过滤器对它们进行过滤
//有两种过滤器：
//	Validating 过滤器：
//		用于验证用户输入
//		严格的格式规则（比如 URL 或 E-Mail 验证）
//		如果成功则返回预期的类型，如果失败则返回 FALSE
//	Sanitizing 过滤器：
//		用于允许或禁止字符串中指定的字符
//		无数据格式规则
//		始终返回字符串
echo "<h2>PHP 过滤器 实例</h2>";
//简单例子
$d22 = 123;
if(!filter_var($d22, FILTER_VALIDATE_INT))
{
	echo("不是一个合法的整数") ."<br>";
}
else
{
	echo("是个合法的整数") ."<br>";
}
//range验证例子,用 filter_var() 和 "min_range" 以及 "max_range" 选项验证了一个整数
//检测一个数字是否在一个范围内
$d23=300;
$d24_options = array(
	"options"=>array
	(
		"min_range"=>0,
		"max_range"=>256
	)
);
 
if(!filter_var($d23, FILTER_VALIDATE_INT, $d24_options))
{
	echo("不是一个合法的整数" )."<br>";
}
else
{
	echo("是个合法的整数")."<br>";
}
//验证输入例子	验证 email格式
//在浏览器打入 localhost:8099/html/html5_learn/php_learn/phptest.php?d25=kkk
//弹出"不是一个合法的 E-Mail"
//在浏览器打入 localhost:8099/html/html5_learn/php_learn/phptest.php
//弹出"没有 d25 参数"
//在浏览器打入 localhost:8099/html/html5_learn/php_learn/phptest.php?d25=kkk@qq.com
//弹出"是一个合法的 E-Mail"
if(!filter_has_var(INPUT_GET, "d25"))
{
	echo("没有 d25 参数")."<br>";
}
else
{
	if (!filter_input(INPUT_GET, "d25", FILTER_VALIDATE_EMAIL))
	{
		echo "不是一个合法的 E-Mail"."<br>";
	}
	else
	{
		echo "是一个合法的 E-Mail"."<br>";
	}
}
//净化输入例子
//在浏览器打入 localhost:8099/html/html5_learn/php_learn/phptest.php?d26=http://www.ruåånoøøob.com/
//会把 http://www.ruåånoøøob.com/ 进化成 http://www.runoob.com/ 显示
if(!filter_has_var(INPUT_GET, "d26"))
{
	echo("没有 d26 参数") . "<br>";
}
else
{
	$url = filter_input(INPUT_GET, "d26", FILTER_SANITIZE_URL);
	echo $url . "<br>";
}
//过滤多个输入例子
//在浏览器打入http://localhost:8099/html/html5_learn/php_learn/phptest.php?name=ken&age=18&email=hh@qq.com
//弹出"输入正确"
$d27_filters = array
(
	"name" => array
	(
		"filter"=>FILTER_SANITIZE_STRING
	),
	"age" => array
	(
		"filter"=>FILTER_VALIDATE_INT,
		"options"=>array
		(
		"min_range"=>1,
		"max_range"=>120
		)
	),
	"email"=> FILTER_VALIDATE_EMAIL
);
 
$d28 = filter_input_array(INPUT_GET, $d27_filters);
 
if (!$d28["age"])
{
	echo("年龄必须在 1 到 120 之间。<br>");
}
elseif(!$d28["email"])
{
	echo("E-Mail 不合法<br>");
}
else
{
	echo("输入正确<br>");
}
//使用 Filter Callback 例子
//及可自定义过滤函数!!!
function convertSpace($d29_string)
{
	return str_replace("_", ".", $d29_string);	//包字符串的 _ 换成 .
}
$d29_string = "www_runoob_com!";
echo filter_var($d29_string, FILTER_CALLBACK,array("options"=>"convertSpace")) ."<br>";
//检测 IPv6 地址
$d30_ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
if (!filter_var($d30_ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
	echo("$d30_ip 是一个 IPv6 地址") ."<br>";
} else {
	echo("$d30_ip 不是一个 IPv6 地址") ."<br>";
}
//检测 URL - 必须包含QUERY_STRING（查询字符串）
//以下实例使用了 filter_var() 函数来检测 $url 是否包含查询字符串：
$d31_url = "http://www.runoob.com";

if (!filter_var($d31_url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
	echo("$d31_url 是一个合法的 URL")."<br>";
} else {
	echo("$d31_url 不是一个合法的 URL")."<br>";
}
//移除 ASCII 值大于 127 的字符
$d32_str = "Hello WorldÆØÅ!";
$d33_newstr = filter_var($d32_str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo $d33_newstr . "<br>";
?>

<?php
/********* PHP JSON *********/
//演示把php内容编码成json格式,或者就把json内容换成 php 变量内容
//string json_encode ( $value [, $options = 0 ] ) 编码成json
//	value: 要编码的值。该函数只对 UTF-8 编码的数据有效。
//	options:由以下常量组成的二进制掩码：JSON_HEX_QUOT, JSON_HEX_TAG, JSON_HEX_AMP, 
//		JSON_HEX_APOS, JSON_NUMERIC_CHECK,JSON_PRETTY_PRINT, JSON_UNESCAPED_SLASHES, JSON_FORCE_OBJECT
//mixed json_decode ($json [,$assoc = false [, $depth = 512 [, $options = 0 ]]]) 解码json
//	json_string: 待解码的 JSON 字符串，必须是 UTF-8 编码数据
//	assoc: 当该参数为 TRUE 时，将返回数组，FALSE 时返回对象。
//	depth: 整数类型的参数，它指定递归深度
//	options: 二进制掩码，目前只支持 JSON_BIGINT_AS_STRING 。
echo "<h2>PHP JSON 实例</h2>";
//编码例子
$d34_arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
echo json_encode($d34_arr)."<br>";
//编码例子2
class d35 {
	public $name = "";
	public $hobbies  = "";
	public $birthdate = "";
}
	$d36 = new d35();
	$d36->name = "sachin";
	$d36->hobbies  = "sports";
	$d36->birthdate = date('m/d/Y h:i:s a', "8/5/1974 12:20:03 p");
	$d36->birthdate = date('m/d/Y h:i:s a', strtotime("8/5/1974 12:20:03"));
echo json_encode($d36)."<br>";
//解码例子
$d37_json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
var_dump(json_decode($d37_json));
echo"<br>";	
var_dump(json_decode($d37_json, true));
echo"<br>";	
?>

<?php
/********* PHP mysql *********/
//php 的mysql接口驱动: mysqli 或者 pdo
//通过外部链接实践讨论
//注意 实验时,补全密码
echo "<h2>PHP mysql 实例</h2>";
echo "<a href=\"test_mysql.php\">Test_session</a>";
?>

<?php
/********* PHP xml *********/
//XML 文件描述了数据的结构
//php 自带的三个解析器:Expat,DOM,SimpleXML
echo "<h2>PHP xml 实例</h2>";
//Expat解析器:基于事件的解析器：将 XML 文档视为一系列的事件。当某个具体的事件发生时，解析器会调用函数来处理
//Expat是不检查有效性的解析器，忽略任何 DTD,作为一款基于事件、非验证的 XML 解析器，Expat 快速且轻巧，十分适合 PHP 的 Web 应用程序
//也就说:诸如 <from></from> 的标准段内容头尾只会简单识别,对于这些段内容不会作做标准解析!!
//Expat例子:
	echo "Expat例子" . "<br>";
	$d38_parser=xml_parser_create();	//Initialize the XML parser
	//Function to use at the start of an element
	function d38_start($d38_parser,$d38_element_name,$d38_element_attrs)
	{
		switch($d38_element_name)
		{
			case "NOTE":
				echo "-- Note --<br>";
				break;
			case "TO":
				echo "To: ";
				break;
			case "FROM":
				echo "From: ";
				break;
			case "HEADING":
				echo "Heading: ";
				break;
			case "BODY":
				echo "Message: ";
		}
	}	
	//Function to use at the end of an element
	function d38_stop($d38_parser,$d38_element_name)
	{
		echo "<br>";
	}
	//Function to use when finding character data
	function d38_char($d38_parser,$d38_data)
	{
		echo $d38_data;
	}
	//Specify element handler
	xml_set_element_handler($d38_parser,"d38_start","d38_stop");
	//Specify data handler
	xml_set_character_data_handler($d38_parser,"d38_char");
	//Open XML file
	$d38_fp=fopen("test_xml.xml","r");
	//Read data
	while ($d38_data=fread($d38_fp,4096))
	{
		xml_parse($d38_parser,$d38_data,feof($d38_fp)) or
		die (sprintf("XML Error: %s at line %d",
			xml_error_string(xml_get_error_code($d38_parser)),
			xml_get_current_line_number($d38_parser)));
	}	
	//Free the XML parser
	xml_parser_free($d38_parser);
	echo "<br>";
//W3C DOM 提供了针对 HTML 和 XML 文档的标准对象集，以及用于访问和操作这些文档的标准接口。
//W3C DOM 被分为不同的部分（Core, XML 和 HTML）和不同的级别（DOM Level 1/2/3）：
//* Core DOM - 为任何结构化文档定义标准的对象集
//* XML DOM - 为 XML 文档定义标准的对象集
//* HTML DOM - 为 HTML 文档定义标准的对象集
//xml 的 DOM 解析器:基于树的解析器：这种解析器把 XML 文档转换为树型结构。它分析整篇文档，并提供了对树中元素的访问，例如文档对象模型 (DOM)。
//DOM例子
	echo "DOM例子" . "<br>";
	$d39_xmlDoc = new DOMDocument();
	$d39_xmlDoc->load("test_xml.xml");
	print $d39_xmlDoc->saveXML();	//test_expat.xml的内容会完全被编到输出 html 源代码中去!!,浏览器可查看
	echo "<br>";
	//遍历 <note> 元素的所有元素
	$d39_x = $d39_xmlDoc->documentElement;
	foreach ($d39_x->childNodes AS $d39_item)
	{
		print $d39_item->nodeName . " = " . $d39_item->nodeValue . "<br>";
	}
	echo "<br>";
//SimpleXML 扩展提供了一种获取 XML 元素的名称和文本的简单方式
//SimpleXML例子
	echo "SimpleXML例子" . "<br>";
	$d40_xml=simplexml_load_file("test_xml.xml");
	print_r($d40_xml);
	echo $d40_xml->to . "<br>";
	echo $d40_xml->from . "<br>";
	echo $d40_xml->heading . "<br>";
	echo $d40_xml->body;
	echo $d40_xml->getName() . "<br>"; 
	foreach($d40_xml->children() as $d40_child)
	{
		echo $d40_child->getName() . ": " . $d40_child . "<br>";
	}
	echo "<br>";
?>

<?php
/********* PHP AJAX *********/
//AJAX 是一种用于创建快速动态网页的技术。
//AJAX 通过在后台与服务器进行少量数据交换，使网页实现异步更新。这意味着可以在不重载整个页面的情况下，对网页的某些部分进行更新
//AJAX 基于因特网标准，并使用以下技术组合：
//	XMLHttpRequest 对象（与服务器异步交互数据）
//	JavaScript/DOM（显示/取回信息）
//	CSS（设置数据的样式）
//	XML（常用作数据传输的格式）
echo "<h2>PHP AJAX 实例</h2>";
echo "<a href=\"test_AJAX.php\">Test_AJAX</a>";
//传统情况:
//	浏览器 登录网页,远程服务器把整页源码发来,浏览器解析源码显示
//	浏览器用户提交表单, 远程服务器处理表单请求,重新解析出整页源码,
//	服务器重新把新整页源码发过来,浏览器解析源码显示
//使用ajax情况:
//	浏览器 登录网页,远程服务器把整页源码发来,浏览器解析源码显示,其中一些变量,以一些占位符代替
//	浏览器用户提交表单, 实际确实传递了处理请求,
//	服务器处理请求,返回结果信息,结果信息填充了旧的整页源码中某个占位符,浏览器解析源码显示
//显而易见,使用ajax的话,就避免了 服务器重新解析出整页源码,重新把新整页源码发过来 的耗时操作
//ajax占位符操作示范例子为:
//	替换占位符原有内容:
//		整页源码某段内容 <xxx id="kkk">aaaaaaaa</xxx>,
//		提交处理请求后,远程服务器返回 一段vvvvvv内容,替换id="kkk"的段内容,
//		然后这段内容就变成 <xxx id="kkk">vvvvvv</xxx>
//	填充占位符:
//		整页源码某段内容 <hh id="ggg"></hh>,其实并每有实际内容
//		提交处理请求后,远程服务器返回 一段momomomo内容,填到id="ggg"的段,
//		然后这段内容就变成 <hh id="ggg">momomomo</hh>
//	独一无二的占位符,其实就是对应独一无二的 id,号 与段头/尾标识无关,
//		譬如说,上述来两例子的 占位符 与 段头/尾标识(xxx,hh) 无关系 只与 id有关
?>

<!-- ////////////////////////////////////////长篇独立内容分割符/////////////////////////////////////////// -->
<?php
/********* 其他 *********/
echo "<h2>php 其他 实例</h2>";
//运算符: http://www.runoob.com/php/php-operators.html
//数组排序: http://www.runoob.com/php/php-arrays-sort.html
//if else 		用法与 c语言一样
//switch case break 	用法与 c语言一样
//while 循环		用法与 c语言一样
//for 循环		用法与 c语言一样
//php 日期函数:	http://www.runoob.com/php/php-date.html
	echo date("Y/m/d") . "<br>";
	echo date("Y.m.d") . "<br>";
	echo date("Y-m-d") . "<br>";
//PHP 包含:
	//包含文件省去了大量的工作。意味着可以为所有网页创建标准页头、页脚或者菜单文件。
	//然后，在页头需要更新时，您只需更新这个页头包含文件即可。
	//include 和 require 区别:
	//使用 require 包含文件时:若出错,生成一个致命错误（E_COMPILE_ERROR），在错误发生后脚本会停止执行
	//使用 include 包含文件时:若出错,生成一个警告（E_WARNING），在错误发生后脚本会继续执行。
	include 'test_include.php';
	require 'test_require.php';
//PHP 表单深入 :主要看 <!-- 深入表单 --> 链接到的 test_form.php文件
?> 

<!-- 普通内容显示 -->
	<br>
	这段文字,并没有任何,<>头内容,测试是否可以显示
	<br>
</body>
</html>
