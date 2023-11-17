<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 104</title>
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
            <h1>Write a Java Program to Search Key Elements in an Array</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                public class ArraySearch{<br>
                    <span>public static void main(String[] args) {</span><br>
                        <span><span>Scanner scanner = new Scanner(System.in);</span></span><br>
                        <span><span>System.out.print("Enter the size of the array: ");</span></span><br>
                        <span><span>int size = scanner.nextInt();</span></span><br>
                        <span><span>int[] array = new int[size];</span></span><br>
                        <span><span>System.out.println("Enter the array elements:");</span></span><br>
                        <span><span>for (int i = 0; i < size; i++) {</span></span><br>
                            <span><span><span>array[i] = scanner.nextInt();</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>System.out.print("Enter the key element to search: ");</span></span><br>
                        <span><span>int key = scanner.nextInt();</span></span><br>
                        <span><span>boolean found = false;</span></span><br>
                        <span><span>for (int i = 0; i < size; i++) {</span></span><br>
                            <span><span><span>if (array[i] == key) {</span></span></span><br>
                                <span><span><span><span>found = true;</span></span></span></span><br>
                                <span><span><span><span>System.out.println("Key element found at index " + i);</span></span></span></span><br>
                                <span><span><span><span>break;</span></span></span></span><br>
                            <span><span><span>}</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>if (!found) {</span></span><br>
                            <span><span><span>System.out.println("Key element not found in the array.");</span></span></span><br>
                        <span><span>}</span></span><br>
                    <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Enter the size of the array: 5<br>
                Enter the array elements:<br>
                5<br>
                6<br>
                8<br>
                2<br>
                10<br>
                Enter the key element to search: 8<br>
                Key element found at index 2</p>
            </div>
        </div>
    </div>
</body>
</html>