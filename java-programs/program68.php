<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 68</title>
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
            <h1>Write a Java program to create a simple calculator</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                class SimpleCalculator{<br>
                	<span>void Calculator(){</span><br>
                		<span><span>System.out.println("Program to create a Simple Calculator");</span></span><br>
                		<span><span>Scanner scan = new Scanner(System.in);</span></span><br>
                		<span><span>System.out.println("Simple Calculator");</span></span><br>
                		<span><span>System.out.println("----------------------------");</span></span><br>
                		<span><span>while(true){</span></span><br>
                			<span><span><span>System.out.print("Enter First Number : ");</span></span></span><br>
                			<span><span><span>double first = scan.nextDouble();</span></span></span><br>
                			<span><span><span>System.out.print("Enter an Operator or enter q to exit : ");</span></span></span><br>
                			<span><span><span>char operator = scan.next().charAt(0);</span></span></span><br>
                			<span><span><span>if(operator == 'q'){</span></span></span><br>
                				<span><span><span><span>System.out.print("Calculator Exiting ");</span></span></span></span><br>
                				<span><span><span><span>break;</span></span></span></span><br>
                			<span><span><span>}</span></span></span><br>
                			<span><span><span>System.out.print("Enter Second Number : ");</span></span></span><br>
                			<span><span><span>double second = scan.nextDouble();</span></span></span><br>
                			<span><span><span>double result;</span></span></span><br>
                			<span><span><span>switch(operator){</span></span></span><br>
                				<span><span><span><span>case '+':</span></span></span></span><br>
                					<span><span><span><span><span>result = first + second;</span></span></span></span></span><br>
                					<span><span><span><span><span>System.out.println("Addition is : " + result);</span></span></span></span></span><br>
                					<span><span><span><span><span>break;</span></span></span></span></span><br>
                				<span><span><span><span>case '-':</span></span></span></span><br>
                					<span><span><span><span><span>result = first - second;</span></span></span></span></span><br>
                					<span><span><span><span><span>System.out.println("Subtraction is : " + result);</span></span></span></span></span><br>
                					<span><span><span><span><span>break;</span></span></span></span></span><br>
                				<span><span><span><span>case '*':</span></span></span></span><br>
                					<span><span><span><span><span>result = first * second;</span></span></span></span></span><br>
                					<span><span><span><span><span>System.out.println("Multiplication is : " + result);</span></span></span></span></span><br>
                					<span><span><span><span><span>break;</span></span></span></span></span><br>
                				<span><span><span><span>case '/':</span></span></span></span><br>
                					<span><span><span><span><span>if(second != 0){</span></span></span></span></span><br>
                						<span><span><span><span><span><span>result = first / second;</span></span></span></span></span></span><br>
                						<span><span><span><span><span><span>System.out.println("Division is : " + result);</span></span></span></span></span></span><br>
                						<span><span><span><span><span><span>break;</span></span></span></span></span></span><br>
                					<span><span><span><span><span>}</span></span></span></span></span><br>
                					<span><span><span><span><span>else{</span></span></span></span></span><br>
                						<span><span><span><span><span><span>System.out.println("Cannot divide by 0 !!");</span></span></span></span></span></span><br>
                						<span><span><span><span><span><span>continue;</span></span></span></span></span></span><br>
                					<span><span><span><span><span>}</span></span></span></span></span><br>
                				<span><span><span><span>default:</span></span></span></span><br>
                					<span><span><span><span><span>System.out.println("Please enter valid operator !!");</span></span></span></span></span><br>
                			<span><span><span>}</span></span></span><br>
                		<span><span>}</span></span><br>
                	<span>}</span><br>
                	<span>public static void main(String args[]){</span><br>
                		<span><span>SimpleCalculator obj = new SimpleCalculator();</span></span><br>
                		<span><span>obj.Calculator();</span></span><br>
                	<span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Enter First Number : 20<br>
                Enter an Operator or enter q to exit : +<br>
                Enter Second Number : 30<br>
                Addition is : 50.0</p>
            </div>
        </div>
    </div>
</body>
</html>