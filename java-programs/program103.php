<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 103</title>
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
            <h1>Write a Java Program to Display Transpose Matrix</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                public class TransposeMatrix{<br>
                    <span>public static void main(String[] args) {</span><br>
                        <span><span>Scanner scanner = new Scanner(System.in);</span></span><br>
                        <span><span>System.out.print("Enter the number of rows: ");</span></span><br>
                        <span><span>int rows = scanner.nextInt();</span></span><br>
                        <span><span>System.out.print("Enter the number of columns: ");</span></span><br>
                        <span><span>int columns = scanner.nextInt();</span></span><br>
                        <span><span>int[][] matrix = new int[rows][columns];</span></span><br>
                        <span><span>System.out.println("Enter the matrix elements:");</span></span><br>
                        <span><span>for (int i = 0; i < rows; i++) {</span></span><br>
                            <span><span><span>for (int j = 0; j < columns; j++) /span></span></span><br>
                                <span><span><span><span>System.out.print("Enter element at position [" + (i + 1) + "][" + (j + 1) + "]: ");</span></span></span></span><br>
                                <span><span><span><span>matrix[i][j] = scanner.nextInt();</span></span></span></span><br>
                            <span><span><span>}</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>System.out.println("Original Matrix:");</span></span><br>
                        <span><span>displayMatrix(matrix);</span></span><br>
                        <span><span>int[][] transposeMatrix = transpose(matrix);</span></span><br>
                        <span><span>System.out.println("Transpose Matrix:");</span></span><br>
                        <span><span>displayMatrix(transposeMatrix);</span></span><br>
                    <span>}</span><br>
                    <span>private static int[][] transpose(int[][] matrix) {</span><br>
                        <span><span>int rows = matrix.length;</span></span><br>
                        <span><span>int columns = matrix[0].length;</span></span><br>
                        <span><span>int[][] transposeMatrix = new int[columns][rows];</span></span><br>
                        <span><span>for (int i = 0; i < rows; i++) {</span></span><br>
                            <span><span><span>for (int j = 0; j < columns; j++) /span></span></span><br>
                                <span><span><span><span>transposeMatrix[j][i] = matrix[i][j];</span></span></span></span><br>
                            <span><span><span>}</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>return transposeMatrix;</span></span><br>
                    <span>}</span><br>
                    <span>private static void displayMatrix(int[][] matrix) {</span><br>
                        <span><span>for (int[] row : matrix) {</span></span><br>
                            <span><span><span>for (int element : row) {</span></span></span><br>
                                <span><span><span><span>System.out.print(element + " ");</span></span></span></span><br>
                            <span><span><span>}</span></span></span><br>
                            <span><span><span>System.out.println();</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>System.out.println();</span></span><br>
                    <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Enter the number of rows: 2<br>
                Enter the number of columns: 2<br>
                Enter the matrix elements:<br>
                Enter element at position [1][1]: 35<br>
                Enter element at position [1][2]: 68<br>
                Enter element at position [2][1]: 45<br>
                Enter element at position [2][2]: 10<br>
                Original Matrix:<br>
                35 68<br>
                45 10<br>
                Transpose Matrix:<br>
                35 45<br>
                68 10</p>
            </div>
        </div>
    </div>
</body>
</html>