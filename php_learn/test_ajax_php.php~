

<?php
//ajax 简单实例 相关
// 将姓名填充到数组中
$a[]="Anna";
$a[]="Brittany";
$a[]="Cinderella";
$a[]="Diana";
$a[]="Eva";
$a[]="Fiona";
$a[]="Gunda";
$a[]="Hege";
$a[]="Inga";
$a[]="Johanna";
$a[]="Kitty";
$a[]="Linda";
$a[]="Nina";
$a[]="Ophelia";
$a[]="Petunia";
$a[]="Amanda";
$a[]="Raquel";
$a[]="Cindy";
$a[]="Doris";
$a[]="Eve";
$a[]="Evita";
$a[]="Sunniva";
$a[]="Tove";
$a[]="Unni";
$a[]="Violet";
$a[]="Liza";
$a[]="Elizabeth";
$a[]="Ellen";
$a[]="Wenche";
$a[]="Vicky";

//从请求URL地址中获取 q 参数
$a1_q=$_GET["a1_q"];

//查找是否由匹配值， 如果 q>0
if (strlen($a1_q) > 0)
{
    $a1_hint="";
    for($i=0; $i<count($a); $i++)
    {
        if (strtolower($a1_q)==strtolower(substr($a[$i],0,strlen($a1_q))))
        {
            if ($a1_hint=="")
            {
                $a1_hint=$a[$i];
            }
            else
            {
                $a1_hint=$a1_hint." , ".$a[$i];
            }
        }
    }
}

// 如果没有匹配值设置输出为 "no suggestion" 
if ($a1_hint == "")
{
    $a1_response="no suggestion";
}
else
{
    $a1_response=$a1_hint;
}

//输出返回值
echo $a1_response;
echo "<br>"."你好";_
?>




