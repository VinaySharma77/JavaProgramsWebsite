<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 7</title>
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
            <h1>Write a Java program to convert a decimal number to binary numbers</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                class DecimalToBinary{<br>
                	<span>String decimalToBinary(int decimalNumber){</span><br>
                		<span><span>if(decimalNumber == 0){</span></span><br>
                			<span><span><span>return "0";</span></span></span><br>
                		<span><span>}<br>
                		<span><span>StringBuilder binary = new StringBuilder();</span></span><br>
                		<span><span>while(decimalNumber > 0){</span></span><br>
                			<span><span><span>int rem = decimalNumber % 2;</span></span></span><br>
                			<span><span><span>binary.insert(0, rem);</span></span></span><br>
                			<span><span><span>decimalNumber/=2;</span></span></span><br>
                		<span><span>}</span></span><br>
                		<span><span>return binary.toString();</span></span><br>
                	<span>}</span><br>
                	<span>void dec2bin(){</span><br>
                		<span><span>int num;</span></span><br>
                		<span><span>System.out.println("Program to convert decimal number to binary number");</span></span><br>
                		<span><span>Scanner scan = new Scanner(System.in);</span></span><br>
                		<span><span>System.out.print("Enter a decimal number : ");</span></span><br>
                		<span><span>num = scan.nextInt();</span></span><br>
                		<span><span>String binary = decimalToBinary(num);</span></span><br>
                		<span><span>System.out.println("Binary Representation of number is : " + binary);</span></span><br>
                	<span>}</span><br>
                	<span>public static void main(String args[]){</span><br>
                		<span><span>DecimalToBinary obj = new DecimalToBinary();</span></span><br>
                		<span><span>obj.dec2bin();</span></span><br>
                	<span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Program to convert decimal number to binary number<br>
                    Enter a decimal number : 10<br>
                    Binary Representation of number is : 1010</p>
            </div>
        </div>
    </div>
</body>
</html>