<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 116</title>
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
            <h1>Write a Java program to print out all Armstrong numbers between 1 to 600 using loop</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>public class ArmstrongNumbers{<br>
                    <span>public static void main(String[] args) {</span><br>
                        <span><span>for (int i = 1; i <= 600; i++) {</span></span><br>
                            <span><span><span>if (isArmstrongNumber(i)) {</span></span></span><br>
                                <span><span><span><span>System.out.println(i + " is an Armstrong number.");</span></span></span></span><br>
                            <span><span><span>}</span></span></span><br>
                        <span><span>}</span></span><br>
                    <span>}</span><br>
                    <span>private static boolean isArmstrongNumber(int number) {</span><br>
                        <span><span>int originalNumber = number;</span></span><br>
                        <span><span>int sum = 0;</span></span><br>
                        <span><span>int numDigits = countDigits(number);</span></span><br>
                        <span><span>while (number > 0) {</span></span><br>
                            <span><span><span>int digit = number % 10;</span></span></span><br>
                            <span><span><span>sum += Math.pow(digit, numDigits);</span></span></span><br>
                            <span><span><span>number /= 10;</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>return sum == originalNumber;</span></span><br>
                    <span>}</span><br>
                    <span>private static int countDigits(int number) {</span><br>
                        <span><span>int count = 0;</span></span><br>
                        <span><span>while (number > 0) {</span></span><br>
                            <span><span><span>count++;</span></span></span><br>
                            <span><span><span>number /= 10;</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>return count;</span></span><br>
                    <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>1 is an Armstrong number.<br>
                2 is an Armstrong number.<br>
                3 is an Armstrong number.<br>
                4 is an Armstrong number.<br>
                5 is an Armstrong number.<br>
                6 is an Armstrong number.<br>
                7 is an Armstrong number.<br>
                8 is an Armstrong number.<br>
                9 is an Armstrong number.<br>
                153 is an Armstrong number.<br>
                370 is an Armstrong number.<br>
                371 is an Armstrong number.<br>
                407 is an Armstrong number.</p>
            </div>
        </div>
    </div>
</body>
</html>