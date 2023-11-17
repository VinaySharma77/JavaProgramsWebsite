<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 131</title>
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
            <h1>Write a Java method to find GCD and LCM of Two Numbers</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                public class GCDandLCM{<br>
                    <span>public static void main(String[] args) {</span><br>
                        <span><span>Scanner scanner = new Scanner(System.in);</span></span><br>
                        <span><span>System.out.print("Enter the first number: ");</span></span><br>
                        <span><span>int num1 = scanner.nextInt();</span></span><br>
                        <span><span>System.out.print("Enter the second number: ");</span></span><br>
                        <span><span>int num2 = scanner.nextInt();</span></span><br>
                        <span><span>int gcd = findGCD(num1, num2);</span></span><br>
                        <span><span>int lcm = findLCM(num1, num2);</span></span><br>
                        <span><span>System.out.println("GCD of " + num1 + " and " + num2 + " is: " + gcd);</span></span><br>
                        <span><span>System.out.println("LCM of " + num1 + " and " + num2 + " is: " + lcm);</span></span><br>
                    <span>}</span><br>
                    <span>private static int findGCD(int a, int b) {</span><br>
                        <span><span>while (b != 0) {</span></span><br>
                            <span><span><span>int temp = b;</span></span></span><br>
                            <span><span><span>b = a % b;</span></span></span><br>
                            <span><span><span>a = temp;</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>return a;</span></span><br>
                    <span>}</span><br>
                    <span>private static int findLCM(int a, int b) {</span><br>
                        <span><span>return (a * b) / findGCD(a, b);</span></span><br>
                    <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Enter the first number: 52<br>
                Enter the second number: 88<br>
                GCD of 52 and 88 is: 4<br>
                LCM of 52 and 88 is: 1144</p>
            </div>
        </div>
    </div>
</body>
</html>