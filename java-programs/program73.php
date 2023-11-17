<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 73</title>
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
            <h1>Write a Java program to get a substring of a given string between two specified positions</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                class Substring{<br>
                	<span>void getSubstring(){</span><br>
                		<span><span>System.out.println("Program to Print Substring from a String");</span></span><br>
                		<span><span>Scanner scan = new Scanner(System.in);</span></span><br>
                		<span><span>System.out.print("Enter a String : ");</span></span><br>
                		<span><span>String text = scan.nextLine();</span></span><br>
                		<span><span>System.out.print("Enter Starting Index : ");</span></span><br>
                		<span><span>int start = scan.nextInt();</span></span><br>
                		<span><span>System.out.print("Enter Ending Index : ");</span></span><br>
                		<span><span>int end = scan.nextInt();</span></span><br>
                		<span><span>int i;</span></span><br>
                		<span><span>if(start < 0 || end > text.length() || start > end){</span></span><br>
                			<span><span><span>System.out.println("Enter valid Index");</span></span></span><br>
                		<span><span>}</span></span><br>
                		<span><span>String substr = text.substring(start, end);</span></span><br>
                		<span><span>System.out.println("Original String is : " + text);</span></span><br>
                		<span><span>System.out.println("Substring is : " + substr);</span></span><br>
                	<span>}</span><br>
                	<span>public static void main(String args[]){</span><br>
                		<span><span>Substring obj = new Substring();</span></span><br>
                		<span><span>obj.getSubstring();</span></span><br>
                	<span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Program to Print Substring from a String<br>
                Enter a String : hello how are you?<br>
                Enter Starting Index : 6<br>
                Enter Ending Index : 9<br>
                Original String is : hello how are you?<br>
                Substring is : how</p>
            </div>
        </div>
    </div>
</body>
</html>