<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 108</title>
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
            <h1>Write a Java program to print multiplication table of given number</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                public class MultiplicationTable2{<br>
                    <span>public static void main(String[] args) {</span><br>
                        <span><span>Scanner scanner = new Scanner(System.in);</span></span><br>
                        <span><span>System.out.print("Enter the number for multiplication table: ");</span></span><br>
                        <span><span>int number = scanner.nextInt();</span></span><br>
                        <span><span>System.out.println("Multiplication Table for " + number + ":");</span></span><br>
                        <span><span>for (int i = 1; i <= 10; i++) {</span></span><br>
                            <span><span><span>System.out.println(number + " * " + i + " = " + (number * i));</span></span></span><br>
                        <span><span>}</span></span><br>
                    <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Enter the number for multiplication table: 6<br>
                Multiplication Table for 6:<br>
                6 * 1 = 6<br>
                6 * 2 = 12<br>
                6 * 3 = 18<br>
                6 * 4 = 24<br>
                6 * 5 = 30<br>
                6 * 6 = 36<br>
                6 * 7 = 42<br>
                6 * 8 = 48<br>
                6 * 9 = 54<br>
                6 * 10 = 60</p>
            </div>
        </div>
    </div>
</body>
</html>