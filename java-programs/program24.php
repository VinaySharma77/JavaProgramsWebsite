<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 24</title>
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
            <h1>Write a Java program to check if a positive number is a palindrome or not</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                class CheckPositivePalindrome{<br>
                	<span>void checkPalindrome(){</span><br>
                		<span><span>int num, rem, sum = 0, temp;</span></span><br>
                		<span><span>System.out.println("Program to check positive palindrome number");</span></span><br>
                		<span><span>Scanner scan = new Scanner(System.in);</span></span><br>
                		<span><span>System.out.print("Enter a number : ");</span></span><br>
                		<span><span>num = scan.nextInt();</span></span><br>
                		<span><span>temp = num;</span></span><br>
                		<span><span>while(num > 0){</span></span><br>
                			<span><span><span>rem = num % 10;</span></span></span><br>
                			<span><span><span>sum = (sum * 10) + rem;</span></span></span><br>
                			<span><span><span>num = num / 10;</span></span></span><br>
                		<span><span>}</span></span><br>
                		<span><span>if(temp == sum && temp % 2 == 0){</span></span><br>
                			<span><span><span>System.out.println("It is a Positive Palindrome Number");</span></span></span><br>
                		<span><span>}</span></span><br>
                		<span><span>else{</span></span><br>
                			<span><span><span>System.out.println("It is not a Positive Palindrome Number");</span></span></span><br>
                		<span><span>}</span></span><br>
                	<span>}</span><br>
                	<span>public static void main(String args[]){</span><br>
                		<span><span>CheckPositivePalindrome obj = new CheckPositivePalindrome();</span></span><br>
                		<span><span>obj. checkPalindrome();</span></span><br>
                	<span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Program to check positive palindrome number<br>
                    Enter a number : 8<br>
                    It is a Positive Palindrome Number</p>
            </div>
        </div>
    </div>
</body>
</html>