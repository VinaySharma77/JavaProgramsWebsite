<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 37</title>
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
            <h1>Java Program to find volume of cone</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                class ConeVolume{<br>
                	<span>void CalcVol(){</span><br>
                		<span><span>double radius, height, volume;</span></span><br>
                		<span><span>System.out.println("Program to calculate Volume of Cone");</span></span><br>
                		<span><span>Scanner scan = new Scanner(System.in);</span></span><br>
                		<span><span>System.out.print("Enter radius value : ");</span></span><br>
                		<span><span>radius = scan.nextDouble();</span></span><br>
                		<span><span>System.out.print("Enter height value : ");</span></span><br>
                		<span><span>height = scan.nextDouble();</span></span><br>
                		<span><span>volume = (1.0 / 3.0) * Math.PI * Math.pow(radius, 2) * height;</span></span><br>
                		<span><span>System.out.print("Volume of Cone is : " + volume);</span></span><br>
                	<span>}</span><br>
                	<span>public static void main(String args[]){</span><br>
                		<span><span>ConeVolume obj = new ConeVolume();</span></span><br>
                		<span><span>obj.CalcVol();</span></span><br>
                	<span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Program to calculate Volume of Cone<br>
                Enter radius value : 9<br>
                Enter height value : 7<br>
                Volume of Cone is : 593.7610115284708</p>
            </div>
        </div>
    </div>
</body>
</html>