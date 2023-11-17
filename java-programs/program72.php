<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 72</title>
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
            <h1>Write a Java program to trim a string(remove whitespaces)</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                class RemoveWhitespace{<br>
                	<span>void RemoveSpace(){</span><br>
                		<span><span>System.out.println("Program to Remove Whitespaces from a String");</span></span><br>
                		<span><span>Scanner scan = new Scanner(System.in);</span></span><br>
                		<span><span>System.out.print("Enter a paragraph : ");</span></span><br>
                		<span><span>String para = scan.nextLine();</span></span><br>
                		<span><span>String result = para.replaceAll("\\s+","");</span></span><br>
                		<span><span>System.out.println("Original String is : " + para);</span></span><br>
                		<span><span>System.out.println("Trimmed String is : " + result);</span></span><br>
                	<span>}</span><br>
                	<span>public static void main(String args[]){</span><br>
                		<span><span>RemoveWhitespace obj = new RemoveWhitespace();</span></span><br>
                		<span><span>obj.RemoveSpace();</span></span><br>
                	<span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Program to Remove Whitespaces from a String<br>
                Enter a paragraph : hello how are you?<br>
                Original String is : hello how are you?<br>
                Trimmed String is : hellohowareyou?</p>
            </div>
        </div>
    </div>
</body>
</html>