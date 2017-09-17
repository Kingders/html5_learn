
<!DOCTYPE html> 
<html> 
<head> 
<meta charset="utf-8"> 
<title>菜鸟教程(runoob.com)</title> 

<!-- ajax 简单实例 相关js -->
<script>
function showHint(str)
{
    if (str.length==0)
    { 
        document.getElementById("a1_txtHint").innerHTML="";
        return;
    }
    if (window.XMLHttpRequest)
    {
        // IE7+, Firefox, Chrome, Opera, Safari 浏览器执行的代码
        xmlhttp=new XMLHttpRequest();
    }
    else
    {    
        //IE6, IE5 浏览器执行的代码
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("a1_txtHint").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","test_ajax_php.php?a1_q="+str,true);
    xmlhttp.send();
}
</script>

<!-- ajax + mysql 示例 使用的 js -->
<script>
function a2_showmassage(str)
{
    if (str=="")
    {
        document.getElementById("a2_txtHint").innerHTML="";
        return;
    } 
    if (window.XMLHttpRequest)
    {
        // IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
        xmlhttp=new XMLHttpRequest();
    }
    else
    {
        // IE6, IE5 浏览器执行代码
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("a2_txtHint").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","test_ajax_mysql_php.php?a2_q="+str,true);
    //注意,不同例子使用的 .php处理内容脚本最好还是分开独立文件放比较好,因为,容易冲突!!
    xmlhttp.send();
}
</script>


<!-- ajax + xml 相关js -->
<script>
function a3_showCD(str)
{
    if (str=="")
    {
        document.getElementById("a3_txtHint").innerHTML="";
        return;
    } 
    if (window.XMLHttpRequest)
    {
        // IE7+, Firefox, Chrome, Opera, Safari 浏览器执行
        xmlhttp=new XMLHttpRequest();
    }
    else
    {
        // IE6, IE5 浏览器执行
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("a3_txtHint").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","test_ajax_xml_php.php?a3_q="+str,true);
    xmlhttp.send();
}
</script>


<!-- ajax 综合例子 实时搜索 livesearch 相关js -->
<script>
function a4_showResult(str)
{
    if (str.length==0)
    { 
        document.getElementById("a4_livesearch").innerHTML="";
        document.getElementById("a4_livesearch").style.border="0px";
        return;
    }
    if (window.XMLHttpRequest)
    {// IE7+, Firefox, Chrome, Opera, Safari 浏览器执行
        xmlhttp=new XMLHttpRequest();
    }
    else
    {// IE6, IE5 浏览器执行
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("a4_livesearch").innerHTML=xmlhttp.responseText;
            document.getElementById("a4_livesearch").style.border="1px solid #A5ACB2";
        }
    }
    xmlhttp.open("GET","test_ajax_livesearch.php?a4_q="+str,true);
    xmlhttp.send();
}
</script>


<!-- ajax 综合例子 RSS 阅读器 相关js -->
<script>
function a5_showRSS(str)
{
    if (str.length==0)
    { 
        document.getElementById("a5_rssOutput").innerHTML="";
        return;
        }
    if (window.XMLHttpRequest)
    {
        // IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
        xmlhttp=new XMLHttpRequest();
    }
    else
    {
        // IE6, IE5 浏览器执行代码
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("a5_rssOutput").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","test_ajax_rss_demo.php?a5_q="+str,true);
    xmlhttp.send();
}
</script>


<!-- ajax 综合例子 投票 相关js -->
<script>
function a6_getVote(int) {
  if (window.XMLHttpRequest) {
    // IE7+, Firefox, Chrome, Opera, Safari 执行代码
    xmlhttp=new XMLHttpRequest();
  } else {
    // IE6, IE5 执行代码
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
      document.getElementById("a6_poll").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","test_ajax_vote.php?a6_vote="+int,true);
  xmlhttp.send();
}
</script>


</head>



<body>
 
	<h2>ajax 简单实例</h2>
	<p>返回值: <span id="a1_txtHint"></span></p>
	<p><b>在输入框中输入一个姓名:</b></p>
	<form> 
	姓名: <input type="text" onkeyup="showHint(this.value)">
	</form>


	<h2>ajax+mysql 示例</h2>
	<form>
	<select name="users" onchange="a2_showmassage(this.value)">
	<option value="">选择firstname:</option>
	<option value="bili">bili</option>
	<option value="kate">kate</option>
	<option value="Mary">Mary</option>
	<option value="king">king</option>
	<option value="John">John</option>
	</select>
	</form>
	<br>
	<div id="a2_txtHint"><b>网站信息显示在这里……</b></div>


	<h2>ajax+xml 示例</h2>
	<form>
	Select a CD:
	<select name="cds" onchange="a3_showCD(this.value)">
	<option value="">Select a CD:</option>
	<option value="Bob Dylan">Bob Dylan</option>
	<option value="Bonnie Tyler">Bonnie Tyler</option>
	<option value="Dolly Parton">Dolly Parton</option>
	</select>
	</form>
	<div id="a3_txtHint"><b>CD info will be listed here...</b></div>
 

	<h2>ajax 综合例子 livesearch 示例</h2>
	通过搜索test_ajax_livesearch.xml<br>
	<form>
	<input type="text" size="30" onkeyup="a4_showResult(this.value)">例如输入html试试
	<div id="a4_livesearch"></div>
	</form>


	<h2>ajax 综合例子 RSS 阅读器 示例</h2>
	<form>
	<select onchange="a5_showRSS(this.value)">
	<option value="">选择一个 RSS-feed:</option>
	<option value="rss">读取 RSS 数据</option>
	</select>
	</form>
	<br>
	<div id="a5_rssOutput">RSS-feed 数据列表...</div>


	<h2>ajax 综合例子 投票 示例</h2>
	<div id="a6_poll">
	<h3>你喜欢 PHP 和 AJAX 吗?</h3>
	<form>
	是:
	<input type="radio" name="vote" value="0" onclick="a6_getVote(this.value)">
	<br>否:
	<input type="radio" name="vote" value="1" onclick="a6_getVote(this.value)">
	</form>
	</div>

</body>
</html>

