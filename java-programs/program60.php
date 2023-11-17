<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 60</title>
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
            <h1>Write a Java program to display the cube of the number upto given an integer</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                class IntegerCube{<br>
                	<span>void CalcCube(){</span><br>
                		<span><span>System.out.println("Program to calculate Cube of an integer upto some integer");</span></span><br>
                		<span><span>Scanner scan = new Scanner(System.in);</span></span><br>
                		<span><span>System.out.print("Enter a number : ");</span></span><br>
                		<span><span>int num = scan.nextInt();</span></span><br>
                		<span><span>System.out.println("Cubes of Numbers from 1 to " + num + " : ");</span></span><br>
                		<span><span>int i;</span></span><br>
                		<span><span>for(i = 1; i <= num; i++){</span></span><br>
                			<span><span><span>int cube = i * i * i;</span></span></span><br>
                			<span><span><span>System.out.println("Cube of " + i + " is " + cube);</span></span></span><br>
                		<span><span>}</span></span><br>
                	<span>}</span><br>
                	<span>public static void main(String args[]){</span><br>
                		<span><span>IntegerCube obj = new IntegerCube();</span></span><br>
                		<span><span>obj.CalcCube();</span></span><br>
                	<span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Program to calculate Cube of an integer upto some integer<br>
                Enter a number : 3<br>
                Cubes of Numbers from 1 to 3 :<br>
                Cube of 1 is 1<br>
                Cube of 2 is 8<br>
                Cube of 3 is 27</p>
            </div>
        </div>
    </div>
</body>
</html>