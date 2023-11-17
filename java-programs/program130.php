<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 130</title>
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
            <h1> Write a Java method to displays prime numbers between 1 to 20</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>public class PrimeNumbers{<br>
                    <span>public static void main(String[] args) {</span><br>
                        <span><span>displayPrimeNumbers(1, 20);</span></span><br>
                    <span>}</span><br>
                    <span>public static void displayPrimeNumbers(int start, int end) {</span><br>
                        <span><span>System.out.println("Prime numbers between " + start + " and " + end + ":");</span></span><br>
                        <span><span>for (int i = start; i <= end; i++) {</span></span><br>
                            <span><span><span>if (isPrime(i)) {</span></span></span><br>
                                <span><span><span><span>System.out.print(i + " ");</span></span></span></span><br>
                            <span><span><span>}</span></span></span><br>
                        <span><span>}</span></span><br>
                    <span>}</span><br>
                    <span>public static boolean isPrime(int number) {</span><br>
                        <span><span>if (number <= 1) {</span></span><br>
                            <span><span><span>return false;</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>for (int i = 2; i <= Math.sqrt(number); i++) {</span></span><br>
                            <span><span><span>if (number % i == 0) {</span></span></span><br>
                                <span><span><span><span>return false;</span></span></span></span><br>
                            <span><span><span>}</span></span></span><br>
                        <span><span>}</span></span> <br>
                        <span><span>return true;</span></span><br>
                    <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Prime numbers between 1 and 20:<br>
                2 3 5 7 11 13 17 19</p>
            </div>
        </div>
    </div>
</body>
</html>