<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 94</title>
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
            <h1>Write a Java program to find second lowest number from the array</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Arrays;<br>
                import java.util.Scanner;<br>
                public class ArraySecondLowestNumber{<br>
                    <span>public static void main(String[] args) {</span><br>
                        <span><span>Scanner scanner = new Scanner(System.in);</span></span><br>
                        <span><span>System.out.print("Enter the number of elements in the array: ");</span></span><br>
                        <span><span>int n = scanner.nextInt();</span></span><br>
                        <span><span>if (n < 2) {</span></span><br>
                            <span><span><span>System.out.println("Please enter at least two elements in the array.");</span></span></span><br>
                            <span><span><span>return;</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>int[] arr = new int[n];</span></span><br>
                        <span><span>System.out.println("Enter the array elements:");</span></span><br>
                        <span><span>for (int i = 0; i < n; i++) {</span></span><br>
                            <span><span><span>arr[i] = scanner.nextInt();</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>int secondLowest = findSecondLowest(arr);</span></span><br>
                        <span><span>System.out.println("The second lowest number in the array is: " + secondLowest);</span></span><br>
                    <span>}</span><br>
                    <span>private static int findSecondLowest(int[] arr) {</span><br>
                        <span><span>Arrays.sort(arr);</span></span><br>
                        <span><span>return arr[1];</span></span><br>
                    <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Enter the number of elements in the array: 5<br>
                Enter the array elements:<br>
                68<br>
                97<br>
                100<br>
                12<br>
                10<br>
                The second lowest number in the array is: 12</p>
            </div>
        </div>
    </div>
</body>
</html>