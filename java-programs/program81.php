<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 81</title>
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
            <h1>Write a java program to count total number of lines from a string</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                public class LineCounter {<br>
                    <span>public static void main(String[] args) {</span><br>
                        <span><span>Scanner scanner = new Scanner(System.in);</span></span><br>
                        <span><span>System.out.println("Enter a string (press Ctrl+D or Ctrl+Z to finish input):");</span></span><br>
                        <span><span>StringBuilder inputStringBuilder = new StringBuilder();</span></span><br>
                        <span><span>while (scanner.hasNextLine()) {</span></span><br>
                            <span><span><span>inputStringBuilder.append(scanner.nextLine()).append("\n");</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>String userInput = inputStringBuilder.toString();</span></span><br>
                        <span><span>int lineCount = countLines(userInput);</span></span><br>
                        <span><span>System.out.println("Total number of lines: " + lineCount);</span></span><br>
                    <span>}</span><br>
                    <span>private static int countLines(String input) {</span><br>
                        <span><span>String[] lines = input.split("\n");</span></span><br>
                        <span><span>return lines.length;</span></span><br>
                    <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Enter a string (press Ctrl+D or Ctrl+Z to finish input):<br>
                hello how are you?<br>
                I am fine.<br>
                ^Z<br>
                Total number of lines: 2</p>
            </div>
        </div>
    </div>
</body>
</html>