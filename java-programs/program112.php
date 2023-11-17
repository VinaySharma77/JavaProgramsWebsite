<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 112</title>
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
            <h1>Write a Java program to check whether the number is a prime number or not</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                public class CheckPrimeNumber{<br>
                    <span>public static void main(String[] args) {</span><br>
                        <span><span>Scanner scanner = new Scanner(System.in);</span></span><br>
                        <span><span>System.out.print("Enter a number: ");</span></span><br>
                        <span><span>int number = scanner.nextInt();</span></span><br>
                        <span><span>if (isPrime(number)) {</span></span><br>
                            <span><span><span>System.out.println(number + " is a prime number.");</span></span></span><br>
                        <span><span>} else {</span></span><br>
                            <span><span><span>System.out.println(number + " is not a prime number.");</span></span></span><br>
                        <span><span>}</span></span><br>
                    <span>}</span><br>
                    <span>public static boolean isPrime(int num) {</span><br>
                        <span><span>if (num <= 1) {</span></span><br>
                            <span><span><span>return false;</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>for (int i = 2; i <= Math.sqrt(num); i++) {</span></span><br>
                            <span><span><span>if (num % i == 0) {</span></span></span><br>
                                <span><span><span><span>return false;</span></span></span></span><br>
                            <span><span><span>}</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>return true;</span></span><br>
                    <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Enter a number: 56<br>
                56 is not a prime number.</p>
            </div>
        </div>
    </div>
</body>
</html>