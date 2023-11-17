<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 64</title>
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
            <h1>Write a Java program that reads an positive integer and count the number of digits</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                class CountPositiveIntegerDigits{<br>
                	<span>void Count(){</span><br>
                		<span><span>System.out.println("Program to Count Sum of Positive Integer's Digits");</span></span><br>
                		<span><span>Scanner scan = new Scanner(System.in);</span></span><br>
                		<span><span>System.out.print("Enter a Number : ");</span></span><br>
                		<span><span>int num = scan.nextInt();</span></span><br>
                		<span><span>if(num > 0){</span></span><br>
                			<span><span><span>int sum = 0;</span></span></span><br>
                			<span><span><span>int temp = num;</span></span></span><br>
                			<span><span><span>while(temp != 0){</span></span></span><br>
                				<span><span><span><span>int digit = temp % 10;</span></span></span></span><br>
                				<span><span><span><span>sum += digit;</span></span></span></span><br>
                				<span><span><span><span>temp /= 10;</span></span></span></span><br>
                			<span><span><span>}	</span></span></span>	<br>
                			<span><span><span>System.out.println("Sum of Digits : " + sum);</span></span></span><br>
                		<span><span>}</span></span><br>
                		<span><span>else{</span></span><br>
                			<span><span><span>System.out.println("It is a Negative Number");</span></span></span><br>
                		<span><span>}</span></span><br>
                	<span>}</span><br>
                	<span>public static void main(String args[]){</span><br>
                		<span><span>CountPositiveIntegerDigits obj = new CountPositiveIntegerDigits();</span></span><br>
                		<span><span>obj.Count();</span></span><br>
                	<span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Program to Count Sum of Positive Integer's Digits<br>
                Enter a Number : 56<br>
                Sum of Digits : 11</p>
            </div>
        </div>
    </div>
</body>
</html>