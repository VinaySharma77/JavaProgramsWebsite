<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 14</title>
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
            <h1>Write a Java program that accepts an integer (n) and computes the value of n+nn+nnn</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                class SumOfNNN{<br>
                	<span>public static void main(String args[]){</span><br>
                		<span><span>int n;</span></span><br>
                		<span><span>Scanner scan = new Scanner(System.in);</span></span><br>
                		<span><span>System.out.println("Program to compute value of n+nn+nnn");</span></span><br>
                		<span><span>System.out.print("Enter an integer : ");</span></span><br>
                		<span><span>n = scan.nextInt();</span></span><br>
                		<span><span>int nn = n * 10 + n; //110</span></span><br>
                		<span><span>int nnn = n * 100 + nn;//1110</span></span><br>
                		<span><span>int result = n + nn + nnn;</span></span><br>
                		<span><span>System.out.println("Sum n + nn + nnn is : " + result);</span></span><br>
                	<span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Program to compute value of n+nn+nnn<br>
                Enter an integer : 123<br>
                Sum n + nn + nnn is : 15129</p>
            </div>
        </div>
    </div>
</body>
</html>