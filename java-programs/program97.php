<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 97</title>
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
            <h1>Write a Java program to segregate all 0s on left side and all 1s on right side of a given array of 0s and 1s</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                public class SegregateZerosAndOnes{<br>
                    <span>public static void main(String[] args) {</span><br>
                        <span><span>Scanner scanner = new Scanner(System.in);</span></span><br>
                        <span><span>System.out.print("Enter the size of the array: ");</span></span><br>
                        <span><span>int size = scanner.nextInt();</span></span><br>
                        <span><span>int[] array = new int[size];</span></span><br>
                        <span><span>System.out.println("Enter the elements (0 or 1) of the array:");</span></span><br>
                        <span><span>for (int i = 0; i < size; i++) {</span></span><br>
                            <span><span><span>array[i] = scanner.nextInt();</span></span></span><br>
                            <span><span><span>if (array[i] != 0 && array[i] != 1) {</span></span></span><br>
                                <span><span><span><span>System.out.println("Invalid input. Please enter 0 or 1.");</span></span></span></span><br>
                                <span><span><span><span>i--; // Decrement i to re-enter the current index</span></span></span></span><br>
                            <span><span><span>}</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>segregateZerosAndOnes(array);</span></span><br>
                        <span><span>System.out.println("Segregated Array:");</span></span><br>
                        <span><span>for (int value : array) {</span></span><br>
                            <span><span><span>System.out.print(value + " ");</span></span></span><br>
                        <span><span>}</span></span><br>
                    <span>}</span><br>
                    <span>private static void segregateZerosAndOnes(int[] array) {</span><br>
                        <span><span>int left = 0;</span></span><br>
                        <span><span>int right = array.length - 1;</span></span><br>
                        <span><span>while (left < right) {</span></span><br>
                            <span><span><span>while (array[left] == 0 && left < right) {</span></span></span><br>
                                <span><span><span><span>left++;</span></span></span></span><br>
                            <span><span><span>}</span></span></span><br>
                            <span><span><span>while (array[right] == 1 && left < right) {</span></span></span><br>
                                <span><span><span><span>right--;</span></span></span></span><br>
                            <span><span><span>}</span></span></span><br>
                            <span><span><span>if (left < right) {</span></span></span><br>
                                <span><span><span><span>int temp = array[left];</span></span></span></span><br>
                                <span><span><span><span>array[left] = array[right];</span></span></span></span><br>
                                <span><span><span><span>array[right] = temp;</span></span></span></span><br>
                                <span><span><span><span>left++;</span></span></span></span><br>
                                <span><span><span><span>right--;</span></span></span></span><br>
                            <span><span><span>}</span></span></span><br>
                        <span><span>}</span></span><br>
                    <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Enter the size of the array: 5<br>
                Enter the elements (0 or 1) of the array:<br>
                1<br>
                0<br>
                0<br>
                1<br>
                1<br>
                Segregated Array:<br>
                0 0 1 1 1</p>
            </div>
        </div>
    </div>
</body>
</html>