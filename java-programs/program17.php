<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 17</title>
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
            <h1>Write a Java program to print the even numbers from 1 to 20</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>class EvenNumbers{<br>
            	    <span>public static void main(String args[]){</span><br>
            	    	<span><span>System.out.println("Program to Print Even Numbers between 1 to 20");</span></span><br>
            	    	<span><span>int i;</span></span><br>
            	    	<span><span>for(i = 1; i <=20; i++){</span></span><br>
            	    		<span><span><span>if(i % 2 == 0){</span></span></span><br>
            	    			<span><span><span><span>System.out.println("Even Number is : " + i);</span></span></span></span><br>
            	    		<span><span><span>}</span></span></span><br>
            	    		<span><span><span>else{</span></span></span><br>
            	    			<span><span><span><span>continue;</span></span></span></span><br>
            	    		<span><span><span>}</span></span></span><br>
            	    	<span><span>}</span></span><br>
            	    <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Program to Print Even Numbers between 1 to 20<br>
                Even Number is : 2<br>
                Even Number is : 4<br>
                Even Number is : 6<br>
                Even Number is : 8<br>
                Even Number is : 10<br>
                Even Number is : 12<br>
                Even Number is : 14<br>
                Even Number is : 16<br>
                Even Number is : 18<br>
                Even Number is : 20<br>
                </p>
            </div>
        </div>
    </div>
</body>
</html>