<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 134</title>
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
            <h1>Write a Java program to round a float number to specified decimals</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                public class RoundFloat{<br>
                    <span>public static void main(String[] args) {</span><br>
                        <span><span>Scanner scanner = new Scanner(System.in);</span></span><br>
                        <span><span>System.out.print("Enter a float number: ");</span></span><br>
                        <span><span>float number = scanner.nextFloat();</span></span><br>
                        <span><span>System.out.print("Enter the number of decimal places: ");</span></span><br>
                        <span><span>int decimalPlaces = scanner.nextInt();</span></span><br>
                        <span><span>float roundedNumber = roundToDecimalPlaces(number, decimalPlaces);</span></span><br>
                        <span><span>System.out.println("Rounded number: " + roundedNumber);</span></span><br>
                    <span>}</span><br>
                    <span>private static float roundToDecimalPlaces(float number, int decimalPlaces) {</span><br>
                        <span><span>float factor = (float) Math.pow(10, decimalPlaces);</span></span><br>
                        <span><span>return Math.round(number * factor) / factor;</span></span><br>
                    <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Enter a float number: 23.0000<br>
                Enter the number of decimal places: 4<br>
                Rounded number: 23.0</p>
            </div>
        </div>
    </div>
</body>
</html>