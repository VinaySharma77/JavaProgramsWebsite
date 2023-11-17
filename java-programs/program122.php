<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 122</title>
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
            <h1>Write a Java method to count all words in a string</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                public class CountWords{<br>
                    <span>public static void main(String[] args) {</span><br>
                        <span><span>Scanner scanner = new Scanner(System.in);</span></span><br>
                        <span><span>System.out.print("Enter a string: ");</span></span><br>
                        <span><span>String inputString = scanner.nextLine();</span></span><br>
                        <span><span>int wordCount = countWords(inputString);</span></span><br>
                        <span><span>System.out.println("Word count: " + wordCount);</span></span><br>
                    <span>}</span><br>
                    <span>public static int countWords(String input) {</span><br>
                        <span><span>if (input == null || input.isEmpty()) {</span></span><br>
                            <span><span><span>return 0;</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>String[] words = input.split("\\s+");</span></span><br>
                        <span><span>return words.length;</span></span><br>
                    <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Enter a string: hello world<br>
                Word count: 2</p>
            </div>
        </div>
    </div>
</body>
</html>