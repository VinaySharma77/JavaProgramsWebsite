<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 85</title>
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
            <h1>Write a Java program to test if an array contains a specific value</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Arrays;<br>
                import java.util.Scanner;<br>
                public class ArrayElementSearch{<br>
                    <span>public static void main(String[] args){</span><br>
                        <span><span>Scanner scanner = new Scanner(System.in);</span></span><br>
                        <span><span>System.out.print("Enter the size of the array: ");</span></span><br>
                        <span><span>int size = scanner.nextInt();</span></span><br>
                        <span><span>int[] numbers = new int[size];</span></span><br>
                        <span><span>for (int i = 0; i < size; i++) {</span></span><br>
                            <span><span><span>System.out.print("Enter element #" + (i + 1) + ": ");</span></span></span><br>
                            <span><span><span>numbers[i] = scanner.nextInt();</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>System.out.print("Enter a value to search for: ");</span></span><br>
                        <span><span>int targetValue = scanner.nextInt();</span></span><br>
                        <span><span>boolean containsValue = Arrays.stream(numbers).anyMatch(value -> value == targetValue);</span></span><br>
                        <span><span>System.out.println("The array " + (containsValue ? "contains" : "does not contain") + " the value " + targetValue);</span></span><br>
                    <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Enter the size of the array: 5<br>
                Enter element #1: 25<br>
                Enter element #2: 63<br>
                Enter element #3: 78<br>
                Enter element #4: 45<br>
                Enter element #5: 95<br>
                Enter a value to search for: 95<br>
                The array contains the value 95</p>
            </div>
        </div>
    </div>
</body>
</html>