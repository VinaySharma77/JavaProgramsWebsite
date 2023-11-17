<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 128</title>
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
            <h1>Write a Java method to find number is even number or not</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                public class CheckEvenNumber{<br>
                    <span>public static void main(String[] args) {</span><br>
                        <span><span>Scanner scanner = new Scanner(System.in);</span></span><br>
                        <span><span>System.out.print("Enter a number: ");</span></span><br>
                        <span><span>int number = scanner.nextInt();</span></span><br>
                        <span><span>if (isEven(number)) {</span></span><br>
                            <span><span><span>System.out.println(number + " is an even number.");</span></span></span><br>
                        <span><span>} else {</span></span><br>
                            <span><span><span>System.out.println(number + " is an odd number.");</span></span></span><br>
                        <span><span>}</span></span><br>
                    <span>}</span><br>
                    <span>private static boolean isEven(int num) {</span><br>
                        <span><span>return num % 2 == 0;</span></span><br>
                    <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Enter a number: 55<br>
                55 is an odd number.</p>
            </div>
        </div>
    </div>
</body>
</html>