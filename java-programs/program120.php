<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 120</title>
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
            <h1>Write a Java method to compute the average of three numbers</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                public class ThreeNumbersAverage{<br>
                    <span>public static void main(String[] args) {</span><br>
                        <span><span>Scanner scanner = new Scanner(System.in);</span></span><br>
                        <span><span>System.out.print("Enter the first number: ");</span></span><br>
                        <span><span>double num1 = scanner.nextDouble();</span></span><br>
                        <span><span>System.out.print("Enter the second number: ");</span></span><br>
                        <span><span>double num2 = scanner.nextDouble();</span></span><br>
                        <span><span>System.out.print("Enter the third number: ");</span></span><br>
                        <span><span>double num3 = scanner.nextDouble();</span></span><br>
                        <span><span>double average = calculateAverage(num1, num2, num3);</span></span><br>
                        <span><span>System.out.println("The average is: " + average);</span></span><br>
                    <span>}</span><br>
                    <span>public static double calculateAverage(double num1, double num2, double num3) {</span><br>
                        <span><span>return (num1 + num2 + num3) / 3;</span></span><br>
                    <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Enter the first number: 5<br>
                Enter the second number: 6<br>
                Enter the third number: 7<br>
                The average is: 6.0</p>
            </div>
        </div>
    </div>
</body>
</html>