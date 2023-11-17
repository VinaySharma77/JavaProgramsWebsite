<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 107</title>
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
            <h1>Write a java program to calculate the sum of first 10 natural number using loop</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>public class SumOfNaturalNumbers{<br>
                    <span>public static void main(String[] args) {</span><br>
                        <span><span>int n = 10;</span></span><br>
                        <span><span>int sum = 0;</span></span><br>
                        <span><span>for (int i = 1; i <= n; i++) {</span></span><br>
                            <span><span><span>sum += i;</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>System.out.println("Sum of the first " + n + " natural numbers is: " + sum);</span></span><br>
                    <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Sum of the first 10 natural numbers is: 55</p>
            </div>
        </div>
    </div>
</body>
</html>