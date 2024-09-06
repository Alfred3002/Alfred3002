<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operator = $_POST['operator'];

switch ($operator) {
	case '+':
		$result = $num1 + $num2;
		break;
	case '-':
		$result = $num1 - $num2;
		break;
	case '*':
		$result = $num1 * $num2;
		break;
	case '/':
		if ($num2 != 0) {
			$result = $num1 / $num2;
		} else {
			$result = 'Error: Division by zero!';
		}
		break;
	default:
		$result = 'Error: Invalid operator!';
}

echo "<p>The result is: $result</p>";
?>