<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 141</title>
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
            <h1>Program to Add Two Matrices</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                public class MatrixAddition2{<br>
                    <span>public static void main(String[] args) {</span><br>
                        <span><span>Scanner scanner = new Scanner(System.in);</span></span><br>
                        <span><span>System.out.print("Enter the number of rows: ");</span></span><br>
                        <span><span>int m = scanner.nextInt();</span></span><br>
                        <span><span>System.out.print("Enter the number of columns: ");</span></span><br>
                        <span><span>int n = scanner.nextInt();</span></span><br>
                        <span><span>System.out.println("Enter the elements of the first matrix:");</span></span><br>
                        <span><span>int[][] matrix1 = new int[m][n];</span></span><br>
                        <span><span>for (int i = 0; i < m; i++) {</span></span><br>
                            <span><span><span>for (int j = 0; j < n; j++) {</span></span></span><br>
                                <span><span><span><span>System.out.print("Enter element at position (" + (i + 1) + ", " + (j + 1) + "): ");</span></span></span></span><br>
                                <span><span><span><span>matrix1[i][j] = scanner.nextInt();</span></span></span></span><br>
                            <span><span><span>}</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>System.out.println("Enter the elements of the second matrix:");</span></span><br>
                        <span><span>int[][] matrix2 = new int[m][n];</span></span><br>
                        <span><span>for (int i = 0; i < m; i++) {</span></span><br>
                            <span><span><span>for (int j = 0; j < n; j++) {</span></span></span><br>
                                <span><span><span><span>System.out.print("Enter element at position (" + (i + 1) + ", " + (j + 1) + "): ");</span></span></span></span><br>
                                <span><span><span><span>matrix2[i][j] = scanner.nextInt();</span></span></span></span><br>
                            <span><span><span>}</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>int[][] result = new int[m][n];</span></span><br>
                        <span><span>for (int i = 0; i < m; i++) {</span></span><br>
                            <span><span><span>for (int j = 0; j < n; j++) {</span></span></span><br>
                                <span><span><span><span>result[i][j] = matrix1[i][j] + matrix2[i][j];</span></span></span></span><br>
                            <span><span><span>}</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>System.out.println("The result matrix is:");</span></span><br>
                        <span><span>for (int i = 0; i < m; i++) {</span></span><br>
                            <span><span><span>for (int j = 0; j < n; j++) {</span></span></span><br>
                                <span><span><span><span>System.out.print(result[i][j] + " ");</span></span></span></span><br>
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
                Enter the elements of the first matrix:<br>
                Enter element at position (1, 1): 12<br>
                Enter element at position (1, 2): 35<br>
                Enter element at position (2, 1): 36<br>
                Enter element at position (2, 2): 45<br>
                Enter the elements of the second matrix:<br>
                Enter element at position (1, 1): 14<br>
                Enter element at position (1, 2): 25<br>
                Enter element at position (2, 1): 36<br>
                Enter element at position (2, 2): 25<br>
                The result matrix is:<br>
                26 60<br>
                72 70</p>
            </div>
        </div>
    </div>
</body>
</html>