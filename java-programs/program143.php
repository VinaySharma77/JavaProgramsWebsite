<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 143</title>
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
            <h1>Program to subtract the two matrices</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                public class MatrixSubtraction{<br>
                    <span>public static void main(String[] args) {</span><br>
                        <span><span>Scanner scanner = new Scanner(System.in);</span></span><br>
                        <span><span>System.out.print("Enter the number of rows: ");</span></span><br>
                        <span><span>int rows = scanner.nextInt();</span></span><br>
                        <span><span>System.out.print("Enter the number of columns: ");</span></span><br>
                        <span><span>int columns = scanner.nextInt();</span></span><br>
                        <span><span>int[][] matrix1 = new int[rows][columns];</span></span><br>
                        <span><span>int[][] matrix2 = new int[rows][columns];</span></span><br>
                        <span><span>System.out.println("Enter the elements of the first matrix:");</span></span><br>
                        <span><span>for (int i = 0; i < rows; i++) {</span></span><br>
                            <span><span><span>for (int j = 0; j < columns; j++) {</span></span></span><br>
                                <span><span><span><span>matrix1[i][j] = scanner.nextInt();</span></span></span></span><br>
                            <span><span><span>}</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>System.out.println("Enter the elements of the second matrix:");</span></span><br>
                        <span><span>for (int i = 0; i < rows; i++) {</span></span><br>
                            <span><span><span>for (int j = 0; j < columns; j++) {</span></span></span><br>
                                <span><span><span><span>matrix2[i][j] = scanner.nextInt();</span></span></span></span><br>
                            <span><span><span>}</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>int[][] resultMatrix = new int[rows][columns];</span></span><br>
                        <span><span>for (int i = 0; i < rows; i++) {</span></span><br>
                            <span><span><span>for (int j = 0; j < columns; j++) {</span></span></span><br>
                                <span><span><span><span>resultMatrix[i][j] = matrix1[i][j] - matrix2[i][j];</span></span></span></span><br>
                            <span><span><span>}</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>System.out.println("Resultant Matrix after subtraction:");</span></span><br>
                        <span><span>for (int i = 0; i < rows; i++) {</span></span><br>
                            <span><span><span>for (int j = 0; j < columns; j++) {</span></span></span><br>
                                <span><span><span><span>System.out.print(resultMatrix[i][j] + " ");</span></span></span></span><br>
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
                12<br>
                35<br>
                26<br>
                34<br>
                Enter the elements of the second matrix:<br>
                78<br>
                98<br>
                55<br>
                69<br>
                Resultant Matrix after subtraction:<br>
                -66 -63<br>
                -29 -35</p>
            </div>
        </div>
    </div>
</body>
</html>