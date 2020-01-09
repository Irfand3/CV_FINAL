/*

Input field has to be clicked in order to input value there because it is on click event (focus didnt worked for some reason)
Numbers has to be inputed by the 'numpad' provided in calculator (Manually typed numbers dont work for some reason).

*/
var number1 = document.querySelector('#number1');
var number2 = document.querySelector('#number2');
var operation = document.querySelector('#operation');
var displayresult = document.querySelector('#result');
var calculatebutton = document.querySelector('#calculate')

var zero = document.querySelector('#zero');
var one = document.querySelector('#one');
var two = document.querySelector('#two');
var three = document.querySelector('#three');
var four = document.querySelector('#four');
var five = document.querySelector('#five');
var six = document.querySelector('#six');
var seven = document.querySelector('#seven');
var eight = document.querySelector('#eight');
var nine = document.querySelector('#nine');
var plus = document.querySelector('#plus');
var minus = document.querySelector('#minus');
var multiply = document.querySelector('#multiply');
var divide = document.querySelector('#divide');
var modulo = document.querySelector('#modulo');


console.log(plus.value);

var num1 ="";
var num2 ="";
var operator ="";
var focus ="";
var result;

function changefield(number){

	

	if (focus === "number1")
	{

	num1 = `${num1}${number}`	
	return number1.value =num1;

	}

	else if (focus === "number2")
	{

	num2 = `${num2}${number}`
	return number2.value =num2;

	}

	else if (focus === "operation")
	{

	operator = number;
	return operation.value = operator;

	}

}


function changeFocus(inputField){
	if(inputField === "number1")
	{
		focus = "number1";
		console.log("input field changed to number 1")
	}

	else if(inputField === "number2")
	{
		focus = "number2";
		console.log("input field changed to number 2")
	}

	else if(inputField === "operation")
	{
		focus = "operation";
		console.log("input field changed to operation")
	}


}

function calculate(operation){


	if (operation === "+")
	{
		console.log("Adding")
		result = +number1.value + +number2.value;
		return displayresult.innerHTML = result;

	}
	else if (operation === "-") 
	{
		console.log("Subtracting");
		result = +number1.value - +number2.value;
		return displayresult.innerHTML = result;
	}
	else if (operation === "*") 
	{
		console.log("Multiplying");
		result = +number1.value * +number2.value;
		return displayresult.innerHTML = result;
	}
	else if (operation === "/") 
	{
		console.log("Dividing");
		result = +number1.value / +number2.value;
		return displayresult.innerHTML = result;
	}
	else if (operation === "%") 
	{
		console.log("Modulo");
		result = +number1.value % +number2.value;
		return displayresult.innerHTML = result;
	}
	else 
	{
		window.alert("Invalid Operation sign")
	}

}


number1.addEventListener("click", function(){
	changeFocus("number1");
});

number2.addEventListener("click", function(){
	changeFocus("number2");
});

operation.addEventListener("click", function(){
	changeFocus("operation");
});

zero.addEventListener("click", function(){
	changefield(zero.value);
})


one.addEventListener("click", function(){
	changefield(one.value);
})

two.addEventListener("click", function(){
	changefield(two.value);
})

three.addEventListener("click", function(){
	changefield(three.value);
})

four.addEventListener("click", function(){
	changefield(four.value);
})

five.addEventListener("click", function(){
	changefield(five.value);
})

six.addEventListener("click", function(){
	changefield(six.value);
})
seven.addEventListener("click", function(){
	changefield(seven.value);
})

eight.addEventListener("click", function(){
	changefield(eight.value);
})

nine.addEventListener("click", function(){
	changefield(nine.value);
})



plus.addEventListener("click", function(){
	changefield(plus.value);
})

minus.addEventListener("click", function(){
	changefield(minus.value);
})

divide.addEventListener("click", function(){
	changefield(divide.value);
})

multiply.addEventListener("click", function(){
	changefield(multiply.value);
})

modulo.addEventListener("click", function(){
	changefield(modulo.value);
})

calculatebutton.addEventListener("click", function(){
	calculate(operator);	
})
