<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 145</title>
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
            <h1>Program to display the lower triangular matrix</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                public class TriangularMatrix{<br>
                    <span>public static void main(String[] args) {</span><br>
                        <span><span>Scanner scanner = new Scanner(System.in);</span></span><br>
                        <span><span>System.out.print("Enter the number of rows (square matrix): ");</span></span><br>
                        <span><span>int n = scanner.nextInt();</span></span><br>
                        <span><span>int[][] matrix = new int[n][n];</span></span><br>
                        <span><span>System.out.println("Enter the matrix elements:");</span></span><br>
                        <span><span>for (int i = 0; i < n; i++) {</span></span><br>
                            <span><span><span>for (int j = 0; j < n; j++) {</span></span></span><br>
                                <span><span><span><span>matrix[i][j] = scanner.nextInt();</span></span></span></span><br>
                            <span><span><span>}</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>System.out.println("Lower Triangular Matrix:");</span></span><br>
                        <span><span>for (int i = 0; i < n; i++) {</span></span><br>
                            <span><span><span>for (int j = 0; j < n; j++) {</span></span></span><br>
                                <span><span><span><span>System.out.print((i >= j) ? matrix[i][j] + " " : "0 ");</span></span></span></span><br>
                            <span><span><span>}</span></span></span><br>
                            <span><span><span>System.out.println();</span></span></span><br>
                        <span><span>}</span></span><br>
                    <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Enter the number of rows (square matrix): 5<br>
                Enter the matrix elements:<br>
                56<br>
                78<br>
                48<br>
                15<br>
                25<br>
                95<br>
                35<br>
                68<br>
                78<br>
                14<br>
                25<br>
                10<br>
                15<br>
                26<br>
                48<br>
                95<br>
                68<br>
                35<br>
                67<br>
                58<br>
                25<br>
                20<br>
                30<br>
                50<br>
                60<br>
                Lower Triangular Matrix:<br>
                56 0 0 0 0<br>
                95 35 0 0 0<br>
                25 10 15 0 0<br>
                95 68 35 67 0<br>
                25 20 30 50 60</p>
            </div>
        </div>
    </div>
</body>
</html>