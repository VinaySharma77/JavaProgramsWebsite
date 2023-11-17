<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 144</title>
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
            <h1>Program to determine whether two matrices are equal</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                public class MatrixEquality{<br>
                    <span>public static void main(String[] args) {</span><br>
                        <span><span>Scanner scanner = new Scanner(System.in);</span></span><br>
                        <span><span>System.out.print("Enter the number of rows for matrices: ");</span></span><br>
                        <span><span>int rows = scanner.nextInt();</span></span><br>
                        <span><span>System.out.print("Enter the number of columns for matrices: ");</span></span><br>
                        <span><span>int cols = scanner.nextInt();</span></span><br>
                        <span><span>int[][] matrix1 = new int[rows][cols];</span></span><br>
                        <span><span>int[][] matrix2 = new int[rows][cols];</span></span><br>
                        <span><span>System.out.println("Enter elements for the first matrix:");</span></span><br>
                        <span><span>inputMatrix(matrix1, scanner);</span></span><br>
                        <span><span>System.out.println("Enter elements for the second matrix:");</span></span><br>
                        <span><span>inputMatrix(matrix2, scanner);</span></span><br>
                        <span><span>if (areMatricesEqual(matrix1, matrix2)) {</span></span><br>
                            <span><span><span>System.out.println("Matrices are equal.");</span></span></span><br>
                        <span><span>} else {</span></span><br>
                            <span><span><span>System.out.println("Matrices are not equal.");</span></span></span><br>
                        <span><span>}</span></span><br>
                    <span>}</span><br>
                    <span>private static void inputMatrix(int[][] matrix, Scanner scanner) {</span><br>
                        <span><span>for (int i = 0; i < matrix.length; i++) {</span></span><br>
                            <span><span><span>for (int j = 0; j < matrix[0].length; j++) {</span></span></span><br>
                                <span><span><span><span>System.out.print("Enter element at position (" + (i + 1) + "," + (j + 1) + "): ");</span></span></span></span><br>
                                <span><span><span><span>matrix[i][j] = scanner.nextInt();</span></span></span></span><br>
                            <span><span><span>}</span></span></span><br>
                        <span><span>}</span></span><br>
                    <span>}</span><br>
                    <span>private static boolean areMatricesEqual(int[][] matrix1, int[][] matrix2) {</span><br>
                        <span><span>for (int i = 0; i < matrix1.length; i++) {</span></span><br>
                            <span><span><span>for (int j = 0; j < matrix1[0].length; j++) {</span></span></span><br>
                                <span><span><span><span>if (matrix1[i][j] != matrix2[i][j]) {</span></span></span></span><br>
                                    <span><span><span><span><span>return false;</span></span></span></span></span><br>
                                <span><span><span><span>}</span></span></span></span><br>
                            <span><span><span>}</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>return true;</span></span><br>
                    <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Enter the number of rows for matrices: 2<br>
                Enter the number of columns for matrices: 2<br>
                Enter elements for the first matrix:<br>
                Enter element at position (1,1): 14<br>
                Enter element at position (1,2): 25<br>
                Enter element at position (2,1): 36<br>
                Enter element at position (2,2): 47<br>
                Enter elements for the second matrix:<br>
                Enter element at position (1,1): 58<br>
                Enter element at position (1,2): 69<br>
                Enter element at position (2,1): 74<br>
                Enter element at position (2,2): 85<br>
                Matrices are not equal.</p>
            </div>
        </div>
    </div>
</body>
</html>