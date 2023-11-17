<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 78</title>
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
            <h1>Write a java program to remove a particular character from a string</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                class RemoveCharacter{<br>
                    <span>public static void main(String args[]){</span><br>
                        <span><span>System.out.println("Program to Remove Specified Character from the String");</span></span><br>
                        <span><span>Scanner scan = new Scanner(System.in);</span></span><br>
                        <span><span>System.out.print("Enter the String : ");</span></span><br>
                        <span><span>String text = scan.nextLine();</span></span><br>
                        <span><span>if(text == null || text.isEmpty()){</span></span><br>
                        	<span><span><span>System.out.println("Please Enter the String");</span></span></span><br>
                        <span><span>}</span></span><br>
                	    <span><span>else{</span></span><br>
                        	<span><span><span>System.out.print("Enter a character that you want to remove : ");</span></span></span><br>
                        	<span><span><span>char ch = scan.next().charAt(0);</span></span></span><br>
                        	<span><span><span>StringBuilder newstr = new StringBuilder();</span></span></span><br>
                        	<span><span><span>for (int i = 0; i < text.length(); i++) {</span></span></span><br>
                            	<span><span><span><span>if (text.charAt(i) == ch) {</span></span></span></span><br>
                            		<span><span><span><span><span>continue;</span></span></span></span></span><br>
                            	<span><span><span><span>}</span></span></span></span><br>
                		        <span><span><span><span>else{</span></span></span></span><br>
                                	<span><span><span><span><span>newstr.append(text.charAt(i));</span></span></span></span></span><br>
                            	<span><span><span><span>}</span></span></span></span><br>
                        	<span><span><span>}</span></span></span><br>
                        	<span><span><span>System.out.println("Original String is : " + text);</span></span></span><br>
                        	<span><span><span>System.out.println("After Removing " + ch + " String is : " + newstr);</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>scan.close();</span></span><br>
                    <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Program to Remove Specified Character from the String<br>
                Enter the String : hello world<br>
                Enter a character that you want to remove : l<br>
                Original String is : hello world<br>
                After Removing l String is : heo word</p>
            </div>
        </div>
    </div>
</body>
</html>