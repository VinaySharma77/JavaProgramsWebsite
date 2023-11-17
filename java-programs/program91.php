<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 91</title>
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
            <h1>Write a Java program to convert an array to ArrayList</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.ArrayList;<br>
                import java.util.Scanner;<br>
                public class ArrayToArrayList{<br>
                    <span>public static void main(String[] args) {</span><br>
                        <span><span>Scanner scanner = new Scanner(System.in);</span></span><br>
                        <span><span>System.out.print("Enter the size of the array: ");</span></span><br>
                        <span><span>int size = scanner.nextInt();</span></span><br>
                        <span><span>int[] array = new int[size];</span></span><br>
                        <span><span>System.out.println("Enter the elements of the array:");</span></span><br>
                        <span><span>for (int i = 0; i < size; i++) {</span></span><br>
                            <span><span><span>System.out.print("Element " + (i + 1) + ": ");</span></span></span><br>
                            <span><span><span>array[i] = scanner.nextInt();</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>ArrayList&lt;Integer&gt; arrayList = convertArrayToArrayList(array);</span></span><br>
                        <span><span>System.out.println("ArrayList elements: " + arrayList);</span></span><br>
                    <span>}</span><br>
                    <span>private static ArrayList&lt;Integer&gt; convertArrayToArrayList(int[] array) {</span><br>
                        <span><span>ArrayList&lt;Integer&gt; arrayList = new ArrayList<>();</span></span><br>
                        <span><span>for (int value : array) {</span></span><br>
                            <span><span><span>arrayList.add(value);</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>return arrayList;</span></span><br>
                    <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Enter the size of the array: 5<br>
                Enter the elements of the array:<br>
                Element 1: 8<br>
                Element 2: 7<br>
                Element 3: 9<br>
                Element 4: 6<br>
                Element 5: 4<br>
                ArrayList elements: [8, 7, 9, 6, 4]</p>
            </div>
        </div>
    </div>
</body>
</html>