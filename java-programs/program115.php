<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 115</title>
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
            <h1>Write a Java program to enter the numbers till the user wants and at the end the program should display the largest and smallest numbers entered</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                public class MinMaxNumber{<br>
                    <span>public static void main(String[] args) {</span><br>
                        <span><span>Scanner scanner = new Scanner(System.in);</span></span><br>
                        <span><span>int number;</span></span><br>
                        <span><span>int smallest = Integer.MAX_VALUE;</span></span><br>
                        <span><span>int largest = Integer.MIN_VALUE;</span></span><br>
                        <span><span>char choice;</span></span><br>
                        <span><span>do {</span></span><br>
                            <span><span><span>System.out.print("Enter a number: ");</span></span></span><br>
                            <span><span><span>number = scanner.nextInt();</span></span></span><br>
                            <span><span><span>if (number < smallest) {</span></span></span><br>
                                <span><span><span><span>smallest = number;</span></span></span></span><br>
                            <span><span><span>}</span></span></span><br>
                            <span><span><span>if (number > largest) {</span></span></span><br>
                                <span><span><span><span>largest = number;</span></span></span></span><br>
                            <span><span><span>}</span></span></span><br>
                            <span><span><span>System.out.print("Do you want to enter another number? (y/n): ");</span></span></span><br>
                            <span><span><span>choice = scanner.next().charAt(0);</span></span></span><br>
                        <span><span>} while (choice == 'y' || choice == 'Y');</span></span><br>
                        <span><span>System.out.println("Smallest number entered: " + smallest);</span></span><br>
                        <span><span>System.out.println("Largest number entered: " + largest);</span></span><br>
                    <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Enter a number: 56<br>
                Do you want to enter another number? (y/n): y<br>
                Enter a number: 36<br>
                Do you want to enter another number? (y/n): y<br>
                Enter a number: 78<br>
                Do you want to enter another number? (y/n): y<br>
                Enter a number: 25<br>
                Do you want to enter another number? (y/n): n<br>
                Smallest number entered: 25<br>
                Largest number entered: 78</p>
            </div>
        </div>
    </div>
</body>
</html>