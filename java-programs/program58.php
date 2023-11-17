<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 58</title>
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
            <h1>Write a program in Java to display the first 5 natural numbers</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>class NaturalNumbers{<br>
                	    <span>void PrintNaturalNumbers(){</span><br>
                	    	<span><span>System.out.println("Program to Print First Five Natural Numbers");</span></span><br>
                	    	<span><span>System.out.print("First Five Natural Numbers are : ");</span></span><br>
                	    	<span><span>int i;</span></span><br>
                	    	<span><span>for(i = 1; i <= 5; i++){</span></span><br>
                	    		<span><span><span>System.out.print(i + " , ");</span></span></span><br>
                	    	<span><span>}</span></span><br>
                	    <span>}</span><br>
                	    <span>public static void main(String args[]){</span><br>
                	    	<span><span>NaturalNumbers obj = new NaturalNumbers();</span></span><br>
                	    	<span><span>obj.PrintNaturalNumbers();</span></span><br>
                	    <span>}</span><br>
                    }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Program to Print First Five Natural Numbers<br>
                First Five Natural Numbers are : 1 , 2 , 3 , 4 , 5 ,</p>
            </div>
        </div>
    </div>
</body>
</html>