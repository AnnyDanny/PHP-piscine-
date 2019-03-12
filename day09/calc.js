function plus()
{
	var num1, num2, result;
	num1 = document.getElementById('n1').value;
	num1 = parseInt(num1);

	num2 = document.getElementById('n2').value;
	num2 = parseInt(num2);

	result = num1 + num2;
	document.getElementById('out').innerHTML = result;
}

function minus()
{
	var num1, num2, result;
	num1 = document.getElementById('n1').value;
	num1 = parseInt(num1);

	num2 = document.getElementById('n2').value;
	num2 = parseInt(num2);

	result = num1 - num2;
	document.getElementById('out').innerHTML = result;
}

function multiply()
{
	var num1, num2, result;
	num1 = document.getElementById('n1').value;
	num1 = parseInt(num1);

	num2 = document.getElementById('n2').value;
	num2 = parseInt(num2);

	result = num1 * num2;
	document.getElementById('out').innerHTML = result;
}

function divide()
{
	var num1, num2, result;
	num1 = document.getElementById('n1').value;
	num1 = parseInt(num1);

	num2 = document.getElementById('n2').value;
	num2 = parseInt(num2);

	result = num1 / num2;
	document.getElementById('out').innerHTML = result;
}

function remainder()
{
	var num1, num2, result;
	num1 = document.getElementById('n1').value;
	num1 = parseInt(num1);

	num2 = document.getElementById('n2').value;
	num2 = parseInt(num2);

	result = num1 % num2;
	document.getElementById('out').innerHTML = result;
}

// alert(num2);
		// <script src="calc.js" defer>
	// 	<p>number1: <input type="text" id="n1"></p>
	// <p>number2: <input type="text" id="n2"></p>
	// <button onclick="plus()"> + </button>
	// <button onclick="minus()"> - </button>
	// <button onclick="multiply()"> * </button>
	// <button onclick="divide()"> / </button>
	// <button onclick="remainder()"> % </button>
	// <hr>
	// <p id="out">result:</p>