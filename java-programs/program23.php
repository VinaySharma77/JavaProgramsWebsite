<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 23</title>
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
            <h1>Write a Java program to compute the square root of an given integer</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                class IntegerSquareRoot{<br>
                	<span>void squareRoot(){</span><br>
                		<span><span>int num, squareRoot;</span></span><br>
                		<span><span>System.out.println("Program to calculate Square Root of an integer");</span></span><br>
                		<span><span>Scanner scan = new Scanner(System.in);</span></span><br>
                		<span><span>System.out.print("Enter a number : ");</span></span><br>
                		<span><span>num = scan.nextInt();</span></span><br>
                		<span><span>squareRoot = num * num;</span></span><br>
                		<span><span>System.out.println("Square Root of " + num + " is : " + squareRoot);</span></span><br>
                	<span>}</span><br>
                	<span>public static void main(String args[]){</span><br>
                		<span><span>IntegerSquareRoot obj = new IntegerSquareRoot();</span></span><br>
                		<span><span>obj.squareRoot();</span></span><br>
                	<span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Program to calculate Square Root of an integer<br>
                Enter a number : 5<br>
                Square Root of 5 is : 25</p>
            </div>
        </div>
    </div>
</body>
</html>