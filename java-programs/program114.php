<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 114</title>
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
            <h1>Write a Java program to enter the numbers till the user wants and at the end it should display the count of positive, negative and zeros</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                public class NumberCounter{<br>
                    <span>public static void main(String[] args) {</span><br>
                        <span><span>Scanner scanner = new Scanner(System.in);</span></span><br>
                        <span><span>int positiveCount = 0;</span></span><br>
                        <span><span>int negativeCount = 0;</span></span><br>
                        <span><span>int zeroCount = 0;</span></span><br>
                        <span><span>boolean continueInput = true;</span></span><br>
                        <span><span>do {</span></span><br>
                            <span><span><span>System.out.print("Enter a number (enter 0 to stop): ");</span></span></span><br>
                            <span><span><span>int number = scanner.nextInt();</span></span></span><br>
                            <span><span><span>if (number > 0) {</span></span></span><br>
                                <span><span><span><span>positiveCount++;</span></span></span></span><br>
                            <span><span><span>} else if (number < 0) {</span></span></span><br>
                                <span><span><span><span>negativeCount++;</span></span></span></span><br>
                            <span><span><span>} else {</span></span></span><br>
                                <span><span><span><span>zeroCount++;</span></span></span></span><br>
                            <span><span><span>}</span></span></span><br>
                            <span><span><span>System.out.print("Do you want to enter another number? (yes/no): ");</span></span></span><br>
                            <span><span><span>String userInput = scanner.next();</span></span></span><br>
                            <span><span><span>if (userInput.equalsIgnoreCase("no")) {</span></span></span><br>
                                <span><span><span><span>continueInput = false;</span></span></span></span><br>
                            <span><span><span>}</span></span></span><br>
                        <span><span>} while (continueInput);</span></span><br>
                        <span><span>System.out.println("Positive numbers: " + positiveCount);</span></span><br>
                        <span><span>System.out.println("Negative numbers: " + negativeCount);</span></span><br>
                        <span><span>System.out.println("Zeroes: " + zeroCount);</span></span><br>
                    <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Enter a number (enter 0 to stop): 56<br>
                Do you want to enter another number? (yes/no): yes<br>
                Enter a number (enter 0 to stop): 87<br>
                Do you want to enter another number? (yes/no): yes<br>
                Enter a number (enter 0 to stop): 23<br>
                Do you want to enter another number? (yes/no): yes<br>
                Enter a number (enter 0 to stop): -10<br>
                Do you want to enter another number? (yes/no): no<br>
                Positive numbers: 3<br>
                Negative numbers: 1<br>
                Zeroes: 0</p>
            </div>
        </div>
    </div>
</body>
</html>