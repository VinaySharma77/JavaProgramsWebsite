<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 43</title>
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
            <h1>Java program to sum of N numbers</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                class SumOfNNumbers{<br>
                	<span>void CalcSum(){</span><br>
                		<span><span>System.out.println("Program to Print Sum of N Numbers");</span></span><br>
                		<span><span>int i, n, sum = 0;</span></span><br>
                		<span><span>Scanner scan = new Scanner(System.in);</span></span><br>
                		<span><span>System.out.print("Enter the value of N : ");</span></span><br>
                		<span><span>n = scan.nextInt();</span></span><br>
                		<span><span>int num[] = new int[n];</span></span><br>
                		<span><span>for(i = 0; i < n; i++){</span></span><br>
                			<span><span><span>System.out.print("Enter a number : ");</span></span></span><br>
                			<span><span><span>num[i] = scan.nextInt();</span></span></span><br>
                			<span><span><span>sum += num[i];</span></span></span><br>
                		<span><span>}</span></span><br>
                		<span><span>System.out.println("Sum of N Numbers is : " + sum);</span></span><br>
                	<span>}</span><br>
                	<span>public static void main(String args[]){</span><br>
                		<span><span>SumOfNNumbers obj = new SumOfNNumbers();</span></span><br>
                		<span><span>obj.CalcSum();</span></span><br>
                	<span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Program to Print Sum of N Numbers<br>
                Enter the value of N : 3<br>
                Enter a number : 4<br>
                Enter a number : 5<br>
                Enter a number : 7<br>
                Sum of N Numbers is : 16</p>
            </div>
        </div>
    </div>
</body>
</html>