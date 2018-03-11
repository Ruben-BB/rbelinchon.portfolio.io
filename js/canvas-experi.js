var al = 0;
var start = 4.72;
var diff;
function progressSim(nameCanvas, color, tamano, porcentaje, programa){
	var ctx = document.getElementById(nameCanvas).getContext('2d');
	var cw = ctx.canvas.width;
	var ch = ctx.canvas.height;
	diff = ( ( al/100 )  * Math.PI * 2 * 10).toFixed(2);
	ctx.clearRect( 0, 0, cw, ch);
	ctx.lineWidth = tamano;
	ctx.fillStyle = '#000';
	ctx.strokeStyle = color;
	ctx.fillStyle = '#686868';
	ctx.font = '2.8em Arial';
	ctx.textBaseline="middle";
	ctx.textAlign = 'center';
	ctx.fillText(porcentaje +'%', cw*0.5, ch*0.5+2, cw);
	ctx.beginPath();
	ctx.arc(100, 100, 92.5, start, diff/10+start, false);
	ctx.stroke();
	if( al >= porcentaje ){
		clearTimeout( programa );
	}
	al++;
}
/*var photoshop = setInterval( function(){ progressSim('photoshop', '#78BB90', 15, 80, photoshop)}, 30 );
var illust = setInterval( function(){ progressSim('illust', '#78BB90', 15, 90, illust)}, 30 );
var indesign = setInterval( function(){ progressSim('indesign', '#78BB90', 15, 75, indesign)}, 30 );
var dreamw = setInterval( function(){ progressSim('dreamw', '#78BB90', 15, 65, dreamw)}, 30 );
var quarck = setInterval( function(){ progressSim('quarck', '#78BB90', 15, 60, quarck)}, 30 );
var workbench = setInterval( function(){ progressSim('workbench', '#78BB90', 15, 55, workbench)}, 30 );

var offset = setInterval( function(){ progressSim('offset', '#78BB90', 15, 80, offset)}, 30 );
var flexo = setInterval( function(){ progressSim('flexo', '#78BB90', 15, 70, flexo)}, 30 );
var hueco = setInterval( function(){ progressSim('hueco', '#78BB90', 15, 60, hueco)}, 30 );
var serigf = setInterval( function(){ progressSim('serigf', '#78BB90', 15, 80, serigf)}, 30 );*/

var html5 = setInterval( function(){ progressSim('html5', '#78BB90', 15, 80, html5)}, 30 );
var css3 = setInterval( function(){ progressSim('css3', '#78BB90', 15, 85, css3)}, 30 );
var js = setInterval( function(){ progressSim('js', '#78BB90', 15, 45, js)}, 30 );
var php5 = setInterval( function(){ progressSim('php5', '#78BB90', 15, 50, php5)}, 30 );
var mysql = setInterval( function(){ progressSim('mysql', '#78BB90', 15, 45, mysql)}, 30 );