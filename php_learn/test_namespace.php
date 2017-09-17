<?php
// php 脚本框 <?php 前出现了“<html>” 会致命错误 -　命名空间必须是程序脚本的第一条语句 
//在声明命名空间之前唯一合法的代码是用于定义源文件编码方式的 declare 语句。所有非 PHP 代码包括空白符都不能出现在命名空间的声明之前。
declare(encoding='UTF-8'); //定义多个命名空间和不包含在命名空间中的代码

namespace MyProject1;  
// MyProject1 命名空间中的PHP代码  
 
namespace MyProject2;  
// MyProject2 命名空间中的PHP代码    
 
/** 另一种命名空间语法 **/
namespace MyProject3 {  
 // MyProject3 命名空间中的PHP代码
echo "<h2>命名空间 MyProject3</h2>";
const CONNECT_OK = 1;
class Connection { /* ... */ }
function connect() { /* ... */  } 

}  

namespace MyProject3\Sub\Level;  //声明分层次的单个命名空间
// MyProject3 子命名空间中的PHP代码
echo "<h2>子命名空间 MyProject3\Sub\Level</h2>";
const CONNECT_OK = 1;
class Connection { /* ... */ }
function Connect() { /* ... */  }
}
namespace { // 全局代码
echo "全局空间";
session_start();
$a = MyProject3\connect();
echo MyProject3\Connection::start();
}
echo "全局空间";
?>  
