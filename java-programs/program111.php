<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 111</title>
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
            <h1>Write a Java program that reads a set of integers, and then prints the sum of the even and odd integers using loop</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                public class SumOfEvenOddElements{<br>
                    <span>public static void main(String[] args) {</span><br>
                        <span><span>Scanner scanner = new Scanner(System.in);</span></span><br>
                        <span><span>System.out.print("Enter the number of elements in the set: ");</span></span><br>
                        <span><span>int n = scanner.nextInt();</span></span><br>
                        <span><span>int[] numbers = new int[n];</span></span><br>
                        <span><span>System.out.println("Enter the integers in the set:");</span></span><br>
                        <span><span>for (int i = 0; i < n; i++) {</span></span><br>
                            <span><span><span>numbers[i] = scanner.nextInt();</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>int sumEven = 0;</span></span><br>
                        <span><span>int sumOdd = 0;</span></span><br>
                        <span><span>for (int number : numbers) {</span></span><br>
                            <span><span><span>if (number % 2 == 0) {</span></span></span><br>
                                <span><span><span><span>sumEven += number;</span></span></span></span><br>
                            <span><span><span>} else {</span></span></span><br>
                                <span><span><span><span>sumOdd += number;</span></span></span></span><br>
                            <span><span><span>}</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>System.out.println("Sum of even numbers: " + sumEven);</span></span><br>
                        <span><span>System.out.println("Sum of odd numbers: " + sumOdd);</span></span><br>
                    <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Enter the number of elements in the set: 5<br>
                Enter the integers in the set:<br>
                65<br>
                35<br>
                24<br>
                11<br>
                20<br>
                Sum of even numbers: 44<br>
                Sum of odd numbers: 111</p>
            </div>
        </div>
    </div>
</body>
</html>