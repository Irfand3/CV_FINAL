<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<meta charset="utf-8">
	<meta name="author" content="Irfan Duric">
	<meta name="description" content="CV project">
	<meta name="keywords" content="CV, Personal, Project">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/6005d190be.js" crossorigin="anonymous"></script>
</head>

<body style="background-color: #23313F; list-style: none; color:white">
<div class="container" >

	<div class="card bg-dark mt-5 p-3">
		<div class="card-body">
			<h1 class="card-title text-center text-white p-3">Calculator</h1>
			<div class="row">
				<div class="col text-center">
				<h5 class="text-white ">First Number</h5>
				<input type="text"  name="field1" id="number1" value="">
				</div>
				<div class="col text-center">
				<h5 class="text-white">Operation</h5>
				<input type="text"  name="operation" id="operation" value="" size="5" maxlength="1">

				</div>
				<div class="col text-center">
				<h5 class="text-white">Second Number</h5>
				<input type="text" name="field2" id="number2" value="" >
				</div>
			</div>
			<div class="row mt-3">
				<div class="col text-center mt-3">
				<button class="btn btn-warning" id="calculate">Calculate</button>
				</div>
			</div>
			<div class="row">
				<div class="col">
			<h1 class="text-center mt-4">Result = <span id="result" class="h1 text-white"> </span> </h1> 
				</div>
			
			</div>
	
	<div class="row ml-5">
	
	<li class="p-3 m-3 h2" value="1" id="one">1</li>
	<li class="p-3 m-3 h2" value="2" id="two">2</li>
	<li class="p-3 m-3 h2" value="3" id="three">3</li>

	</div>
	<div class="row ml-5">
	<li class="p-3 m-3 h2" value="4" id="four">4</li>
	<li class="p-3 m-3 h2" value="5" id="five">5</li>
	<li class="p-3 m-3 h2" value="6" id="six">6</li>
	</div>
	<div class="row ml-5">
	<li class="p-3 m-3 h2" value="7" id="seven">7</li>
	<li class="p-3 m-3 h2" value="8" id="eight">8</li>
	<li class="p-3 m-3 h2" value="9" id="nine">9</li>
	</div>
	<div class="row ml-5 ">
		<div class=" col align-self-center ml-5">
	<li  class="p-3 m-3 h2 ml-4" value="0" id="zero">0</li>
	</div>
	</div>
	<div class="row">
	<button class="btn btn-small btn-primary pl-4 pr-4 mr-2 ml-3" value="+" id="plus">+</button>
	<button class="btn btn-small btn-primary pl-4 pr-4 mr-2 ml-3" value="-" id="minus">-</button>
	<button class="btn btn-small btn-primary pl-4 pr-4 mr-2 ml-3" value="*" id="multiply">*</button>
	<button class="btn btn-small btn-primary pl-4 pr-4 mr-2 ml-3" value="/" id="divide">/</button>
	<button class="btn btn-small btn-primary pl-4 pr-4 mr-2 ml-3" value="%" id="modulo">%</button>
	</div>
	<br>
	<h5 >Please use provided numpad and click on the input field in order to type on it.Thank you.</h5>

	</div>
	</div>
</div>



<script type="text/javascript" src="calculator.js"></script>
</body>
</html>	