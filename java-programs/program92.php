<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 92</title>
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
            <h1>Write a Java program to add two matrices of the same size</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                public class MatrixAddition{<br>
                    <span>public static void main(String[] args) {</span><br>
                        <span><span>Scanner scanner = new Scanner(System.in);</span></span><br>
                        <span><span>System.out.print("Enter the number of rows: ");</span></span><br>
                        <span><span>int rows = scanner.nextInt();</span></span><br>
                        <span><span>System.out.print("Enter the number of columns: ");</span></span><br>
                        <span><span>int columns = scanner.nextInt();</span></span><br>
                        <span><span>System.out.println("Enter elements of the first matrix:");</span></span><br>
                        <span><span>int[][] matrix1 = inputMatrix(scanner, rows, columns);</span></span><br>
                        <span><span>System.out.println("Enter elements of the second matrix:");</span></span><br>
                        <span><span>int[][] matrix2 = inputMatrix(scanner, rows, columns);</span></span><br>
                        <span><span>int[][] sumMatrix = addMatrices(matrix1, matrix2);</span></span><br>
                        <span><span>System.out.println("Sum of the matrices:");</span></span><br>
                        <span><span>displayMatrix(sumMatrix);</span></span><br>
                    <span>}</span><br>
                    <span>private static int[][] inputMatrix(Scanner scanner, int rows, int columns) {</span><br>
                        <span><span>int[][] matrix = new int[rows][columns];</span></span><br>
                        <span><span>for (int i = 0; i < rows; i++) {</span></span><br>
                            <span><span><span>for (int j = 0; j < columns; j++) {</span></span></span><br>
                                <span><span><span><span>System.out.print("Enter element at position (" + (i + 1) + ", " + (j + 1) + "): ");</span></span></span></span><br>
                                <span><span><span><span>matrix[i][j] = scanner.nextInt();</span></span></span></span><br>
                            <span><span><span>}</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>return matrix;</span></span><br>
                    <span>}</span><br>
                    <span>private static int[][] addMatrices(int[][] matrix1, int[][] matrix2) {</span><br>
                        <span><span>int rows = matrix1.length;</span></span><br>
                        <span><span>int columns = matrix1[0].length;</span></span><br>
                        <span><span>int[][] sumMatrix = new int[rows][columns];</span></span><br>
                        <span><span>for (int i = 0; i < rows; i++) {</span></span><br>
                            <span><span><span>for (int j = 0; j < columns; j++) {</span></span></span><br>
                                <span><span><span><span>sumMatrix[i][j] = matrix1[i][j] + matrix2[i][j];</span></span></span></span><br>
                            <span><span><span>}</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>return sumMatrix;</span></span><br>
                    <span>}</span><br>
                    <span>private static void displayMatrix(int[][] matrix) {</span><br>
                        <span><span>for (int[] row : matrix) {</span></span><br>
                            <span><span><span>for (int value : row) {</span></span></span><br>
                                <span><span><span><span>System.out.print(value + " ");</span></span></span></span><br>
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
                Enter elements of the first matrix:<br>
                Enter element at position (1, 1): 78<br>
                Enter element at position (1, 2): 96<br>
                Enter element at position (2, 1): 84<br>
                Enter element at position (2, 2): 75<br>
                Enter elements of the second matrix:<br>
                Enter element at position (1, 1): 65<br>
                Enter element at position (1, 2): 47<br>
                Enter element at position (2, 1): 12<br>
                Enter element at position (2, 2): 35<br>
                Sum of the matrices:<br>
                143 143<br>
                96 110</p>
            </div>
        </div>
    </div>
</body>
</html>