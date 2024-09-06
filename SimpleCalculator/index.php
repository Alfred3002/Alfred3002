<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="calculator">
        <h1>Calculator</h1>
        <form action="calculate.php" method="post">
            <input type="number" name="num1" placeholder="First number">
            <select name="operator">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="number" name="num2" placeholder="Second number">
            <input type="submit" value="Calculate">
        </form>
        <p>Result: 
            <?php 
            if (isset($_GET['result'])) { echo $_GET['result']; } 
            ?>
        </p>
    </div>
</body>
</html>