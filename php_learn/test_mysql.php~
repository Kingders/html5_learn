<meta charset="utf-8"> 
<?php
$servername = "localhost";
$username = "root";
$password = "3***********";
?>
<?php
////////////////////////////////////////mysqli接口 - 面向对象 例子
//创建连接
	//只是连接到mysql,还没有连接哪个db
	//$a1_conn = new mysqli($servername, $username, $password);
	//这里创建连接时直接连接到 test_phpmysql3 数据库
	$a1_conn = new mysqli($servername, $username, $password, "test_phpmysql");
	//检测连接
	if ($a1_conn->connect_error) {
		die("连接失败: " . $a1_conn->connect_error."<br>");
	} 
	echo "mysqli接口 - 面向对象 连接成功"."<br>";


//创建数据库
	$a1_sql = "CREATE DATABASE test_phpmysql";
	if ($a1_conn->query($a1_sql) === TRUE) {
		echo "数据库创建成功"."<br>";
	} else {
		echo "Error creating database: " . $a1_conn->error . "<br>";
	}

//创建数据表
	$a1_sql = "CREATE TABLE MyGuests (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50),
	reg_date TIMESTAMP
	)";
	if ($a1_conn->query($a1_sql) === TRUE) {
	    echo "Table MyGuests created successfully". "<br>";
	} else {
	    echo "创建数据表错误: " . $a1_conn->error. "<br>";
	}
//插入数据
	$a1_sql = "INSERT INTO MyGuests (firstname, lastname, email)
	VALUES ('John', 'Doe', 'john@example.com')";
	
	if ($a1_conn->query($a1_sql) === TRUE) {
	    echo "新记录插入成功". "<br>";
	} else {
	    echo "Error: " . $a1_sql . "<br>" . $a1_conn->error. "<br>";
	}
//插入数据的第二种方法,演示 mysqli 预处理操作的例子
	//定制 mysql 命令操作模板
	//这里的命令操作模板 是 插入数据操作
	$a1_stmt = $a1_conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
	//把实际使用参数 绑定到 命令模板中的参数位置
	//参数可以是以下四种参数:
	//	i - 整数
	//	d - 双精度浮点数
	//	s - 字符串
	//	b - 布尔值
	//下面"sss"表示:$a1_firstname, $a1_lastname, $a1_email 三个实际使用参数都是 字符串
	$a1_stmt->bind_param("sss", $a1_firstname, $a1_lastname, $a1_email);
 	// 设置参数并执行
	$a1_firstname = "bili";
	$a1_lastname = "bodo";
	$a1_email = "bili@example.com";
	$a1_stmt->execute();	//执行预定义的命令模板 (插入数据) 
	$a1_firstname = "asha";
	$a1_lastname = "lye";
	$a1_email = "asha@example.com";
	$a1_stmt->execute();	//执行预定义的命令模板 (插入数据) 
	$a1_firstname = "king";
	$a1_lastname = "shiha";
	$a1_email = "king@example.com";
	$a1_stmt->execute();	//执行预定义的命令模板 (插入数据)
	echo "预处理操作 新记录插入成功"."<br>";
	//关闭 预处理命令模板
	$a1_stmt->close();
	//注意,预处理 与 multi_query() 是冲突的,所以 预处理演示要在插入多条之前

//读取数据
	$a1_sql1 = "SELECT id, firstname, lastname FROM MyGuests";
	$a1_result = $a1_conn->query($a1_sql1);
	if ($a1_result->num_rows > 0) {
	    // 输出数据
	    while($a1_row = $a1_result->fetch_assoc()) {
	        echo "id: " . $a1_row["id"]. " - Name: " . $a1_row["firstname"]. " " . $a1_row["lastname"]. "<br>";
	    }
	} else {
	    echo "0 结果". "<br>";
	}
	//读取数据也是 跟 插入多条数据 multi_query 冲突,所以 预处理演示要在插入多条之前

