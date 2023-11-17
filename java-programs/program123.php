<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 123</title>
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
            <h1>Write a Java method to count all vowels in a string</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                public class CountVowels{<br>
                    <span>public static void main(String[] args) {</span><br>
                        <span><span>Scanner scanner = new Scanner(System.in);</span></span><br>
                        <span><span>System.out.print("Enter a string: ");</span></span><br>
                        <span><span>String inputString = scanner.nextLine();</span></span><br>
                        <span><span>int vowelCount = countVowels(inputString);</span></span><br>
                        <span><span>System.out.println("Number of vowels in the string: " + vowelCount);</span></span><br>
                    <span>}</span><br>
                    <span>public static int countVowels(String input) {</span><br>
                        <span><span>input = input.toLowerCase();</span></span><br>
                        <span><span>int count = 0;</span></span><br>
                        <span><span>for (int i = 0; i < input.length(); i++) {</span></span><br>
                            <span><span><span>char ch = input.charAt(i);</span></span></span><br>
                            <span><span><span>if (ch == 'a' || ch == 'e' || ch == 'i' || ch == 'o' || ch == 'u') {</span></span></span><br>
                                <span><span><span><span>count++;</span></span></span></span><br>
                            <span><span><span>}</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>return count;</span></span><br>
                    <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Enter a string: hello world<br>
                Number of vowels in the string: 3</p>
            </div>
        </div>
    </div>
</body>
</html>