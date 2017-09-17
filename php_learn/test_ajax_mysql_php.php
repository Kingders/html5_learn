<meta charset="utf-8"> 

<?php
//带 mysql 实例 相关
//$a2_q = isset($_GET["a2_q"]) ? intval($_GET["a2_q"]) : '';	//输入检测,仅限数字
$a2_q = $_GET["a2_q"];
echo $a2_q."<br>";

if(empty($a2_q)) {
    echo '请选择一个网站';
    exit;
}
 
$a2_con = mysqli_connect('localhost','root','3*********');
if (!$a2_con)
{
    die('Could not connect: ' . mysqli_error($a2_con));
}
// 选择数据库
mysqli_select_db($a2_con,"test_phpmysql");
// 设置编码，防止中文乱码
mysqli_set_charset($a2_con, "utf8");
 
$a2_sql="SELECT * FROM MyGuests WHERE firstname = "."'".$a2_q."'";
//$a2_sql="SELECT * FROM MyGuests WHERE id = $a2_q ";
echo $a2_sql."<br>";
$a2_result = mysqli_query($a2_con,$a2_sql);
 
echo "<table border='1'>
<tr>
<th>ID</th>
<th>firstnanme</th>
<th>lastname</th>
<th>email</th>
</tr>";
while($a2_row = mysqli_fetch_array($a2_result))
{
    echo "<tr>";
    echo "<td>" . $a2_row['id'] . "</td>";
    echo "<td>" . $a2_row['firstname'] . "</td>";
    echo "<td>" . $a2_row['lastname'] . "</td>";
    echo "<td>" . $a2_row['email'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($a2_con);
?>