//插入多条数据
	$a1_sql = "INSERT INTO MyGuests (firstname, lastname, email)
	VALUES ('kate', 'afe', 'kate@example.com');";
	$a1_sql .= "INSERT INTO MyGuests (firstname, lastname, email)
	VALUES ('Mary', 'Moe', 'mary@example.com');";
	$a1_sql .= "INSERT INTO MyGuests (firstname, lastname, email)
	VALUES ('Julie', 'Dooley', 'julie@example.com')";
	 
	if ($a1_conn->multi_query($a1_sql) === TRUE) {		//使用multi_query
	    echo "多条新记录插入成功". "<br>";
	} else {
	    echo "Error: " . $a1_sql . "<br>" . $a1_conn->error. "<br>";
	}

//删除数据库
	//$a1_delete_db = "drop database test_phpmysql";
	//if ($a1_conn->query($a1_delete_db) === TRUE) {
	//	echo "删除数据库成功"."<br>";
	//} else {
	//	echo "Error delete database: " . $a1_conn->error ."<br>";
	//}
//关闭db
	$a1_conn->close(); 
	echo "已关闭"."<br>";
?>

<?php

////////////////////////////////////////MySQLi接口 - 面向过程 例子
//创建连接
	//这里创建连接时直接连接到 test_phpmysql3 数据库
	$a2_conn = mysqli_connect($servername, $username, $password, "test_phpmysql2");
	//只是连接到mysql,还没有连接哪个db
	//$a2_conn = mysqli_connect($servername, $username, $password);
	//检测连接
	if (!$a2_conn) {
		die("Connection failed: " . mysqli_connect_error() . "<br>");
	}
	echo "MySQLi接口 - 面向过程 连接成功" . "<br>";
//创建数据库
	$a2_sql = "CREATE DATABASE test_phpmysql2";
	if (mysqli_query($a2_conn, $a2_sql)) {
		echo "数据库创建成功"."<br>";
	} else {
		echo "Error creating database: " . mysqli_error($a2_conn)."<br>";
	}
//创建数据表
	$a2_sql = "CREATE TABLE MyGuests (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50),
	reg_date TIMESTAMP
	)";
	
	if (mysqli_query($a2_conn, $a2_sql)) {
	    echo "数据表 MyGuests 创建成功"."<br>";
	} else {
	    echo "创建数据表错误: " . mysqli_error($a2_conn)."<br>";
	}
//插入数据
	$a2_sql = "INSERT INTO MyGuests (firstname, lastname, email)
	VALUES ('John', 'Doe', 'john@example.com')";
	
	if (mysqli_query($a2_conn, $a2_sql)) {
	    echo "新记录插入成功"."<br>";
	} else {
	    echo "Error: " . $a2_sql . "<br>" . mysqli_error($a2_conn)."<br>";
	}
//插入数据的第二种方法,演示 mysqli 预处理操作的例子
	$a2_sql1 = "INSERT INTO MyGuests(firstname, lastname, email)  VALUES(?, ?, ?)";
 	// 为 mysqli_stmt_prepare() 初始化 statement 对象
    	$a2_stmt = mysqli_stmt_init($a2_conn);
	if (mysqli_stmt_prepare($a2_stmt, $a2_sql1))	{
		// 绑定参数
		mysqli_stmt_bind_param($a2_stmt, 'sss', $a2_firstname, $a2_lastname, $a2_email);
 		// 设置参数并执行
		$a2_firstname = "bili";
		$a2_lastname = "bodo";
		$a2_email = "bili@example.com";
		mysqli_stmt_execute($a2_stmt);	//执行预定义的命令模板 (插入数据) 
		$a2_firstname = "asha";
		$a2_lastname = "lye";
		$a2_email = "asha@example.com";
		mysqli_stmt_execute($a2_stmt);	//执行预定义的命令模板 (插入数据) 
		$a2_firstname = "king";
		$a2_lastname = "shiha";
		$a2_email = "king@example.com";
		mysqli_stmt_execute($a2_stmt);	//执行预定义的命令模板 (插入数据)
		echo "预处理操作 新记录插入成功"."<br>";
		//关闭 预处理命令模板
		mysqli_stmt_close($a2_stmt);
	}
	//注意,预处理 与 multi_query() 是冲突的,所以 预处理演示要在插入多条之前
	//因为冲突时候 mysqli_stmt_prepare 不成功
