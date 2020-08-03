<?php
	session_start();                   // SE/2017/046- B.C.S. Wickramasinghe
?>
<!DOCTYPE html>
<head>
	<style type="text/css">
	button {
		padding: 20px;
		width: 50px;
		background-color: #800000;
		color: white;
		cursor: pointer;
	}
	button:hover{
		background-color: #000000;
	}
	</style>
</head>

<body>

	<?php
		$res = isset($_GET['res']) ? $_GET['res'] : '';
	?>
<div align="center">
	
		<form method="GET" action="result.php">
			<label style="visibility:hidden;">Number</label>
			<input style="visibility:hidden;" type="number" name="num" id="num" value=""></input><br/>
			<label>Number 01</label>
			<input type="number" name="num1" id="num1" value=""></input><br/>
			<label>Number 02</label>
			<input type="number" name="num2" id="num2" value=""></input><br>
			<label style="visibility:hidden;">Result</label>
			<input style="visibility:hidden;" type="number" name="res" id="res" value="0"></input><br/>
			<a href="result.php"><button type="submit" style="width:100px;">SEE RESULT</button></a>
	
		<table>
			<tr>
			<td><button type="button" onclick="clear()">C</button></td>
			<td><button type="button" onclick="display()">+/-</button></td>
			<td><button type="button" onclick="operator(5)">%</button></td>
			<td><button type="button" onclick="operator(4)">/</button></td>
			</tr>
			<tr>
			<td><button type="button" onclick="display(7)">7</button></td>
			<td><button type="button" onclick="display(8)">8</button></td>
			<td><button type="button" onclick="display(9)">9</button></td>
			<td><button type="button" onclick="operator(3)">x</button></td>
			</tr>
			<tr>
			<td><button type="button" onclick="display(4)">4</button></td>
			<td><button type="button" onclick="display(5)">5</button></td>
			<td><button type="button" onclick="display(6)">6</button></td>
			<td><button type="button" onclick="operator(2)">-</button></td>
			</tr>
			<tr>
			<td><button type="button" onclick="display(1)">1</button></td>
			<td><button type="button" onclick="display(2)">2</button></td>
			<td><button type="button" onclick="display(3)">3</button></td>
			<td><button type="button" onclick="operator(1)">+</button></td>
			</tr>
			<tr> 
			<td><button type="button" onclick="display(0)">0</button></td>
			<td><button type="button" onclick="display()">.</button></td>
			<td><button type="button" onclick="display()">del</button></td>
			<td><button type="button" onclick="fin()">=</button></td>
			</tr>
		</table>
		</form>
	</div>
	
	<script>
	var count = 0;
	var num1 = 0;
	var num2 = 0;
	var res = 0;
	var op = 0;

	function display(val){
		document.getElementById("num1").value = num1;
		switch(val) {
			case 9: 
				document.getElementById("num").value += 9;
				break;
			case 8: 
				document.getElementById("num").value += 8;
				break;
			case 7: 
				document.getElementById("num").value += 7;
				break;
			case 6: 
				document.getElementById("num").value += 6;
				break;
			case 5: 
				document.getElementById("num").value += 5;
				break;
			case 4: 
				document.getElementById("num").value += 4;
				break;
			case 3: 
				document.getElementById("num").value += 3;
				break;
			case 2: 
				document.getElementById("num").value += 2;
				break;
			case 1: 
				document.getElementById("num").value += 1;
				break;
			case 0: 
				document.getElementById("num").value += 0;
				break;
		}	
	}
	
	function operator(p){
		window.num1 = document.getElementById("num").value;
		document.getElementById("num").value = 0;
		window.count = 1;	
		document.getElementById("num1").value = window.num1;
		window.op = p;
	}
	
	function fin(){
		window.num2 = document.getElementById("num").value;
		document.getElementById("num").value = 0;
		window.count = 2;	
		document.getElementById("num2").value = window.num2;
		
		var res = parseInt(window.res);
		var num1 = parseInt(window.num1);
		var num2 = parseInt(window.num2);
		
		if(window.op == 1) res=num1+num2;
		if(window.op == 2) res=num1-num2;
		if(window.op == 3) res=num1*num2;
		if(window.op == 4) res=num1/num2;
		if(window.op == 5) res=num1%num2;
		
		document.getElementById("res").value=res;
		window.res=res;
	}
	
	
	function clear(){
		document.getElementById("num").value=0;
		document.getElementById("num1").value=0;
		document.getElementById("num2").value=0;
	}
	
	</script>
</body>
</html>