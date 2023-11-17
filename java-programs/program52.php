<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 52</title>
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
            <h1>Write a Java program to take three numbers from the user and print the greatest number</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                class GreatestNumber{<br>
                	<span>void CalcGreater(){</span><br>
                		<span><span>System.out.println("Program to check greatest number from three numbers");</span></span><br>
                		<span><span>Scanner scan = new Scanner(System.in);</span></span><br>
                		<span><span>System.out.print("Enter First Number : ");</span></span><br>
                		<span><span>int first = scan.nextInt();</span></span><br>
                		<span><span>System.out.print("Enter Second Number : ");</span></span><br>
                		<span><span>int second = scan.nextInt();</span></span><br>
                		<span><span>System.out.print("Enter Third Number : ");</span></span><br>
                		<span><span>int third = scan.nextInt();</span></span><br>
                		<span><span>if(first > second){</span></span><br>
                			<span><span><span>if(first > third){</span></span></span><br>
                				<span><span><span><span>System.out.print("First is greatest Number");</span></span></span></span><br>
                			<span><span><span>}</span></span></span><br>
                		<span><span>}</span></span><br>
                		<span><span>else if(second > third){</span></span><br>
                			<span><span><span>System.out.print("Second is greatest Number");</span></span></span><br>
                		<span><span>}</span></span><br>
                		<span><span>else{</span></span><br>
                			<span><span><span>System.out.print("Third is greatest Number");</span></span></span><br>
                		<span><span>}</span></span><br>
                	<span>}</span><br>
                	<span>public static void main(String args[]){</span><br>
                		<span><span>GreatestNumber obj = new GreatestNumber();</span></span><br>
                		<span><span>obj.CalcGreater();</span></span><br>
                	<span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Program to check greatest number from three numbers<br>
                Enter First Number : 2<br>
                Enter Second Number : 5<br>
                Enter Third Number : 7<br>
                Third is greatest Number</p>
            </div>
        </div>
    </div>
</body>
</html>