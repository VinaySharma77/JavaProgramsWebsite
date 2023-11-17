<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 74</title>
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
            <h1>Write a Java program to replace all the ‘d’ characters with ‘f’ characters</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                class ReplaceCharacters{<br>
                	<span>void Replace(){</span><br>
                		<span><span>System.out.println("Program to Replace 'd' characters with 'f' characters");</span></span><br>
                		<span><span>Scanner scan = new Scanner(System.in);</span></span><br>
                		<span><span>System.out.print("Enter a string : ");</span></span><br>
                		<span><span>String text = scan.nextLine();</span></span><br>
                		<span><span>String replace = text.replaceAll("d","f");</span></span><br>
                		<span><span>System.out.println("Original String is : " + text);</span></span><br>
                		<span><span>System.out.println("Replaced String is : " + replace);</span></span><br>
                	<span>}</span><br>
                	<span>public static void main(String args[]){</span><br>
                		<span><span>ReplaceCharacters obj = new ReplaceCharacters();</span></span><br>
                		<span><span>obj.Replace();</span></span><br>
                	<span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Program to Replace 'd' characters with 'f' characters<br>
                Enter a string : hello world<br>
                Original String is : hello world<br>
                Replaced String is : hello worlf</p>
            </div>
        </div>
    </div>
</body>
</html>