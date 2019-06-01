<canvas id="gc" width="400" height="400"></canvas>
<script>
px=py=10;
gs=tc=20;
ls = 1 ;
ax=ay=15;
xv=yv=0;
trail=[];
tail=5;
jg = 1000 ; 
jge = false ;
ftp = 6 ;

window.onload=function()
{
	
	canv = document.getElementById("gc");
	ctx=canv.getContext("2d");
	document.addEventListener("keydown" , keyPush);
	setInterval(game , 1000/ftp);
	
}

function game(){
	jg -= (1000/ftp) *2 ;
	 
	if( jg < 0 ) {jg = 1000 ;jge = true ;   }
	px+=xv;
	py+=yv;
	if(px<0)
	{
		px=tc-1;
	}
	if(px>tc-1)
	{
		px=0;
	}
	if(py<0)
	{
		py=tc-1;
	}
	if(py>tc-1)
	{
		py=0;
	}
	ctx.fillStyle="black";
	ctx.fillRect(0,0,canv.width,canv.height);
	
	
	  
	for(var i = 0; i < trail.length ; i++)
	{
		if( i == trail.length -1  )
		{
			ctx.fillStyle="#ccc";
		}else
		{
			ctx.fillStyle="lime";
		}
		ctx.fillRect(trail[i].x*gs,trail[i].y*gs,gs-ls ,gs-ls );
		if(trail[i].x==px && trail[i].y==py)
		{
			tail = 5 ;
			
		}
	}
	trail.push({x:px,y:py});
 	while( trail.length > tail)
	{
		trail.shift();
		
	}
	if(ax==px && ay==py)
	{
		tail++;
		ax=Math.floor(Math.random()*tc);
		ay=Math.floor(Math.random()*tc);
	}
	
 	
	if( true ==   jge    )
	{
		 
		ctx.fillStyle="#fff"; jge = false ;
		
	}
	else
	{	
		ctx.fillStyle="red";
	}
	ctx.fillRect(ax*gs,ay*gs,gs-ls ,gs-ls );
	
	
}
function keyPush(evt){
	switch(evt.keyCode)
	{
		case 37:
			xv=-1;yv=0;
			break;
		case 38:
			xv=0;yv=-1;
		break;
		case 39:
			xv=1;yv=0;
		break;
		case 40:
			xv=0;yv=1;
		break;
			
	}
}
</script>