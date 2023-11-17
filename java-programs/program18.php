<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 18</title>
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
            <h1>Write a Java program to convert a string to an integer</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>class StringToInteger{<br>
	                <span>public static void main(String args[]){</span><br>
	                	<span><span>System.out.println("Program to convert string to integer");</span></span><br>
	                	<span><span>String string1 = "10", string2 = "10";</span></span><br>
	                	<span><span>System.out.println("First String is : " + string1);</span></span><br>
	                	<span><span>System.out.println("Second String is : " + string2);</span></span><br>
	                	<span><span>System.out.println("Before conversion sum of string is : " + string1 + string2);</span></span><br>
	                	<span><span>int num1 = Integer.valueOf(string1);</span></span><br>
	                	<span><span>int num2 = Integer.valueOf(string2);</span></span><br>
	                	<span><span>System.out.println("After conversion sum of variables is :  " + (num1 + num2));</span></span><br>
	                <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Program to convert string to integer<br>
                First String is : 10<br>
                Second String is : 10<br>
                Before conversion sum of string is : 1010<br>
                After conversion sum of variables is : 20</p>
            </div>
        </div>
    </div>
</body>
</html>