//读取数据
	$a2_sql2 = "SELECT id, firstname, lastname FROM MyGuests";
	$a2_result = mysqli_query($a2_conn, $a2_sql2);
 	if (mysqli_num_rows($a2_result) > 0) {
		// 输出数据
		while($a2_row = mysqli_fetch_assoc($a2_result)) {
			echo "id: " . $a2_row["id"]. " - Name: " . $a2_row["firstname"]. " " . $a2_row["lastname"]. "<br>";
		}
	} else {
		echo "0 结果" . "<br>";
	}
	//读取数据也是 跟 插入多条数据 multi_query 冲突,所以 预处理演示要在插入多条之前
//查找 where (暂时只有面向过程的例子)
	echo "查找bili". "<br>";
	$a2_result1 = mysqli_query($a2_conn,"SELECT * FROM MyGuests
	WHERE firstname='bili'");
	while($a2_row1 = mysqli_fetch_array($a2_result1))
	{
		echo $a2_row1['firstname'] . " " . $a2_row1['lastname'] ." " . $a2_row1['email'] ;
		echo "<br>";
	}
	//查找数据也是 跟 插入多条数据 multi_query 冲突,所以 预处理演示要在插入多条之前
//升序排序 ORDER BY 关键词默认对记录进行升序排序  (暂时只有面向过程的例子)
	echo "升序排序". "<br>";
	$a2_result2 = mysqli_query($a2_conn,"SELECT * FROM MyGuests ORDER BY lastname");
	while($a2_row2 = mysqli_fetch_array($a2_result2))
	{
		echo $a2_row2['lastname'];
		echo " " . $a2_row2['firstname'];
		echo " " . $a2_row2['Age'];
		echo "<br>";
	}
	//mysql 排序语法:SELECT column_name(s) FROM table_name ORDER BY column_name(s) ASC|DESC
	//mysql 多个列排序语法:SELECT column_name(s) FROM table_name ORDER BY column1, column2
	//如果降序排序，请使用 DESC 关键字
	//ORDER BY 跟 插入多条数据 multi_query 冲突,所以 预处理演示要在插入多条之前
//更新数据 update (暂时只有面向过程的例子)
	echo "更新bili的邮箱地址". "<br>";
	mysqli_query($a2_conn,"UPDATE MyGuests SET email='nnnnaaaa@qq.com' 
	WHERE firstname='bili' AND lastname='bodo'");
	//update是内部操作,不想上述那些操作那样返回一张 a2_result 数组数据供显示
	//或者 跟 插入多条数据 multi_query 冲突, 未测试是否冲突!!
//删除数据
	echo "删除数据". "<br>";
	mysqli_query($a2_conn,"DELETE FROM MyGuests WHERE lastname='lye'");

//插入多条数据
	$a2_sql = "INSERT INTO MyGuests (firstname, lastname, email)
	VALUES ('kate', 'afe', 'kate@example.com');";
	$a2_sql .= "INSERT INTO MyGuests (firstname, lastname, email)
	VALUES ('Mary', 'Moe', 'mary@example.com');";
	$a2_sql .= "INSERT INTO MyGuests (firstname, lastname, email)
	VALUES ('Julie', 'Dooley', 'julie@example.com')";
	 
	if (mysqli_multi_query($a2_conn, $a2_sql)) {		//使用multi_query
	    echo "多条新记录插入成功". "<br>";
	} else {
	    echo "Error: " . $a2_sql . "<br>" . $a2_conn->error. "<br>";
	}


//删除数据库
	//$a2_delete_db = "drop database test_phpmysql2";
	//if (mysqli_query($a2_conn, $a2_delete_db)) {
	//	echo "删除数据库成功"."<br>";
	//} else {
	//	echo "Error delete database: " . mysqli_error($a2_conn)."<br>";
	//}
//关闭db
	mysqli_close($a2_conn); 
	echo "已关闭" . "<br>";
?>
	
<?php

////////////////////////////////////////PDO接口 例子
//读取数据的前期工作,制作一个显示表格
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";
class a3_TableRows extends RecursiveIteratorIterator {
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }
 
    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }
 
    function beginChildren() { 
        echo "<tr>"; 
    } 
 
    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 

	try {	
//创建连接
		//这里创建连接时直接连接到 test_phpmysql3 数据库
		$a3_conn = new PDO("mysql:host=$servername;dbname=test_phpmysql3", $username, $password);
		//只是连接到mysql,还没有连接哪个db
		//$a3_conn = new PDO("mysql:host=$servername", $username, $password);
		echo "PDO接口 连接成功" . "<br>"; 
		//设置 PDO 错误模式为异常
		$a3_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//创建数据库
		//$a3_sql = "CREATE DATABASE test_phpmysql3";
		//// 使用 exec() ，因为没有结果返回
		//$a3_conn->exec($a3_sql);
		//echo "数据库创建成功<br>"; 
//创建数据表
		//$a3_sql = "CREATE TABLE MyGuests (
		//id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		//firstname VARCHAR(30) NOT NULL,
		//lastname VARCHAR(30) NOT NULL,
		//email VARCHAR(50),
		//reg_date TIMESTAMP
		//)";
		//// 使用 exec() ，没有结果返回
		//$a3_conn->exec($a3_sql);
		//echo "数据表 MyGuests 创建成功"."<br>";
//插入数据
		$a3_sql = "INSERT INTO MyGuests (firstname, lastname, email)
		VALUES ('John', 'Doe', 'john@example.com')";
		// 使用 exec() ，没有结果返回
		$a3_conn->exec($a3_sql);
		echo "新记录插入成功"."<br>";

//插入多条数据
		// 开始事务
		$a3_conn->beginTransaction();
		// SQL 语句
		$a3_conn->exec("INSERT INTO MyGuests (firstname, lastname, email) 
		VALUES ('kate', 'afe', 'kate@example.com')");
		$a3_conn->exec("INSERT INTO MyGuests (firstname, lastname, email) 
		VALUES ('Mary', 'Moe', 'mary@example.com')");
		$a3_conn->exec("INSERT INTO MyGuests (firstname, lastname, email) 
		VALUES ('Julie', 'Dooley', 'julie@example.com')");
		// 提交事务
		$a3_conn->commit();
		echo "多条新记录插入成功"."<br>";

//插入数据的第二种方法,演示 PDO 预处理操作的例子
		// 预处理 SQL 并绑定参数
		$a3_stmt = $a3_conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) 
		VALUES (:firstname, :lastname, :email)");
		$a3_stmt->bindParam(':firstname', $a3_firstname);
		$a3_stmt->bindParam(':lastname', $a3_lastname);
		$a3_stmt->bindParam(':email', $a3_email);
		// 设置参数并执行
		$a3_firstname = "bili";
		$a3_lastname = "bodo";
		$a3_email = "bili@example.com";
		$a3_stmt->execute();	//执行预定义的命令模板 (插入数据) 
		$a3_firstname = "asha";
		$a3_lastname = "lye";
		$a3_email = "asha@example.com";
		$a3_stmt->execute();	//执行预定义的命令模板 (插入数据) 
		$a3_firstname = "king";
		$a3_lastname = "shiha";
		$a3_email = "king@example.com";
		$a3_stmt->execute();	//执行预定义的命令模板 (插入数据)
		echo "预处理操作 新记录插入成功"."<br>";
		//PDO模式下,并没有与 插入多条数据 冲突!!!
//读取数据 (填到前期制作的表格中去)
		$a3_stmt1 = $a3_conn->prepare("SELECT id, firstname, lastname FROM MyGuests"); 
		$a3_stmt1->execute();
 		// 设置结果集为关联数组
		$a3_result = $a3_stmt1->setFetchMode(PDO::FETCH_ASSOC); 
		foreach(new a3_TableRows(new RecursiveArrayIterator($a3_stmt1->fetchAll())) as $k=>$v) { 
			echo $v;
		}
		echo "</table>";

//删除数据库
		//$a3_delete_sql = "drop database test_phpmysql3";
		//// 使用 exec() ，因为没有结果返回
		//$a3_conn->exec($a3_delete_sql);
		//echo "删除数据库成功<br>"; 

	}

	catch(PDOException $a3_e)
	{
		// 插入多条数据 的特定异常操作,如果执行失败回滚
		$a3_conn->rollback();
		echo $a3_sql . "<br>" .$a3_e->getMessage() ."<br>";
	}

//关闭db
	$a3_conn = null;
	echo "已关闭" . "<br>";

?>


