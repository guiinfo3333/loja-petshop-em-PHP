<html>
<head>
	<title></title>

</head>

<style type="text/css">
body{
	padding:0;
	margin:0;
	background-color:white;
}
.loading{
	position:absolute;
	top:50%;
	left:50%;
	transform:translate(-50%,-50%);
	height: 40px;
display:flex;
align-items:center;

}
.obj{
width:6px;
height:40px;
background-color:#e74c3c;
margin:0 3px;
border-radius:10px;
animation:loading 0.8s infinite;
}
.obj:nth-child(2){
	animation-delay:0.1s;
}
.obj:nth-child(3){
	animation-delay:0.1s;
}
.obj:nth-child(4){
	animation-delay:0.2s;
}
.obj:nth-child(5){
	animation-delay:0.3s;
}
.obj:nth-child(6){
	animation-delay:0.4s;
}
.obj:nth-child(7){
	animation-delay:0.5s;
}
.obj:nth-child(8){
	animation-delay:0.6s;
}
@keyframes loading{
0%{
	height:0;
}
50%{
height:40px;
}
100%{
height:0px;
}
}
</style>
<body>
<div class="loading">
<div class="obj"></div>
<div class="obj"></div>
<div class="obj"></div>
<div class="obj"></div>
<div class="obj"></div>
<div class="obj"></div>
<div class="obj"></div>
<div class="obj"></div>
</div>
<script type="text/javascript">
var myVar;

function myFunction() {
  myVar = setInterval(fazcarregar,3000);
}

 function fazcarregar(){
a=document.getElementsByClassName("loading")[0];
a.style.display="none";
 }
	myFunction();
</script>
</body>
</html>