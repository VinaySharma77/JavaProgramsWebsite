<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 79</title>
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
            <h1>Write a java program to reverse a String</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                public class ReverseString{<br>
                	<span>public static void main(String[] args){</span><br>
                        <span><span>Scanner scanner = new Scanner(System.in);</span></span><br>
                        <span><span>System.out.print("Enter a string: ");</span></span><br>
                        <span><span>String input = scanner.nextLine();</span></span><br>
                        <span><span>String reversedString = reverseString(input);</span></span><br>
                        <span><span>System.out.println("Reversed String: " + reversedString);</span></span><br>
                    <span>}</span><br>
                    <span>private static String reverseString(String str) {</span><br>
                        <span><span>char[] charArray = str.toCharArray();</span></span><br>
                        <span><span>int left = 0;</span></span><br>
                        <span><span>int right = charArray.length - 1;</span></span><br>
                        <span><span>while (left < right) {</span></span><br>
                            <span><span><span>char temp = charArray[left];</span></span></span><br>
                            <span><span><span>charArray[left] = charArray[right];</span></span></span><br>
                            <span><span><span>charArray[right] = temp;</span></span></span><br>
                            <span><span><span>left++;</span></span></span><br>
                            <span><span><span>right--;</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>return new String(charArray);</span></span><br>
                    <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Enter a string: hello world<br>
                Reversed String: dlrow olleh</p>
            </div>
        </div>
    </div>
</body>
</html>