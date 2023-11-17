<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 44</title>
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
            <h1>Java program to find factorial of any number</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                class Factorial{<br>
                	<span>void factorial(){</span><br>
                		<span><span>System.out.println("Program to Find Factorial of a Number");</span></span><br>
                		<span><span>Scanner scan = new Scanner(System.in);</span></span><br>
                		<span><span>int num, fact = 1, i;</span></span><br>
                		<span><span>System.out.print("Enter a number : ");</span></span><br>
                		<span><span>num = scan.nextInt();</span></span><br>
                		<span><span>for(i = 1; i <= num; i++){</span></span><br>
                			<span><span><span>fact *= i;</span></span></span><br>
                		<span><span>} </span></span><br>
                		<span><span>System.out.println("Factorial of " + num + " is : " + fact);</span></span><br>
                	<span>}</span><br>
                	<span>public static void main(String args[]){</span><br>
                		<span><span>Factorial obj = new Factorial();</span></span><br>
                		<span><span>obj.factorial();</span></span><br>
                	<span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Program to Find Factorial of a Number<br>
                Enter a number : 5<br>
                Factorial of 5 is : 120</p>
            </div>
        </div>
    </div>
</body>
</html>