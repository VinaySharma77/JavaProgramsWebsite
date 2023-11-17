<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 38</title>
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
            <h1>Java program to find surface area of cuboid</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                class CuboidArea{<br>
                	<span>void CalcArea(){</span><br>
                		<span><span>double length, width, height, area;</span></span><br>
                		<span><span>System.out.println("Program to calculate Area of Cuboid");</span></span><br>
                		<span><span>Scanner scan = new Scanner(System.in);</span></span><br>
                		<span><span>System.out.print("Enter length value : ");</span></span><br>
                		<span><span>length = scan.nextDouble();</span></span><br>
                		<span><span>System.out.print("Enter width value : ");</span></span><br>
                		<span><span>width = scan.nextDouble();</span></span><br>
                		<span><span>System.out.print("Enter height value : ");</span></span><br>
                		<span><span>height = scan.nextDouble();</span></span><br>
                		<span><span>area = 2 * ((length * width) + (length * height) + (height * width));</span></span><br>
                		<span><span>System.out.println("Area of Cuboid is : " + area);</span></span><br>
                	<span>}</span><br>
                	<span>public static void main(String args[]){</span><br>
                		<span><span>CuboidArea obj = new CuboidArea();</span></span><br>
                		<span><span>obj.CalcArea();</span></span><br>
                	<span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Program to calculate Area of Cuboid<br>
                Enter length value : 40<br>
                Enter width value : 10<br>
                Enter height value : 6<br>
                Area of Cuboid is : 1400.0</p>
            </div>
        </div>
    </div>
</body>
</html>