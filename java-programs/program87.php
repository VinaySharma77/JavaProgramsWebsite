<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 87</title>
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
            <h1>Write a Java program to insert an element (specific position) into an array</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Arrays;<br>
                import java.util.Scanner;<br>
                public class InsertElementInArray{<br>
                    <span>public static void main(String[] args) {</span><br>
                        <span><span>Scanner scanner = new Scanner(System.in);</span></span><br>
                        <span><span>System.out.print("Enter the size of the array: ");</span></span><br>
                        <span><span>int size = scanner.nextInt();</span></span><br>
                        <span><span>int[] array = new int[size];</span></span><br>
                        <span><span>System.out.println("Enter the elements of the array:");</span></span><br>
                        <span><span>for (int i = 0; i < size; i++) {</span></span><br>
                            <span><span><span>System.out.print("Enter element at index " + i + ": ");</span></span></span><br>
                            <span><span><span>array[i] = scanner.nextInt();</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>System.out.print("Enter the position to insert the new element: ");</span></span><br>
                        <span><span>int position = scanner.nextInt();</span></span><br>
                        <span><span>if (position < 0 || position > size) {</span></span><br>
                            <span><span><span>System.out.println("Invalid position. Please enter a valid position.");</span></span></span><br>
                            <span><span><span>return;</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>System.out.print("Enter the new element to insert: ");</span></span><br>
                        <span><span>int newElement = scanner.nextInt();</span></span><br>
                        <span><span>array = Arrays.copyOf(array, array.length + 1);</span></span><br>
                        <span><span>for (int i = array.length - 1; i > position; i--) {</span></span><br>
                            <span><span><span>array[i] = array[i - 1];</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>array[position] = newElement;</span></span><br>
                        <span><span>System.out.println("Array after inserting the new element: " + Arrays.toString(array));</span></span><br>
                    <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Enter the size of the array: 5<br>
                Enter the elements of the array:<br>
                Enter element at index 0: 87<br>
                Enter element at index 1: 96<br>
                Enter element at index 2: 85<br>
                Enter element at index 3: 42<br>
                Enter element at index 4: 35<br>
                Enter the position to insert the new element: 2<br>
                Enter the new element to insert: 100<br>
                Array after inserting the new element: [87, 96, 100, 85, 42, 35]</p>
            </div>
        </div>
    </div>
</body>
</html>