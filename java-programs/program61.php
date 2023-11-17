<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 61</title>
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
            <h1>Write a Java program to display the n terms of odd natural number and their sum</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                class OddNaturalNumbersSum{<br>
                	<span>void Calc(){</span><br>
                		<span><span>System.out.println("Program to Print Odd Natural Number's and their Sum upto N");</span></span><br>
                		<span><span>Scanner scan = new Scanner(System.in);</span></span><br>
                		<span><span>System.out.print("Enter value of N : ");</span></span><br>
                		<span><span>int n = scan.nextInt();</span></span><br>
                		<span><span>int i, sum = 0, odd = 1;<br>
                		<span><span>System.out.print("First " + n + " Natural Numbers are : ");</span></span><br>
                		<span><span>for(i = 1; i <= n; i++){</span></span><br>
                			<span><span><span>System.out.print(odd + " , ");</span></span></span><br>
                			<span><span><span>sum += odd;</span></span></span><br>
                			<span><span><span>odd += 2;</span></span></span><br>
                			<span><span><span>if(odd > n){</span></span></span><br>
                				<span><span><span><span>break;</span></span></span></span><br>
                			<span><span><span>}</span></span></span><br>
                		<span><span>}</span></span><br>
                		<span><span>System.out.println("\nSum of all " + n + " Natural Numbers is : " + sum);</span></span><br>
                	<span>}</span><br>
                	<span>public static void main(String args[]){</span><br>
                		<span><span>OddNaturalNumbersSum obj = new OddNaturalNumbersSum();</span></span><br>
                		<span><span>obj.Calc();</span></span><br>
                	<span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Program to Print Odd Natural Number's and their Sum upto N<br>
                Enter value of N : 10<br>
                First 10 Natural Numbers are : 1 , 3 , 5 , 7 , 9 ,<br>
                Sum of all 10 Natural Numbers is : 25</p>
            </div>
        </div>
    </div>
</body>
</html>