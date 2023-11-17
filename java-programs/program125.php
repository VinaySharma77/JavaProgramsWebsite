<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 125</title>
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
            <h1>Write a Java method to check whether an year entered by the user is a leap year or not</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                public class LeapYear2{<br>
                    <span>public static void main(String[] args) {</span><br>
                        <span><span>Scanner scanner = new Scanner(System.in);</span></span><br>
                        <span><span>System.out.print("Enter a year: ");</span></span><br>
                        <span><span>int year = scanner.nextInt();</span></span><br>
                        <span><span>if (isLeapYear(year)) {</span></span><br>
                            <span><span><span>System.out.println(year + " is a leap year.");</span></span></span><br>
                        <span><span>} else {</span></span><br>
                            <span><span><span>System.out.println(year + " is not a leap year.");</span></span></span><br>
                        <span><span>}</span></span><br>
                    <span>}</span><br>
                    <span>private static boolean isLeapYear(int year) {</span><br>
                        <span><span>return (year % 4 == 0 && year % 100 != 0) || (year % 400 == 0);</span></span><br>
                    <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Enter a year: 2024<br>
                2024 is a leap year.</p>
            </div>
        </div>
    </div>
</body>
</html>