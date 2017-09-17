<!DOCTYPE html>
<html manifest="demo_html.appcache">
<!-- 加 manifest 表示，告诉浏览器保存 脱机页面到demo_html.appcache 文件里 -->
<head>
	<!-- html注释符号长这样,上面的是修复 -->
	<meta charset="utf-8"> 
	<title>菜鸟教程(runoob.com)</title> 
	<meta charset="utf-8">
	<title>渲染 HTML5</title>
	<!--[if lt IE 9]>
	<script src="https://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
	<![endif]-->
	<!-- 上面是一段代码注释,但又可以修复 ie9 不支持html5 的问题,先不探究为啥一段注释还能起这种作用,暂时只知道是说什么Shiv 解决方案而已 -->

	<!-- 定义了一种格式style -->
	<script>document.createElement("myHero")</script>
	<style>
	myHero {
		display: block;
		background-color: #ddd;
		padding: 50px;
		font-size: 30px;
	} 
	</style>

	<!-- 拖放功能示例预设置 定义了俩个格式框 div1，div2，还有一些功能函数-->
	<style type="text/css">
		#div1, #div2
		{float:left; width:100px; height:35px; margin:10px;padding:10px;border:1px solid #aaaaaa;}
	</style>
	<script>
		function allowDrop(ev)		
		{
			ev.preventDefault();
		}		
		function drag(ev)
		{
			ev.dataTransfer.setData("Text",ev.target.id); //数据类型是 "Text"，值是可拖动元素的 id ("drag1")
		}
		function drop(ev)
		{
			ev.preventDefault();
			var data=ev.dataTransfer.getData("Text");
			ev.target.appendChild(document.getElementById(data));
		}
		//调用 preventDefault() 来避免浏览器对数据的默认处理（drop 事件的默认行为是以链接形式打开）
		//通过 dataTransfer.getData("Text") 方法获得被拖的数据。该方法将返回在 setData() 方法中设置为相同类型的任何数据。
		//被拖数据是被拖元素的 id ("drag1")
		//把被拖元素追加到放置元素（目标元素）中
	</script>

	<!-- web 存储 -->
	<script>
	function clickCounter_localstorage()
	{
		if(typeof(Storage)!=="undefined")
		{
			if (localStorage.clickcount)
			{
				localStorage.clickcount=Number(localStorage.clickcount)+1;
			}
			else
			{
				localStorage.clickcount=1;
			}
			document.getElementById("result1").innerHTML=" 你已经点击了按钮 " + localStorage.clickcount + " 次 ";
		}
		else
		{
			document.getElementById("result1").innerHTML="对不起，您的浏览器不支持 web 存储。";
		}
	}
	function clickCounter_seesionstorage()
	{
		if(typeof(Storage)!=="undefined")
		{
			if (sessionStorage.clickcount)
			{
				sessionStorage.clickcount=Number(sessionStorage.clickcount)+1;
			}
			else
			{
				sessionStorage.clickcount=1;
			}
			document.getElementById("result2").innerHTML="在这个会话中你已经点击了该按钮 " + sessionStorage.clickcount + " 次 ";
		}
		else
		{
			document.getElementById("result2").innerHTML="抱歉，您的浏览器不支持 web 存储";
		}
	}
	</script>
</head>


<body>	
	<!--导入图片资源-->
	<p>使用的图片资源:</p>
	<img id="scream" src="monai.jpg" alt="The Scream" width="220" height="277">
	
	<p>Canvas:</p>
	<!--分配CANVAS 画板1-->
	<canvas id="myCanvas" width="200" height="100" style="border:1px solid #d3d3d3;">	
	您的浏览器不支持 HTML5 canvas 标签。</canvas>
	<!--分配CANVAS 画板2-->
	<canvas id="myCanvas2" width="200" height="100" style="border:1px solid #d3d3d3;">	
	您的浏览器不支持 HTML5 canvas 标签。</canvas>
	<!--分配CANVAS 画板3-->
	<canvas id="myCanvas3" width="200" height="100" style="border:1px solid #d3d3d3;">	
	您的浏览器不支持 HTML5 canvas 标签。</canvas>
	<!--分配CANVAS 画板4-->
	<canvas id="myCanvas4" width="250" height="300" style="border:1px solid #d3d3d3;">
	您的浏览器不支持 HTML5 canvas 标签。</canvas>	


	<h1>我的第一篇文章</h1>

	<article>
	菜鸟教程 —— 学的不仅是技术，更是梦想！！！
	</article>

	<myHero>myHero 格式 示范 </myHero>

	<script>
	//javascript注释符长这样
	//使用画板1
	var c=document.getElementById("myCanvas");
	var ctx=c.getContext("2d");	
	//画对角线
	ctx.moveTo(0,0);	
	ctx.lineTo(200,100);
	ctx.stroke();
	//画圆
	ctx.beginPath();
	ctx.arc(95,50,40,0,2*Math.PI);	//arc(x,y,r,start,stop)  画布的左上角坐标为0,0 
					//x：圆心在x轴上的坐标,y：圆心在y轴上的坐标,r：半径长度,start：起始角度，圆心平行的右端为0度,stop：结束角度,
					//Math.PI表示180°，画圆的方向是顺时针
	ctx.stroke();
	//绘制文本
	ctx.font="30px Arial";
	ctx.fillText("Hello World",10,50);

	//使用画板2
	var c=document.getElementById("myCanvas2");
	var ctx=c.getContext("2d");
	// 创建渐变
	var grd=ctx.createLinearGradient(0,0,200,0);
	grd.addColorStop(0,"green");
	grd.addColorStop(1,"yellow");
	// 填充渐变
	ctx.fillStyle=grd;
	ctx.fillRect(10,10,150,80);

	//使用画板2
	var c=document.getElementById("myCanvas3");
	var ctx=c.getContext("2d");
	// 创建渐变
	var grd=ctx.createRadialGradient(75,50,5,90,60,100);
	grd.addColorStop(0,"red");
	grd.addColorStop(1,"white");	 
	// 填充渐变
	ctx.fillStyle=grd;
	ctx.fillRect(10,10,150,80);

	//使用画板4 插入图片
	var c=document.getElementById("myCanvas4");
	var ctx=c.getContext("2d");
	var img=document.getElementById("scream");
	img.onload = function() {
		ctx.drawImage(img,10,10);
	} 
	</script>

	<!--画一张SVG 矢量图片-->
	<svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="190">
		<!-- svg 里的注释符号与html一样 -->
		<!-- http://www.w3.org/2000/svg 是引用svg功能的接口网址 -->	
		<polygon points="100,10 40,180 190,60 10,60 160,180"
		style="fill:lime;stroke:purple;stroke-width:5;fill-rule:evenodd;"/>
	</svg>

	<!--MathML 数学式子 显示-->
 	<math xmlns="http://www.w3.org/1998/Math/MathML">
		<!-- MathML 里的注释符号与html一样 -->
		<!-- http://www.w3.org/1998/Math/MathML 是引用mathml功能的接口网址 -->
		<p>式子1:</p>
		<mrow>
			<msup><mi>a</mi><mn>2</mn></msup>
			<mo>+</mo>
			
			<msup><mi>b</mi><mn>2</mn></msup>
			<mo>=</mo>
			
			<msup><mi>c</mi><mn>2</mn></msup>
		</mrow>
		<p>式子2:</p>
		<mrow>			
			<mrow>
				<msup>
					<mi>x</mi>
					<mn>2</mn>
				</msup>
				<mo>+</mo>
				<mrow>
					<mn>4</mn>
					<mo>⁢</mo>
					<mi>x</mi>
				</mrow>
				<mo>+</mo>
				<mn>4</mn>
				</mrow>
					<mo>=</mo>
				<mn>0</mn>
			</mrow>
		</mrow>
		<!-- 矩阵显示不出来，先不追究 -->
		<p>矩阵:</p>
		<mrow>
			<mi>A</mi>
			<mo>=</mo>
			<mfenced open="[" close="]">
				<mtable>
					<mtr>
						<mtd><mi>x</mi></mtd>
						<mtd><mi>y</mi></mtd>
					</mtr>
					<mtr>
						<mtd><mi>z</mi></mtd>
						<mtd><mi>w</mi></mtd>
					</mtr>
				</mtable>
			</mfenced>
		</mrow>
	</math>

	<!--拖放示例-->
	<p>拖放例子</p>
	<p>div1-------------------div2</p>
	<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
		<img src="img_w3slogo.gif" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31"></div>
			<!-- draggable="true" 设置元素可拖放 -->
			<!-- 可拖动元素的 id "drag1" -->
	<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
	
	<!-- 设置了三行隔行 -->
	<br>
	<br>
	<br>

	<!--video 及 DOM 控制示例-->
	<p>视频及控制示例</p>
	<div style="text-align:center"> 
		<button onclick="playPause()">播放/暂停</button> 
		<button onclick="makeBig()">放大</button>
		<button onclick="makeSmall()">缩小</button>
		<button onclick="makeNormal()">普通</button>
		<br>
		<video id="video1" width="320" height="240" controls>
			<source src="movie.mp4" type="video/mp4">
			<source src="movie.ogg" type="video/ogg">
			<!-- 可惜不知道怎么获取 movie.ogg 音频文件 所以并没有成功展示ogg音频效果-->
			您的浏览器不支持 HTML5 video 标签。
		</video>
	</div> 
	<script> 
		var myVideo=document.getElementById("video1"); 
		function playPause()
		{ 
			if (myVideo.paused) 
			  myVideo.play(); 
			else 
			  myVideo.pause(); 
		} 
		
			function makeBig()
		{ 
			myVideo.width=560; 
			myVideo.height=420; 
		} 
		
			function makeSmall()
		{ 
			myVideo.width=176; 
			myVideo.height=144; 
		} 
		
			function makeNormal()
		{ 
			myVideo.width=320; 
			myVideo.height=240;
		} 
	</script> 

	<!-- audio示例 -->
	<p>音频及控制示例</p>
	<audio controls>
		<source src="horse.ogg" type="audio/ogg">
		<source src="horse.mp3" type="audio/mpeg">
		<!-- 获取了 horse.ogg 音频文件-->
		<!-- 没有获取了 horse.mp3 音频文件 所以并没有成功展示mp3音频效果-->
		您的浏览器不支持 audio 元素。
	</audio>

	<!-- 表单 例子 -->
	<p>input示例</p>
	<!--注意，并没有demo-form.php 这个文件，这个文件主要是对输入参数后续处理，但不影响input演示 -->
	<form action="demo-form.php">选择你喜欢的颜色: <input type="color" name="favcolor"><input type="submit"></form>
	<form action="demo-form.php">生日: <input type="date" name="bday"><input type="submit"></form>
	<form action="demo-form.php">生日 (日期和时间): <input type="datetime" name="bdaytime"><input type="submit"></form>
	<form action="demo-form.php">生日-local (日期和时间): <input type="datetime-local" name="bdaytime"><input type="submit"></form>
	<form action="demo-form.php">E-mail: <input type="email" name="email"><input type="submit"></form>
	<form action="demo-form.php">生日 (月和年): <input type="month" name="bdaymonth"><input type="submit"></form>
	<form action="demo-form.php">数量 ( 1 到 5 之间 ): <input type="number" name="quantity" min="1" max="5"><input type="submit"></form>
	<form action="demo-form.php" method="get">Points: <input type="range" name="points" min="1" max="10"><input type="submit"></form>
	<form action="demo-form.php">Search Google: <input type="search" name="googlesearch"><input type="submit"></form>
	<form action="demo-form.php">电话号码: <input type="tel" name="usrtel"><input type="submit"></form>
	<form action="demo-form.php">选择时间: <input type="time" name="usr_time"><input type="submit"></form>
	<form action="demo-form.php">添加您的主页: <input type="url" name="homepage"><input type="submit"></form>
	<form action="demo-form.php">选择周: <input type="week" name="week_year"><input type="submit"></form>
	<form action="demo-form.php" method="get">下拉表单示例：<input list="browsers" name="browser">
		<datalist id="browsers">
			<option value="Internet Explorer">
			<option value="Firefox">
			<option value="Chrome">
			<option value="Opera">
			<option value="Safari">
		</datalist>
		<input type="submit">
	</form>
	<!--	<keygen> 元素的作用是提供一种验证用户的可靠方法。
		<keygen>标签规定用于表单的密钥对生成器字段。
		当提交表单时，会生成两个键，一个是私钥，一个公钥。
		私钥（private key）存储于客户端，公钥（public key）则被发送到服务器。公钥可用于之后验证用户的客户端证书（client certificate）
	-->
	<p>keygen 示例</p>
	<form action="demo_keygen.php" method="get">
		用户名: <input type="text" name="usr_name">
		加密: <keygen name="security">
		<input type="submit">
	</form>
	<!-- output> 元素示例-->
	<p>output示例</p>
	<form oninput="x.value=parseInt(a.value)+parseInt(b.value)">0
		<input type="range" id="a" value="50">100
		+<input type="number" id="b" value="50">
		=<output name="x" for="a b"></output>
	</form>

	<!-- html5 语义元素 测试 -->
	<!-- 	语义元素来明确一个Web页面的不同部分
			《header》
		-------------------------
			《nav》
		-------------------------
		《section》	|《aside》
		----------------|
		《article》	|
		-------------------------
			《footer》
	-->
	<!-- 然而实在不知道如何展示aside 部分 -->
	<header>
		<h1> hender </h1>
		<p><time pubdate datetime="2011-03-15"></time></p>
	</header>
	<nav>
		<a href="/html/">HTML</a> |
		<a href="/css/">CSS</a> |
		<a href="/js/">JavaScript</a> |
		<a href="/jquery/">jQuery</a>
	</nav>
	<section>
		<h1>section1：WWF</h1>
		<p>The World Wide Fund for Nature (WWF) is an international organization working on issues regarding the conservation, research and restoration of the environment, formerly named the World Wildlife Fund. WWF was founded in 1961.</p>
	</section>
	<section>
		<h1>section2：WWF's Panda symbol</h1>
		<p>The Panda has become the symbol of WWF. The well-known panda logo of WWF originated from a panda named Chi Chi that was transferred from the Beijing Zoo to the London Zoo in the same year of the establishment of WWF.</p>
	</section>
	<article>
		<h1>article</h1>
		<p> Windows Internet Explorer 9(缩写为 IE9 )在2011年3月14日21:00 发布。</p>
	</article>
	<aside>
		<h4>aside</h4>
		<p>The Epcot Center is a theme park in Disney World, Florida.</p>
	</aside>

	<br>

	<!-- web 存储 例子 -->
	<!-- 所谓 web存储，就是临时生成的 暂存在浏览器上的 自定义变量（变量名字key+变量值value）  -->
	<!-- sessionStorage.clickcount 中 clickcount是自定义变量变量名，在这里变量的变量值是一个数字值 -->
	<!-- localStorage.clickcount 中 clickcount也是自定义变量变量名，在这里变量的变量值也是一个数字值 -->	
	<p>web 存储 例子</p>
	<p><button onclick="clickCounter_localstorage()" type="button">localstorage例子点我！</button></p>
	<div id="result1"></div>
	<p>点击该按钮查看计数器的增加。由于计数数据是localstorage变量，关闭页面重开，数据不会重置</p>
	<p><button onclick="clickCounter_seesionstorage()" type="button">seesionstorage例子点我！</button></p>
	<div id="result2"></div>
	<p>点击该按钮查看计数器的增加。由于计数数据是seesionstorage变量，关闭页面重开，数据会重置</p>
	
	<br>

	<!-- web存储典型例子 一个简单的网站列表程序 -->
	<p>一个简单的网站列表程序</p>
	<div style="border: 2px dashed #ccc;width:320px;text-align:center;">     
		<label for="sitename">网站名(key)：</label>  
		<input type="text" id="sitename" name="sitename" class="text"/>  
		<br/>  
		<label for="siteurl">网 址(value)：</label>  
		<input type="text" id="siteurl" name="siteurl"/>  
		<br/>  
		<input type="button" onclick="save()" value="新增记录"/>  
		<hr/>  
		<label for="search_phone">输入网站名：</label>  
		<input type="text" id="search_site" name="search_site"/>  
		<input type="button" onclick="find()" value="查找网站"/>  
		<p id="find_result"><br/></p>  
	</div>  
	<br/>  
	<div id="list"></div>  
	<script>
		// 载入所有存储在localStorage的数据
		loadAll(); 	
		//保存数据  
		function save(){  
			var siteurl = document.getElementById("siteurl").value;  
			var sitename = document.getElementById("sitename").value;  
			localStorage.setItem(sitename, siteurl);
			alert("添加成功");
		}
		//查找数据  
		function find(){  
			var search_site = document.getElementById("search_site").value;  
			var sitename = localStorage.getItem(search_site);  
			var find_result = document.getElementById("find_result");  
			find_result.innerHTML = search_site + "的网址是：" + sitename;  
		}
		//将所有存储在localStorage中的对象提取出来，并展现到界面上
		function loadAll(){  
			var list = document.getElementById("list");  
			if(localStorage.length>0){  
				var result = "<table border='1'>";  
				result += "<tr><td>网站名</td><td>网址</td></tr>";  
				for(var i=0;i<localStorage.length;i++){  
					var sitename = localStorage.key(i);  
					var siteurl = localStorage.getItem(sitename);  
					result += "<tr><td>"+sitename+"</td><td>"+siteurl+"</td></tr>";  
				}  
				result += "</table>";  
 				list.innerHTML = result;  
			}else{  
				list.innerHTML = "数据为空……";  
			}  
		}      
    	</script>

	<br>

	<!-- web worker例子 即后台处理程序例子！！ -->
	<p>web worker 例子：计数器</p>
	<p>计数： <output id="jishu"></output></p>
	<button onclick="startWorker()">开始工作</button> 
	<button onclick="stopWorker()">停止工作</button>
	<script>
		var w;	
		function startWorker() {
		    if(typeof(Worker) !== "undefined") {
		        if(typeof(w) == "undefined") {
		            w = new Worker("demo_workers.js");	//创建 Web Worker 对象
		        }
		        w.onmessage = function(event) {		//向 web worker 添加一个 "onmessage" 事件监听器，即设置了onmessage 事件处理函数
		            document.getElementById("jishu").innerHTML = event.data; //把内容显示到id为jishu处
		        };
		    } else {
		        document.getElementById("jishu").innerHTML = "抱歉，你的浏览器不支持 Web Workers...";
		    }
		}	
		function stopWorker() 
		{ 
		    w.terminate();	//终止 Web Worker
		    w = undefined;
		}
		//webworker 补充：
		//由于 web worker 位于外部文件中，它们无法访问下列 JavaScript 对象：
		//    window 对象
		//    document 对象
		//    parent 对象
	</script>

	<!-- Server-Sent Events例子 定期更新内容！ 测试失败，因为php/asp文件好像没设么反应，不知道怎么带php/asp文件例子 -->
	<!-- 定期更新内容：指EventSource定期像远程服务器端php/asp发送请求， 远程php/asp 把新内容传回 EventSource 再显示 -->
	<p>Server-Sent Events例子 定期更新内容</p>
	<h1>获取服务端更新数据</h1>
	<div id="sse1"></div>
	<script>
		if(typeof(EventSource)!=="undefined")
		{
			//创建EventSource 对象,可以是基于php的对象，也可以是基于asp的对象
			var source=new EventSource("demo_sse.php");	//创建一个新的 EventSource 对象，然后规定发送更新的页面的 URL（本例是 "demo_sse.php"）
			//var source=new EventSource("demo_sse.asp");	//创建一个新的 EventSource 对象，然后规定发送更新的页面的 URL（本例是 "demo_sse.asp"）
			source.onmessage=function(event)	//注意是设置了onmessage 事件处理函数，每接收到一次更新，就会发生一次onmessage 事件
			{
				document.getElementById("sse1").innerHTML+=event.data + "<br>";//把内容显示到id为sse1处
			};
		}
		else
		{
			document.getElementById("sse1").innerHTML="抱歉，你的浏览器不支持 server-sent 事件...";
		}
	</script>

	<!-- web socket例子 建立一个快速的 通道 接通服务端 然后互通数据  没有可以配合调试的远程端口，所以未测试-->
	<!-- WebSocket是HTML5开始提供的一种在单个 TCP 连接上进行全双工通讯的协议 -->
	<p>web socket例子 建立通道 互传数据</p>
	<div id="sse">
		<a href="javascript:WebSocketTest()">运行 WebSocket</a>
	</div>
	<script type="text/javascript">
		function WebSocketTest()
		{
			if ("WebSocket" in window)
			{
				alert("您的浏览器支持 WebSocket!");
				// 打开一个 web socket
				var ws = new WebSocket("ws://localhost:9998/echo");
				ws.onopen = function()
				{
					// Web Socket 已连接上，使用 send() 方法发送数据
					ws.send("发送数据");
					alert("数据发送中...");
				};			
				ws.onmessage = function (evt) 
				{ 
					var received_msg = evt.data;
					alert("数据已接收...");
				};
				ws.onclose = function()
				{ 
					// 关闭 websocket
					alert("连接已关闭..."); 
				};
			}
			else
			{
				// 浏览器不支持 WebSocket
				alert("您的浏览器不支持 WebSocket!");
			}
		}
		//创建一个支持 WebSocket 的服务 配合调试:
		//	下载 mod_pywebsocket:	git clone https://github.com/google/pywebsocket.git
		//	安装:	python setup.py build
		//		sudo python setup.py install
		//	查看文档说明:	pydoc mod_pywebsocket
		//	开启服务:sudo python standalone.py -p 9998 -w ../example/
		//		以上命令会开启一个端口号为 9998 的服务，使用 -w 来设置处理程序 echo_wsh.py 所在的目录
	</script>


</body>
</html>






























