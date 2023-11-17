<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 16</title>
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
            <h1>Write a Java program to print the odd numbers from 1 to 20</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>class OddNumbers{<br>
	                <span>public static void main(String args[]){</span><br>
	                	<span><span>System.out.println("Program to Print Odd Numbers between 1 to 20");</span></span><br>
	                	<span><span>int i;</span></span><br>
	                	<span><span>for(i = 1; i <=20; i++){</span></span><br>
	                		<span><span><span>if(i % 2 == 0){</span></span></span><br>
	                			<span><span><span><span>continue;</span></span></span></span><br>
	                		<span><span><span>}</span></span></span><br>
	                		<span><span><span>else{</span></span></span><br>
	                			<span><span><span><span>System.out.println("Odd Number is : " + i);</span></span></span></span><br>
	                		<span><span><span>}</span></span></span><br>
	                	<span><span>}</span></span><br>
	                <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Program to Print Odd Numbers between 1 to 20<br>
                Odd Number is : 1<br>
                Odd Number is : 3<br>
                Odd Number is : 5<br>
                Odd Number is : 7<br>
                Odd Number is : 9<br>
                Odd Number is : 11<br>
                Odd Number is : 13<br>
                Odd Number is : 15<br>
                Odd Number is : 17<br>
                Odd Number is : 19<br>
            </p>
            </div>
        </div>
    </div>
</body>
</html>