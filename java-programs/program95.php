<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 95</title>
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
            <h1>Write a Java program to find the number of even and odd integers in a given array of integers</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                public class ArrayEvenOddElements{<br>
                    <span>public static void main(String[] args) {</span><br>
                        <span><span>Scanner scanner = new Scanner(System.in);</span></span><br>
                        <span><span>System.out.print("Enter the size of the array: ");</span></span><br>
                        <span><span>int size = scanner.nextInt();</span></span><br>
                        <span><span>int[] arr = new int[size];</span></span><br>
                        <span><span>System.out.println("Enter the array elements:");</span></span><br>
                        <span><span>for (int i = 0; i < size; i++) {</span></span><br>
                            <span><span><span>System.out.print("Element " + (i + 1) + ": ");</span></span></span><br>
                            <span><span><span>arr[i] = scanner.nextInt();</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>int evenCount = 0;</span></span><br>
                        <span><span>int oddCount = 0;</span></span><br>
                        <span><span>for (int num : arr) {</span></span><br>
                            <span><span><span>if (num % 2 == 0) {</span></span></span><br>
                                <span><span><span><span>evenCount++;</span></span></span></span><br>
                            <span><span><span>} else {</span></span></span><br>
                                <span><span><span><span>oddCount++;</span></span></span></span><br>
                            <span><span><span>}</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>System.out.println("Number of even integers: " + evenCount);</span></span><br>
                        <span><span>System.out.println("Number of odd integers: " + oddCount);</span></span><br>
                    <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Enter the size of the array: 5<br>
                Enter the array elements:<br>
                Element 1: 36<br>
                Element 2: 45<br>
                Element 3: 18<br>
                Element 4: 75<br>
                Element 5: 24<br>
                Number of even integers: 3<br>
                Number of odd integers: 2</p>
            </div>
        </div>
    </div>
</body>
</html>