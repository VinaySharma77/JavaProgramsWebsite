<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 4</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <?php include '../topbar.php'?>
        <div class="home"><a href="../index.php">Home</a></div>
        <div class="main">
            <h1> Write a Java program to print the sum, multiply, subtract, divide and remainder of two numbers</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>public class ArithmeticOperations{<br>
	                <span>int num1 = 50, num2 = 10;</span><br>
	                <span>void sum(){</span><br>
                    <span><span>int sum;</span></span><br>
		                        <span><span>sum = num1 + num2;</span></span><br>
		                        <span><span>System.out.println("Sum of two numbers is : " + sum);</span></span><br>
	                <span>}</span><br>
	                <span>void division(){</span><br>
                                <span><span>int division;</span></span><br>
		                        <span><span>division = num1 / num2;</span></span><br>
		                        <span><span>System.out.println("Division of two numbers is : " + division);</span></span><br>
	                <span>}</span><br>
	                <span>void multiply(){</span><br>
		                        <span><span>int multiply;</span></span><br>
		                        <span><span>multiply = num1 * num2;</span></span><br>
		                        <span><span>System.out.println("Multiplication of two numbers is : " + multiply);</span></span><br>
	                <span>}</span><br>
	                <span>void subtract(){</span><br>
		                        <span><span>int subtract;</span></span><br>
		                        <span><span>subtract = num1 - num2;</span></span><br>
		                        <span><span>System.out.println("Subtraction of two numbers is : " + subtract);</span></span><br>
	                <span>}</span><br>
	                <span>public static void main(String args[]){</span><br>
		                        <span><span>ArithmeticOperations obj = new ArithmeticOperations();</span></span><br>
		                        <span><span>System.out.println("First Number is : " + obj.num1);</span></span><br>
		                        <span><span>System.out.println("Second Number is : " + obj.num2);</span></span><br>
		                        <span><span>obj.sum();</span></span><br>
		                        <span><span>obj.division();</span></span><br>
		                        <span><span>obj.multiply();</span></span><br>
		                        <span><span>obj.subtract();</span></span><br>
	                <span>}</span><br>
}</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>First Number is : 50<br>
                    Second Number is : 10<br>
                    Sum of two numbers is : 60<br>
                    Division of two numbers is : 5<br>
                    Multiplication of two numbers is : 500<br>
                    Subtraction of two numbers is : 45</p>
            </div>
        </div>
    </div>
</body>
</html>