<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 89</title>
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
            <h1>Write a Java program to find the common elements between two arrays</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Arrays;<br>
                import java.util.HashSet;<br>
                import java.util.Scanner;<br>
                import java.util.Set;<br>
                public class ArraysCommonElements{<br>
                    <span>public static void main(String[] args) {</span><br>
                        <span><span>Scanner scanner = new Scanner(System.in);</span></span><br>
                        <span><span>System.out.print("Enter elements for the first array (comma-separated): ");</span></span><br>
                        <span><span>String input1 = scanner.nextLine();</span></span><br>
                        <span><span>String[] array1 = input1.split(",\\s*");</span></span><br>
                        <span><span>System.out.print("Enter elements for the second array (comma-separated): ");</span></span><br>
                        <span><span>String input2 = scanner.nextLine();</span></span><br>
                        <span><span>String[] array2 = input2.split(",\\s*");</span></span><br>
                        <span><span>Set&lt;String&gt; set1 = new HashSet<>(Arrays.asList(array1));</span></span><br>
                        <span><span>Set&lt;String&gt; set2 = new HashSet<>(Arrays.asList(array2));</span></span><br>
                        <span><span>set1.retainAll(set2);</span></span><br>
                        <span><span>System.out.println("Common elements: " + set1);</span></span><br>
                    <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Enter elements for the first array (comma-separated): 4,6,8,5,9<br>
                Enter elements for the second array (comma-separated): 7,9,1,2,6<br>
                Common elements: [6, 9]</p>
            </div>
        </div>
    </div>
</body>
</html>