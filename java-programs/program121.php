<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 121</title>
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
            <h1>Write a Java method to find the smallest number among three numbers</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                public class SmallestNumber{<br>
                    <span>public static int findSmallestNumber(int num1, int num2, int num3) {</span><br>
                        <span><span>int smallest = num1;</span></span><br>
                        <span><span>if (num2 < smallest) {</span></span><br>
                            <span><span><span>smallest = num2;</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>if (num3 < smallest) {</span></span><br>
                            <span><span><span>smallest = num3;</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>return smallest;</span></span><br>
                    <span>}</span><br>
                    <span>public static void main(String[] args) {</span><br>
                        <span><span>Scanner scanner = new Scanner(System.in);</span></span><br>
                        <span><span>System.out.print("Enter the first number: ");</span></span><br>
                        <span><span>int number1 = scanner.nextInt();</span></span><br>
                        <span><span>System.out.print("Enter the second number: ");</span></span><br>
                        <span><span>int number2 = scanner.nextInt();</span></span><br>
                        <span><span>System.out.print("Enter the third number: ");</span></span><br>
                        <span><span>int number3 = scanner.nextInt();</span></span><br>
                        <span><span>int smallestNumber = findSmallestNumber(number1, number2, number3);</span></span><br>
                        <span><span>System.out.println("The smallest number is: " + smallestNumber);</span></span><br>
                    <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Enter the first number: 56<br>
                Enter the second number: 87<br>
                Enter the third number: 22<br>
                The smallest number is: 22</p>
            </div>
        </div>
    </div>
</body>
</html>