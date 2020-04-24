<p>
							进度条
						</p>
<!-- 						<p id="runtime_aa2" style="text-align:left;white-space:nowrap;"></p>  -->

							  <html>
							  <body>
							  <span>
							  <div style="float:left;">
							  <font style="text-align:left">大二第二学期</font>
							  </div>
							  <div style="float:right;">
							  <font id="runtime_aa" style="text-align:right"></font>
							  </div>
							  </span>
							  </body>
							  </html>
<br>
						<canvas id="loadingProgressCanvas" width="800" height="10"></canvas>
						<br>
							  <span>
							  <div style="float:left;">
							  <font style="text-align:left">2020</font>
							  </div>
							  <div style="float:right;">
							  <font id="yeartime_span" style="text-align:right"></font>
							  </div>
							  </span>
<br>
						<canvas id="loadingProgressCanvas2" width="800" height="10"></canvas>
						<br>
							  <span>
							  <div style="float:left;">
							  <font id="todaydate_span" style="text-align:left"></font>
							  </div>
							  <div style="float:right;">
							  <font id="todaytime_span" style="text-align:right"></font>
							  </div>
							  </span>
<br>
						<canvas id="loadingProgressCanvas3" width="800" height="10"></canvas>
						<br>
						<span id="runtime_span"></span> 
<!-- 						<span id="yeartime_span"></span>  -->
						
						<script type="text/javascript">
// 							aa = 1;
							function show_runtime()
							{
// 								aa = aa+1;
								window.setTimeout("show_runtime()",1000);
								X=new Date("4/7/2020 0:00:00");
								Y=new Date();
								T=(Y.getTime()-X.getTime());
								M=24*60*60*1000;
								a=T/M;
								A=Math.floor(a);
								b=(a-A)*24;
								B=Math.floor(b);
								c=(b-B)*60;
								C=Math.floor((b-B)*60);
								D=Math.floor((c-C)*60);
								runtime_span.innerHTML="网站已运行 "+A+" days , "+B+" h , "+C+" m , "+D+" s ";
// 								runtime_aa.innerHTML=aa
							}
							function show_yeartime()
							{
// 								aa = aa+1;
								window.setTimeout("show_yeartime()",1000);
								X=new Date("1/1/2020 0:00:00");
								Y=new Date();
								T=(Y.getTime()-X.getTime());
								M=24*60*60*1000;
								per2 = T/(M*366)*100;
								a=T/M;
								A=Math.floor(a);
								b=(a-A)*24;
								B=Math.floor(b);
								c=(b-B)*60;
								C=Math.floor((b-B)*60);
								D=Math.floor((c-C)*60);
								yeartime_span.innerHTML=per2+"%";
// 								runtime_aa.innerHTML=aa
							}
							function show_todaytime()
							{
// 								aa = aa+1;
								window.setTimeout("show_todaytime()",1000);
								X=new Date("4/7/2020 0:00:00");
								Y=new Date();
								newyear = Y.getFullYear();
								newmonth = Y.getMonth()+1;
								newday = Y.getDate();
								T=(Y.getTime()-X.getTime());
								M=24*60*60*1000;
								a=T/M;
								A=Math.floor(a);
								b=(a-A)*24;
								B=Math.floor(b);
								c=(b-B)*60;
								C=Math.floor((b-B)*60);
								D=Math.floor((c-C)*60);
								now_time=T-A*24*60*60*1000;
								per3 = 100*now_time/M;
// 								runtime_span.innerHTML="网站已运行 "+A+" days , "+B+" h , "+C+" m , "+D+" s ";
								todaydate_span.innerHTML =newyear + " 年 " + newmonth + " 月 " + newday + " 日";
								todaytime_span.innerHTML=per3+"%";
// 								runtime_aa.innerHTML=aa
							}
							show_runtime();
							show_yeartime();
							show_todaytime();
