<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 142</title>
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
            <h1>Program to Multiply Two Matrices</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                public class MatrixMultiplication{<br>
                    <span>public static void main(String[] args) {</span><br>
                        <span><span>Scanner scanner = new Scanner(System.in);</span></span><br>
                        <span><span>System.out.print("Enter the number of rows for the first matrix: ");</span></span><br>
                        <span><span>int rowsA = scanner.nextInt();</span></span><br>
                        <span><span>System.out.print("Enter the number of columns for the first matrix: ");</span></span><br>
                        <span><span>int colsA = scanner.nextInt();</span></span><br>
                        <span><span>System.out.print("Enter the number of rows for the second matrix: ");</span></span><br>
                        <span><span>int rowsB = scanner.nextInt();</span></span><br>
                        <span><span>System.out.print("Enter the number of columns for the second matrix: ");</span></span><br>
                        <span><span>int colsB = scanner.nextInt();</span></span><br>
                        <span><span>if (colsA != rowsB) {</span></span><br>
                            <span><span><span>System.out.println("Matrices cannot be multiplied. Exiting program.");</span></span></span><br>
                            <span><span><span>System.exit(0);</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>int[][] matrixA = new int[rowsA][colsA];</span></span><br>
                        <span><span>int[][] matrixB = new int[rowsB][colsB];</span></span><br>
                        <span><span>int[][] resultMatrix = new int[rowsA][colsB];</span></span><br>
                        <span><span>System.out.println("Enter elements of the first matrix:");</span></span><br>
                        <span><span>for (int i = 0; i < rowsA; i++) {</span></span><br>
                            <span><span><span>for (int j = 0; j < colsA; j++) {</span></span></span><br>
                                <span><span><span><span>matrixA[i][j] = scanner.nextInt();</span></span></span></span><br>
                            <span><span><span>}</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>System.out.println("Enter elements of the second matrix:");</span></span><br>
                        <span><span>for (int i = 0; i < rowsB; i++) {</span></span><br>
                            <span><span><span>for (int j = 0; j < colsB; j++) {</span></span></span><br>
                                <span><span><span><span>matrixB[i][j] = scanner.nextInt();</span></span></span></span><br>
                            <span><span><span>}</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>for (int i = 0; i < rowsA; i++) {</span></span><br>
                            <span><span><span>for (int j = 0; j < colsB; j++) {</span></span></span><br>
                                <span><span><span><span>for (int k = 0; k < colsA; k++) {</span></span></span></span><br>
                                    <span><span><span><span><span>resultMatrix[i][j] += matrixA[i][k] * matrixB[k][j];</span></span></span></span></span><br>
                                <span><span><span><span>}</span></span></span></span><br>
                            <span><span><span>}</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>System.out.println("Resultant Matrix after multiplication:");</span></span><br>
                        <span><span>for (int i = 0; i < rowsA; i++) {</span></span><br>
                            <span><span><span>for (int j = 0; j < colsB; j++) {</span></span></span><br>
                                <span><span><span><span>System.out.print(resultMatrix[i][j] + " ");</span></span></span></span><br>
                            <span><span><span>}</span></span></span><br>
                            <span><span><span>System.out.println();</span></span></span><br>
                        <span><span>}</span></span><br>
                    <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Enter the number of rows for the first matrix: 2<br>
                Enter the number of columns for the first matrix: 2<br>
                Enter the number of rows for the second matrix: 2<br>
                Enter the number of columns for the second matrix: 2<br>
                Enter elements of the first matrix:<br>
                5<br>
                6<br>
                4<br>
                8<br>
                Enter elements of the second matrix:<br>
                2<br>
                3<br>
                4<br>
                5<br>
                Resultant Matrix after multiplication:<br>
                34 45<br>
                40 52</p>
            </div>
        </div>
    </div>
</body>
</html>