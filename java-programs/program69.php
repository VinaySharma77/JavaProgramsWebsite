<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 69</title>
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
            <h1>Write a Java program to concatenate two string</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                class ConcatenateStrings{<br>
                	<span>void Concatenate(){</span><br>
                		<span><span>System.out.println("Program to Concatenate Two Strings");</span></span><br>
                		<span><span>Scanner scan = new Scanner(System.in);</span></span><br>
                		<span><span>System.out.print("Enter first string : ");</span></span><br>
                		<span><span>String first = scan.nextLine();</span></span><br>
                		<span><span>System.out.print("Enter second string : ");</span></span><br>
                		<span><span>String second = scan.nextLine();</span></span><br>
                		<span><span>String merged = first + " " + second;</span></span><br>
                		<span><span>System.out.println("Concatenated String is : " + merged);</span></span><br>
                	<span>}</span><br>
                	<span>public static void main(String args[]){</span><br>
                		<span><span>ConcatenateStrings obj = new ConcatenateStrings();</span></span><br>
                		<span><span>obj.Concatenate();</span></span><br>
                	<span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Program to Concatenate Two Strings<br>
                Enter first string : hello<br>
                Enter second string : world<br>
                Concatenated String is : hello world</p>
            </div>
        </div>
    </div>
</body>
</html>