// 							var loadingProgressCanvas = document.getElementById("loadingProgressCanvas");
      var ctx = loadingProgressCanvas.getContext("2d"); // 获取绘制图形的对象(画笔)
		 var ctx2 = loadingProgressCanvas2.getContext("2d"); // 获取绘制图形的对象(画笔)
		 var ctx3 = loadingProgressCanvas3.getContext("2d"); // 获取绘制图形的对象(画笔)
      drawFirst(); // 绘制初始状态
		 drawFirst2(); // 绘制初始状态
		 drawFirst3(); // 绘制初始状态

      var progress = 0; // 定义进度
      var per = 0;
		 var per2 = 0;
		 var per3 = 0; 
      show_collegetime();
      drawProgress(); // 绘制初始进度
		 drawProgress2(); // 绘制初始进度
		 drawProgress3();

      // 定义定时器, 100ms钟绘制5%
      	 var timer = setInterval("drawProgress()", 100);
		 var timer2 = setInterval("drawProgress2()", 100);
		 var timer3 = setInterval("drawProgress3()", 100);
      // 绘制初始状态

      function show_collegetime()
							{
								window.setTimeout("show_collegetime()",1000);
								X=new Date("2/22/2020 23:59:59");
								Y=new Date();
								T=(Y.getTime()-X.getTime());
								M=132*24*60*60*1000;
								per = T/(M)*100;
								a=T/M;
								A=Math.floor(a);
								b=(a-A)*24;
								B=Math.floor(b);
								c=(b-B)*60;
								C=Math.floor((b-B)*60);
								D=Math.floor((c-C)*60);
								runtime_aa.innerHTML=per+"%";
// 								runtime_aa2.innerHTML=per+"%";
// 								document.write(per + "%");
							}

      function drawFirst() {
        /*
         * 定义矩形(左上角x/y左边,宽高)
         */
        ctx.rect(0, 0, 666, 8);
        ctx.stroke(); // 绘制定义好的矩形路径
        ctx.fillStyle="#FEBB41"; // 定义画笔颜色, 重新绘制已经加载的进度条
      }
		function drawFirst2() {
        /*
         * 定义矩形(左上角x/y左边,宽高)
         */
        ctx2.rect(0, 0, 666, 8);
        ctx2.stroke(); // 绘制定义好的矩形路径
        ctx2.fillStyle="#85CEFB"; // 定义画笔颜色, 重新绘制已经加载的进度条
      }
		function drawFirst3() {
        /*
         * 定义矩形(左上角x/y左边,宽高)
         */
        ctx3.rect(0, 0, 666, 8);
        ctx3.stroke(); // 绘制定义好的矩形路径
        ctx3.fillStyle="#F5ECE7"; // 定义画笔颜色, 重新绘制已经加载的进度条
      }
      // 绘制进度条
      function drawProgress() {
        if(progress == 200) {
          progress = 0;
//           ctx.clearRect(0, 0, 200, 10); // 清楚之前的绘制
        } else {
<!--          ctx.moveTo(progress, 0); // 移动到上一次绘制的终点,准备绘制下一次的进度-->
          ctx.fillRect(0, 0, 6.66*per, 8); // 200 * 0.05
//           progress += 10;
        }
      }
		// 绘制进度条
      function drawProgress2() {
        if(progress == 200) {
          progress = 0;
//           ctx2.clearRect(0, 0, 200, 10); // 清楚之前的绘制
        } else {
<!--          ctx2.moveTo(progress, 0); // 移动到上一次绘制的终点,准备绘制下一次的进度-->
          ctx2.fillRect(0, 0, 6.66*per2, 8); // 200 * 0.05
//           progress += 10;
        }
      }
		// 绘制进度条
      function drawProgress3() {
        if(progress == 200) {
          progress = 0;
//           ctx3.clearRect(0, 0, 200, 10); // 清楚之前的绘制
        } else {
<!--          ctx3.moveTo(progress, 0); // 移动到上一次绘制的终点,准备绘制下一次的进度-->
          ctx3.fillRect(0, 0, 6.66*per3, 8); // 200 * 0.05
//           progress += 10;
        }
      }
						</script>
