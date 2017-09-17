<meta charset="utf-8"> 

<!-- 第一种错误处理方式 -->
<?php
//自定义函数有专门格式的:
//error_function(error_level,error_message,error_file,error_line,error_context)
//error_level 		必需。为用户定义的错误规定错误报告级别。必须是一个数字。参见下面的表格：错误报告级别。
//error_message 	必需。为用户定义的错误规定错误消息。
//error_file 		可选。规定错误发生的文件名。
//error_line 		可选。规定错误发生的行号。
//error_context 	可选。规定一个数组，包含了当错误发生时在用的每个变量以及它们的值。
//自定义错误处理函数 customError,
//其中 $errno, $errstr就是对应系统参数:error_level,error_message
function customError($errno, $errstr)
{
	echo "<b>Error:</b> [$errno] $errstr"."<BR>";
	echo "脚本结束";
	//die();	//如果使能die(),那么遇到第一个错误就会直接调用die()结束脚本,不会再解析脚本余下部分.
	error_log("Error: [$errno] $errstr",1,
	"418128064@qq.com","From: webmaster@example.com");//错误发生，将发送带有错误消息的电子邮件，并结束脚本
							  //然而并没有发送成功,也没有结束脚本!!
}
//注册错误处理函数
//set_error_handler("customError",E_USER_WARNING);	//与下者邮区别,作用不同
set_error_handler("customError");
//触发错误:由于没有定义$test就echo
echo($test);
?>

<br>

<!-- 第二种错误处理方式 -->
<?php
//使用 trigger_error 主动触发,还会调回上述注册的 customError
$test1=2;
if ($test1>1)
{
    trigger_error("变量值必须小于等于 1",E_USER_WARNING);	//与下者邮区别,作用不同
    //trigger_error("变量值必须小于等于 1",E_USER_WARNING);
}
?>
