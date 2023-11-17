<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 12</title>
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
            <h1>Write a Java program to count the letters, spaces, numbers and other characters of an input string</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                class CharacterCounter{<br>
                	<span>void CountEverything(){</span><br>
                		<span><span>String text;</span></span><br>
                		<span><span>int countLetters = 0;</span></span><br>
                		<span><span>int countSpaces = 0;</span></span><br>
                		<span><span>int countNumbers = 0;</span></span><br>
                		<span><span>int countCharacters = 0;</span></span><br>
                		<span><span>System.out.println("Program to count letter, spaces, numbers, characters in text");</span></span><br>
                		<span><span>Scanner scan = new Scanner(System.in);</span></span><br>
                		<span><span>System.out.print("Enter a string : ");</span></span><br>
                		<span><span>text = scan.nextLine();</span></span><br>
                		<span><span>for(char arr : text.toCharArray()){</span></span><br>
                			<span><span><span>if(Character.isLetter(arr)){</span></span></span><br>
                				<span><span><span><span>countLetters++;</span></span></span></span><br>
                			<span><span><span>}</span></span></span><br>
                			<span><span><span>else if(Character.isDigit(arr)){</span></span></span><br>
                				<span><span><span><span>countNumbers++;</span></span></span></span><br>
                			<span><span><span>}</span></span></span><br>
                			<span><span><span>else if(Character.isWhitespace(arr)){</span></span></span><br>
                				<span><span><span><span>countSpaces++;</span></span></span></span><br>
                			<span><span><span>}</span></span></span><br>
                			<span><span><span>else{</span></span></span><br>
                				<span><span><span><span>countCharacters++;</span></span></span></span><br>
                			<span><span><span>}</span></span></span><br>
                		}<br>
                		<span><span>System.out.println("Total Letters : " + countLetters);</span></span><br>
                		<span><span>System.out.println("Total Numbers : " + countNumbers);</span></span><br>
                		<span><span>System.out.println("Total Spaces : " + countSpaces);</span></span><br>
                		<span><span>System.out.println("Total Characters : " + countCharacters);</span></span><br>
                	<span>}</span><br>
                	<span>public static void main(String args[]){</span><br>
                		<span><span>CharacterCounter obj = new CharacterCounter();</span></span><br>
                		<span><span>obj.CountEverything();</span></span><br>
                	<span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Program to count letter, spaces, numbers, characters in text<br>
                    Enter a string : abc&nbsp;&nbsp;&nbsp;123@#$<br>
                    Total Letters : 3<br>
                    Total Numbers : 3<br>
                    Total Spaces : 3<br>
                    Total Characters : 3</p>
            </div>
        </div>
    </div>
</body>
</html>