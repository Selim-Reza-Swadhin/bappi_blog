</div>
</div>
 
<div id="footer">&copy; <?= date('Y')?> all right reserved by <a href="https://selimrezaswadhin.blogspot.com" style="text-decoration: none;color: wheat">Selim Reza Swadhin</a></div>
</div>
<script language="JavaScript1.2">

let Ymax=8;                                //MAX # OF PIXEL STEPS IN THE "X" DIRECTION
let Xmax=8;                                //MAX # OF PIXEL STEPS IN THE "Y" DIRECTION
let Tmax=10000;                        //MAX # OF MILLISECONDS BETWEEN PARAMETER CHANGES

//FLOATING IMAGE URLS FOR EACH IMAGE. ADD OR DELETE ENTRIES. KEEP ELEMENT NUMERICAL ORDER STARTING WITH "0" !!

let floatimages=new Array();
floatimages[0]='butterfly.gif';
floatimages[1]='butterfly.gif';
floatimages[2]='butterfly2.gif';
floatimages[3]='butterfly2.gif';


//*********DO NOT EDIT BELOW***********
let NS4 = (navigator.appName.indexOf("Netscape")>=0 && parseFloat(navigator.appVersion) >= 4 && parseFloat(navigator.appVersion) < 5)? true : false;
let IE4 = (document.all)? true : false;
let NS6 = (parseFloat(navigator.appVersion) >= 5 && navigator.appName.indexOf("Netscape")>=0 )? true: false;
let wind_w, wind_h, t='', IDs=new Array();
for(i=0; i<floatimages.length; i++){
t+=(NS4)?'<layer name="pic'+i+'" visibility="hide" width="10" height="10"><a href="javascript:hidebutterfly()">' : '<div id="pic'+i+'" style="position:absolute; visibility:hidden;width:10px; height:10px"><a href="javascript:hidebutterfly()">';
t+='<img src="'+floatimages[i]+'" name="p'+i+'" border="0">';
t+=(NS4)? '</a></layer>':'</a></div>';
}
document.write(t);

function moveimage(num){
if(getidleft(num)+IDs[num].W+IDs[num].Xstep >= wind_w+getscrollx())IDs[num].Xdir=false;
if(getidleft(num)-IDs[num].Xstep<=getscrollx())IDs[num].Xdir=true;
if(getidtop(num)+IDs[num].H+IDs[num].Ystep >= wind_h+getscrolly())IDs[num].Ydir=false;
if(getidtop(num)-IDs[num].Ystep<=getscrolly())IDs[num].Ydir=true;
moveidby(num, (IDs[num].Xdir)? IDs[num].Xstep :  -IDs[num].Xstep , (IDs[num].Ydir)?  IDs[num].Ystep:  -IDs[num].Ystep);
}

function getnewprops(num){
IDs[num].Ydir=Math.floor(Math.random()*2)>0;
IDs[num].Xdir=Math.floor(Math.random()*2)>0;
IDs[num].Ystep=Math.ceil(Math.random()*Ymax);
IDs[num].Xstep=Math.ceil(Math.random()*Xmax)
setTimeout('getnewprops('+num+')', Math.floor(Math.random()*Tmax));
}

function getscrollx(){
if(NS4 || NS6)return window.pageXOffset;
if(IE4)return document.body.scrollLeft;
}

function getscrolly(){
if(NS4 || NS6)return window.pageYOffset;
if(IE4)return document.body.scrollTop;
}

function getid(name){
if(NS4)return document.layers[name];
if(IE4)return document.all[name];
if(NS6)return document.getElementById(name);
}

function moveidto(num,x,y){
if(NS4)IDs[num].moveTo(x,y);
if(IE4 || NS6){
IDs[num].style.left=x+'px';
IDs[num].style.top=y+'px';
}}

function getidleft(num){
if(NS4)return IDs[num].left;
if(IE4 || NS6)return parseInt(IDs[num].style.left);
}

function getidtop(num){
if(NS4)return IDs[num].top;
if(IE4 || NS6)return parseInt(IDs[num].style.top);
}

function moveidby(num,dx,dy){
if(NS4)IDs[num].moveBy(dx, dy);
if(IE4 || NS6){
IDs[num].style.left=(getidleft(num)+dx)+'px';
IDs[num].style.top=(getidtop(num)+dy)+'px';
}}

function getwindowwidth(){
if(NS4 || NS6)return window.innerWidth;
if(IE4)return document.body.clientWidth;
}

function getwindowheight(){
if(NS4 || NS6)return window.innerHeight;
if(IE4)return document.body.clientHeight;
}

