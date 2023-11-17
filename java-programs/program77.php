<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 77</title>
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
            <h1>Write a Java program to get the character at the given index within the String</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                class CharAtIndex{<br>
                	<span>public static void main(String args[]){</span><br>
                		<span><span>System.out.println("Program to print character specified at specific index from string");</span></span><br>
                		<span><span>Scanner scan = new Scanner(System.in);</span></span><br>
                		<span><span>System.out.print("Enter a String : ");</span></span><br>
                		<span><span>String text = scan.nextLine();</span></span><br>
                		<span><span>System.out.print("Enter the Index : ");</span></span><br>
                		<span><span>int index = scan.nextInt();</span></span><br>
                		<span><span>if(index >= 0 && index < text.length()){</span></span><br>
                			<span><span><span>char CharacterAtIndex = text.charAt(index);</span></span></span><br>
                			<span><span><span>System.out.println("Character at Index : " + index + " is " + CharacterAtIndex);</span></span></span><br>
                		<span><span>}</span></span><br>
                		<span><span>else{</span></span><br>
                			<span><span><span>System.out.println("Invalid Index !!");</span></span></span><br>
                		<span><span>}</span></span><br>
                	<span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Program to print character specified at specific index from string<br>
                Enter a String : hello world<br>
                Enter the Index : 6<br>
                Character at Index : 6 is w</p>
            </div>
        </div>
    </div>
</body>
</html>