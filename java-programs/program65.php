<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 65</title>
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
            <h1>Write a Java program that accepts three numbers and check All numbers are equal or not</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                class CheckEqualNumber{<br>
                	<span>void CheckNumber(){</span><br>
                		<span><span>System.out.println("Program to Check All Three Number are Equal or Not");</span></span><br>
                		<span><span>Scanner scan = new Scanner(System.in);</span></span><br>
                		<span><span>System.out.print("Enter First Number : ");</span></span><br>
                		<span><span>int first = scan.nextInt();</span></span><br>
                		<span><span>System.out.print("Enter Second Number : ");</span></span><br>
                		<span><span>int second = scan.nextInt();</span></span><br>
                		<span><span>System.out.print("Enter Third Number : ");</span></span><br>
                		<span><span>int third = scan.nextInt();</span></span><br>
                		<span><span>if(first == second && second == third){</span></span><br>
                			<span><span><span>System.out.println("All Three Numbers are Equal");</span></span></span><br>
                		<span><span>}</span></span><br>
                		<span><span>else{</span></span><br>
                			<span><span><span>System.out.println("All Three Numbers are Not Equal");</span></span></span><br>
                		<span><span>}</span></span><br>
                	<span>}</span><br>
                	<span>public static void main(String args[]){</span><br>
                		<span><span>CheckEqualNumber obj = new CheckEqualNumber();</span></span><br>
                		<span><span>obj.CheckNumber();</span></span><br>
                	<span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Program to Check All Three Number are Equal or Not<br>
                Enter First Number : 5<br>
                Enter Second Number : 5<br>
                Enter Third Number : 5<br>
                All Three Numbers are Equal</p>
            </div>
        </div>
    </div>
</body>
</html>