function init(){
wind_w=getwindowwidth();
wind_h=getwindowheight();
for(i=0; i<floatimages.length; i++){
IDs[i]=getid('pic'+i);
if(NS4){
IDs[i].W=IDs[i].document.images["p"+i].width;
IDs[i].H=IDs[i].document.images["p"+i].height;
}
if(NS6 || IE4){
IDs[i].W=document.images["p"+i].width;
IDs[i].H=document.images["p"+i].height;
}
getnewprops(i);
moveidto(i , Math.floor(Math.random()*(wind_w-IDs[i].W)), Math.floor(Math.random()*(wind_h-IDs[i].H)));
if(NS4)IDs[i].visibility = "show";
if(IE4 || NS6)IDs[i].style.visibility = "visible";
startfly=setInterval('moveimage('+i+')',Math.floor(Math.random()*100)+100);
}}

function hidebutterfly(){
for(i=0; i<floatimages.length; i++){
if (IE4)
eval("document.all.pic"+i+".style.visibility='hidden'")
else if (NS6)
document.getElementById("pic"+i).style.visibility='hidden'
else if (NS4)
eval("document.pic"+i+".visibility='hide'")
clearInterval(startfly)
}
}

if (NS4||NS6||IE4){
window.onload=init;
window.onresize=function(){ wind_w=getwindowwidth(); wind_h=getwindowheight(); }
}

</script>
<script>

/******************************************
* Cross browser cursor trailer script- By Brian Caputo (bcaputo@icdc.com)
* Visit Dynamic Drive (http://www.dynamicdrive.com/) for full source code
* Modified Dec 31st, 02' by DD. This notice must stay intact for use
******************************************/

A=document.getElementById
B=document.all;
C=document.layers;
T1=new Array("trail1.gif",38,35,"trail2.gif",30,31,"trail3.gif",28,26,"trail4.gif",22,21,"trail5.gif",16,16,"trail6.gif",10,10)

let offsetx=15 //x offset of trail from mouse pointer
let offsety=10 //y offset of trail from mouse pointer

nos=parseInt(T1.length/3)
rate=50
ie5fix1=0;
ie5fix2=0;
rightedge=B? document.body.clientWidth-T1[1] : window.innerWidth-T1[1]-20
bottomedge=B? document.body.scrollTop+document.body.clientHeight-T1[2] : window.pageYOffset+window.innerHeight-T1[2]

for (i=0;i<nos;i++){
createContainer("CUR"+i,i*10,i*10,i*3+1,i*3+2,"","<img src='"+T1[i*3]+"' width="+T1[(i*3+1)]+" height="+T1[(i*3+2)]+" border=0>")
}

function createContainer(N,Xp,Yp,W,H,At,HT,Op,St){
with (document){
write((!A && !B) ? "<layer id='"+N+"' left="+Xp+" top="+Yp+" width="+W+" height="+H : "<div id='"+N+"'"+" style='position:absolute;left:"+Xp+"; top:"+Yp+"; width:"+W+"; height:"+H+"; ");
if(St){
if (C)
write(" style='");
write(St+";' ")
}
else write((A || B)?"'":"");
write((At)? At+">" : ">");
write((HT) ? HT : "");
if (!Op)
closeContainer(N)
}
}

function closeContainer(){
document.write((A || B)?"</div>":"</layer>")
}

function getXpos(N){
if (A)
return parseInt(document.getElementById(N).style.left)
else if (B)
return parseInt(B[N].style.left)
else
return C[N].left
}

function getYpos(N){
if (A)
return parseInt(document.getElementById(N).style.top)
else if (B)
return parseInt(B[N].style.top)
else
return C[N].top
}

function moveContainer(N,DX,DY){
c=(A)? document.getElementById(N).style : (B)? B[N].style : (C)? C[N] : "";
if (!B){
rightedge=window.innerWidth-T1[1]-20
bottomedge=window.pageYOffset+window.innerHeight-T1[2]
}
c.left=Math.min(rightedge, DX+offsetx);
c.top=Math.min(bottomedge, DY+offsety);
}
function cycle(){
//if (IE5) 
if (document.all&&window.print){
ie5fix1=document.body.scrollLeft;
ie5fix2=document.body.scrollTop;
}
for (i=0;i<(nos-1);i++){
moveContainer("CUR"+i,getXpos("CUR"+(i+1)),getYpos("CUR"+(i+1)))
}
}

function newPos(e){
moveContainer("CUR"+(nos-1),(B)?event.clientX+ie5fix1:e.pageX+2,(B)?event.clientY+ie5fix2:e.pageY+2)
}

function getedgesIE(){
rightedge=document.body.clientWidth-T1[1]
bottomedge=document.body.scrollHeight-T1[2]
}

if (B){
window.onload=getedgesIE
window.onresize=getedgesIE
}

if(document.layers)
document.captureEvents(Event.MOUSEMOVE)
document.onmousemove=newPos
setInterval("cycle()",rate)
</script>
</body>
</html>
