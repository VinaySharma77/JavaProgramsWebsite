<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 6</title>
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
            <h1>Write a Java program to swap two variables</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                    class SwapNumbers{<br>
	                    <span>void swap(){</span><br>
		                    <span><span>int num1, num2, temp;</span></span><br>
		                    <span><span>System.out.println("Program to swap two numbers");</span></span><br>
		                    <span><span>Scanner scan = new Scanner(System.in);</span></span><br>
		                    <span><span>System.out.print("Enter first number : ");</span></span><br>
		                    <span><span>num1 = scan.nextInt();</span></span><br>
		                    <span><span>System.out.print("Enter second number : ");</span></span><br>
		                    <span><span>num2 = scan.nextInt();</span></span><br>
		                    <span><span>System.out.println("Before Swapping Number1 is : " + num1);</span></span><br>
		                    <span><span>System.out.println("Before Swapping Number2 is : " + num2);</span></span><br>
		                    <span><span>temp = num1;</span></span><br>
		                    <span><span>num1 = num2;</span></span><br>
		                    <span><span>num2 = temp;</span></span><br>
		                    <span><span>System.out.println("After Swapping Number1 is : " + num1);</span></span><br>
		                    <span><span>System.out.println("After Swapping Number2 is : " + num2);</span></span><br>
	                    <span>}</span><br>
	                    <span>public static void main(String args[]){</span><br>
		                    <span><span>SwapNumbers obj = new SwapNumbers();<br>
		                    <span><span>obj.swap();<br>
	                    <span>}</span><br>
                    }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Program to swap two numbers<br>
                    Enter first number : 10<br>
                    Enter second number : 5<br>
                    Before Swapping Number1 is : 10<br>
                    Before Swapping Number2 is : 5<br>
                    After Swapping Number1 is : 5<br>
                    After Swapping Number2 is : 10</p>
            </div>
        </div>
    </div>
</body>
</html>