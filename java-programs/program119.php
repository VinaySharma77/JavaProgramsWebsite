<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 119</title>
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
            <h1>Write a java program to calculate the sum of following series where n is input by user</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                public class SeriesSum{<br>
                    <span>public static void main(String[] args) {</span><br>
                        <span><span>Scanner scanner = new Scanner(System.in);</span></span><br>
                        <span><span>System.out.print("Enter the number of terms (n): ");</span></span><br>
                        <span><span>int n = scanner.nextInt();</span></span><br>
                        <span><span>System.out.print("Enter the first term (a): ");</span></span><br>
                        <span><span>int a = scanner.nextInt();</span></span><br>
                        <span><span>System.out.print("Enter the common difference (d): ");</span></span><br>
                        <span><span>int d = scanner.nextInt();</span></span><br>
                        <span><span>int seriesSum = calculateSeriesSum(n, a, d);</span></span><br>
                        <span><span>System.out.println("The sum of the series is: " + seriesSum);</span></span><br>
                    <span>}</span><br>
                    <span>private static int calculateSeriesSum(int n, int a, int d) {</span><br>
                        <span><span>return (n / 2) * (2 * a + (n - 1) * d);</span></span><br>
                    <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Enter the number of terms (n): 5<br>
                Enter the first term (a): 10<br>
                Enter the common difference (d): 5<br>
                The sum of the series is: 80</p>
            </div>
        </div>
    </div>
</body>
</html>