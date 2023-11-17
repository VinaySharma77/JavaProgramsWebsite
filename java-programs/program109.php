<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 109</title>
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
            <h1>Write a Java program to find the factorial value of any number entered through the keyboard</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                public class Factorial2{<br>
                    <span>public static void main(String[] args) {</span><br>
                        <span><span>Scanner scanner = new Scanner(System.in);</span></span><br>
                        <span><span>System.out.print("Enter a number to calculate its factorial: ");</span></span><br>
                        <span><span>int number = scanner.nextInt();</span></span><br>
                        <span><span>long factorial = calculateFactorial(number);</span></span><br>
                        <span><span>System.out.println("Factorial of " + number + " = " + factorial);</span></span><br>
                    <span>}</span><br>
                    <span>private static long calculateFactorial(int n) {</span><br>
                        <span><span>if (n < 0) {</span></span><br>
                            <span><span><span>throw new IllegalArgumentException("Factorial is not defined for negative numbers");</span></span></span><br>
                        <span><span>} else if (n == 0 || n == 1) {</span></span><br>
                            <span><span><span>return 1;</span></span></span><br>
                        <span><span>} else {</span></span><br>
                            <span><span><span>long result = 1;</span></span></span><br>
                            <span><span><span>for (int i = 2; i <= n; i++) {</span></span></span><br>
                                <span><span><span><span>result *= i;</span></span></span></span><br>
                            <span><span><span>}</span></span></span><br>
                            <span><span><span>return result;</span></span></span><br>
                        <span><span>}</span></span><br>
                    <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Enter a number to calculate its factorial: 5<br>
                Factorial of 5 = 120</p>
            </div>
        </div>
    </div>
</body>
</html>