<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 25</title>
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
            <h1>Write a Java program to add two numbers without using any arithmetic operators</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>class SumWithoutArithmetic{<br>
                	    <span>void SumWithoutArithmetic(){</span><br>
                	    	<span><span>int num1 = 10, num2 = 20;</span></span><br>
                	    	<span><span>while(num1 != 0){</span></span><br>
                	    		<span><span><span>int carry = (num1 & num2);</span></span></span><br>
                	    		<span><span><span>num2 = num2 ^ num1;</span></span></span><br>
                	    		<span><span><span>num1 = carry << 1;</span></span></span><br>
                	    	<span><span>}</span></span><br>
                	    	<span><span>System.out.println("Sum of two numbers is : " + num2);</span></span><br>
                	    <span>}</span><br>
                	    <span>public static void main(String args[]){</span><br>
                	    	<span><span>SumWithoutArithmetic obj = new SumWithoutArithmetic();</span></span><br>
                	    	<span><span>obj.SumWithoutArithmetic();</span></span><br>
                	    <span>}</span><br>
                    }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Sum of two numbers is : 30</p>
            </div>
        </div>
    </div>
</body>
</html>