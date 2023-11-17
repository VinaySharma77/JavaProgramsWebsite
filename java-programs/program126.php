<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 126</title>
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
            <h1>Write a Java method to calculate the area of a triangle</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                public class TriangleArea2{<br>
                    <span>public static void main(String[] args) {</span><br>
                        <span><span>Scanner scanner = new Scanner(System.in);</span></span><br>
                        <span><span>System.out.println("Enter the base length of the triangle:");</span></span><br>
                        <span><span>double base = scanner.nextDouble();</span></span><br>
                        <span><span>System.out.println("Enter the height of the triangle:");</span></span><br>
                        <span><span>double height = scanner.nextDouble();</span></span><br>
                        <span><span>double area = calculateTriangleArea(base, height);</span></span><br>
                        <span><span>System.out.println("The area of the triangle is: " + area);</span></span><br>
                    <span>}</span><br>
                    <span>public static double calculateTriangleArea(double base, double height) {</span><br>
                        <span><span>return 0.5 * base * height;</span></span><br>
                    <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Enter the base length of the triangle:25<br>
                Enter the height of the triangle:30<br>
                The area of the triangle is: 375.0</p>
            </div>
        </div>
    </div>
</body>
</html>