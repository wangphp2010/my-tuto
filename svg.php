

<?php

	$a = array( 90 , 60 , 80 , 1  ,  60 ,20  ,60  ,70) ;

?>
<svg width="100%" height="100%">

	<?php
		$x1 = 90 ;
		$y1 = 100 ;
		$s = '';
		foreach( $a as $v )
		{
			$x1 += 40;
			$y = $y1-$v ;
			$x = $x1 ;
			
			echo   '<circle cx="' .  $x1. '" cy="' .$y . '" r="2" stroke="red" fill="transparent" stroke-width="5"/>' ;

			if( $s == '' )
				$s = " M $x $y " ;
			else
				$s .= " , L $x $y " ;
			
		}
	
				echo   '  <path d="' .$s.' "      style=" fill:none ; stroke-width: 1px; stroke: #000;  "/>';

	
	?>
  <path d="M 10 150 L 800,150 "      style=" fill:#000 ; stroke-width: 1px; stroke: #000;  "/>
	 
  
 

</svg>



<br><br><br>
M = moveto
L = lineto
H = horizontal lineto
V = vertical lineto
C = curveto
S = smooth curveto
Q = quadratic Bézier curve
T = smooth quadratic Bézier curveto
A = elliptical Arc
Z = closepath

 


<br><br><br>

指令	参数	名称	描述
M	x,y	moveto	移动虚拟画笔到指定的（x,y）坐标，仅移动不绘制
m	x,y	moveto	移动虚拟画笔到指定的（x,y）坐标，这个坐标是相对于当前画笔的坐标，仅移动不绘制
L	x,y	lineto	从当前画笔所在位置绘制一条直线到指定的（x,y）坐标
l	x,y	lineto	从当前画笔所在位置绘制一条直线到指定的（x,y）坐标，(x,y)坐标是相对于花瓣位置的点
H	x	horizontal lineto	绘制一条水平直线到参数指定的x坐标点，y坐标为画笔的y坐标
h	x	horizontal lineto	绘制一条水平直线到参数指定的x坐标点（当前x + 指定的x），x坐标相对于当前画笔x坐标
V	y	vertical lineto	从当前位置绘制一条垂直直线到参数指定的y坐标
v	y	horizontal lineto	从当前位置绘制一条垂直直线到参数指定的y坐标，y坐标相对于当前画笔的y坐标
C	x1,y1 x2,y2 x,y	curveto	从当前画笔位置绘制一条三次贝兹曲线到参数（x,y）指定的坐标。x1，y1和x2,y2是曲线的开始和结束控制点，用于控制曲线的弧度
c	x1,y1 x2,y2 x,y	curveto	于大小C指令相同，但是坐标是相对于画笔的坐标
S	x2,y2 x,y	shorthand / smooth curveto	从当前画笔位置绘制一条三次贝兹曲线到参数（x,y）指定的坐标。x2,y2是结束控制点。开始控制点和前一条曲线的结束控制点相同
s	x2,y2 x,y	shorthand / smooth curveto	和大小的S指令相同，但是坐标是相对于当前画笔的坐标点
Q	x1,y1 x,y	二次贝兹曲线	从当前画笔位置绘制一条二次贝兹曲线到参数（x,y）指定的坐标。x1,y1是控制点，用于控制曲线的弧度
q	x1,y1 x,y	二次贝兹曲线	和大小的Q指令相同，但是坐标是相对于当前画笔的坐标点
T	x,y	平滑的二次贝兹曲线	从当前画笔位置绘制一条二次贝兹曲线到参数（x,y）指定的坐标。控制点被假定为最后一次使用的控制点
t	x,y	平滑的二次贝兹曲线	和大小的T指令相同，但是坐标是相对于当前画笔的坐标点
A	rx,ry x-axis-rotation large-arc-flag,sweepflag x,y	椭圆弧线	从当前画笔位置开始绘制一条椭圆弧线到（x,y）指定的坐标。rx和ry分别为椭圆弧线水平和垂直方向上的半径。x-axis-rotation指定弧线绕x轴旋转的度数。它只在rx和ry的值不相同是有效果。large-arc-flag是大弧标志位，取值0或1，用于决定绘制大弧还是小弧。sweep-flag用于决定弧线绘制的方向
a	rx,ry x-axis-rotation large-arc-flag,sweepflag x,y	椭圆弧线	和大写的A指令相同，但是坐标是相对于当前画笔的坐标点
Z	无	闭合路径	从结束点绘制一条直线到开始点，闭合路径
z	无	闭合路径	从结束点绘制一条直线到开始点，闭合路径

 
<svg width="200" height="250" version="1.1" xmlns="http://www.w3.org/2000/svg">

  <rect x="10" y="10" width="30" height="30" stroke="black" fill="transparent" stroke-width="5"/>
  <rect x="60" y="10" rx="10" ry="10" width="30" height="30" stroke="black" fill="transparent" stroke-width="5"/>

  <circle cx="25" cy="75" r="20" stroke="red" fill="transparent" stroke-width="5"/>
  <ellipse cx="75" cy="75" rx="20" ry="5" stroke="red" fill="transparent" stroke-width="5"/>

  <line x1="10" x2="50" y1="110" y2="150" stroke="orange" fill="transparent" stroke-width="5"/>
  <polyline points="60 110 65 120 70 115 75 130 80 125 85 140 90 135 95 150 100 145"
      stroke="orange" fill="transparent" stroke-width="5"/>

  <polygon points="50 160 55 180 70 180 60 190 65 205 50 195 35 205 40 190 30 180 45 180"
      stroke="green" fill="transparent" stroke-width="5"/>

  <path d="M20,230 Q40,205 50,230 T90,230" fill="none" stroke="blue" stroke-width="5"/>
</svg>