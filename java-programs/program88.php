<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 88</title>
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
            <h1>Write a Java program to reverse an array of integer values</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                public class ReverseArray{<br>
                    <span>public static void main(String[] args) {</span><br>
                        <span><span>Scanner scanner = new Scanner(System.in);</span></span><br>
                        <span><span>System.out.print("Enter the size of the array: ");</span></span><br>
                        <span><span>int size = scanner.nextInt();</span></span><br>
                        <span><span>int[] array = new int[size];</span></span><br>
                        <span><span>System.out.println("Enter the elements of the array:");</span></span><br>
                        <span><span>for (int i = 0; i < size; i++) {</span></span><br>
                            <span><span><span>array[i] = scanner.nextInt();</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>System.out.println("Original Array:");</span></span><br>
                        <span><span>displayArray(array);</span></span><br>
                        <span><span>reverseArray(array);</span></span><br>
                        <span><span>System.out.println("Reversed Array:");</span></span><br>
                        <span><span>displayArray(array);</span></span><br>
                    <span>}</span><br>
                    <span>private static void reverseArray(int[] arr) {</span><br>
                        <span><span>for (int start = 0, end = arr.length - 1; start < end; start++, end--) {</span></span><br>
                            <span><span><span>int temp = arr[start];</span></span></span><br>
                            <span><span><span>arr[start] = arr[end];</span></span></span><br>
                            <span><span><span>arr[end] = temp;</span></span></span><br>
                        <span><span>}</span></span><br>
                    <span>}</span><br>
                    <span>private static void displayArray(int[] arr) {</span><br>
                        <span><span>for (int element : arr) {</span></span><br>
                            System.out.print(element + " ");<br>
                        <span><span>}</span></span><br>
                        <span><span>System.out.println();</span></span><br>
                    <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Enter the size of the array: 5<br>
                Enter the elements of the array:<br>
                63<br>
                78<br>
                41<br>
                25<br>
                33<br>
                Original Array:<br>
                63 78 41 25 33<br>
                Reversed Array:<br>
                33 25 41 78 63</p>
            </div>
        </div>
    </div>
</body>
</html>