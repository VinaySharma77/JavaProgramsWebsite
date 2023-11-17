<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 80</title>
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
            <h1>Write a java program to remove html tags from a string</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                import java.util.regex.Pattern;<br>
                public class RemoveHtmlTags{<br>
                    <span>public static void main(String[] args){</span><br>
                        <span><span>Scanner scanner = new Scanner(System.in);</span></span><br>
                        <span><span>System.out.print("Enter a string with HTML tags: ");</span></span><br>
                        <span><span>String input = scanner.nextLine();</span></span><br>
                        <span><span>String result = removeHtmlTags(input);</span></span><br>
                        <span><span>System.out.println("String without HTML tags: " + result);</span></span><br>
                    <span>}</span><br>
                    <span>private static String removeHtmlTags(String input){</span><br>
                        <span><span>String regex = "<[^>]*>";</span></span><br>
                        <span><span>return input.replaceAll(regex, "");</span></span><br>
                    <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Enter a string with HTML tags: &lt;p&gt;Hello World&lt;&#47;p&gt;<br>
                String without HTML tags: Hello World</p>
            </div>
        </div>
    </div>
</body>
</html>