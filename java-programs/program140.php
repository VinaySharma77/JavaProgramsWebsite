<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 140</title>
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
            <h1>Enter the Matrix of rows and columns entered by the user and print in matrix format</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                public class MatrixInput{<br>
                    <span>public static void main(String[] args) {</span><br>
                        <span><span>Scanner scanner = new Scanner(System.in);</span></span><br>
                        <span><span>System.out.print("Enter the number of rows: ");</span></span><br>
                        <span><span>int rows = scanner.nextInt();</span></span><br>
                        <span><span>System.out.print("Enter the number of columns: ");</span></span><br>
                        <span><span>int columns = scanner.nextInt();</span></span><br>
                        <span><span>int[][] matrix = new int[rows][columns];</span></span><br>
                        <span><span>for (int i = 0; i < rows; i++) {</span></span><br>
                            <span><span><span>for (int j = 0; j < columns; j++) {</span></span></span><br>
                                <span><span><span><span>System.out.print("Enter element for row " + (i + 1) + ", column " + (j + 1) + ": ");</span></span></span></span><br>
                                <span><span><span><span>matrix[i][j] = scanner.nextInt();</span></span></span></span><br>
                            <span><span><span>}</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>System.out.println("Matrix:");</span></span><br>
                        <span><span>for (int i = 0; i < rows; i++) {</span></span><br>
                            <span><span><span>for (int j = 0; j < columns; j++) {</span></span></span><br>
                                <span><span><span><span>System.out.print(matrix[i][j] + " ");</span></span></span></span><br>
                            <span><span><span>}</span></span></span><br>
                            <span><span><span>System.out.println();</span></span></span><br>
                        <span><span>}</span></span><br>
                    <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Enter the number of rows: 2<br>
                Enter the number of columns: 2<br>
                Enter element for row 1, column 1: 35<br>
                Enter element for row 1, column 2: 26<br>
                Enter element for row 2, column 1: 77<br>
                Enter element for row 2, column 2: 98<br>
                Matrix:<br>
                35 26<br>
                77 98</p>
            </div>
        </div>
    </div>
</body>
</html>