<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 34</title>
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
            <h1>Java Program to find volume of sphere</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                class SphereVolume{<br>
                	<span>void CalcVol(){</span><br>
                		<span><span>double radius, volume;</span></span><br>
                		<span><span>System.out.println("Program to calculate Volume of Sphere");</span></span><br>
                		<span><span>Scanner scan = new Scanner(System.in);</span></span><br>
                		<span><span>System.out.print("Enter radius value : ");</span></span><br>
                		<span><span>radius = scan.nextDouble();</span></span><br>
                		<span><span>volume = (4.0 / 3.0) * Math.PI * Math.pow(radius, 3);</span></span><br>
                		<span><span>System.out.println("Volume of Sphere is : " + volume);</span></span><br>
                	<span>}</span><br>
                	<span>public static void main(String args[]){</span><br>
                		<span><span>SphereVolume obj = new SphereVolume();</span></span><br>
                		<span><span>obj.CalcVol();</span></span><br>
                	<span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Program to calculate Volume of Sphere<br>
                Enter radius value : 10<br>
                Volume of Sphere is : 4188.790204786391</p>
            </div>
        </div>
    </div>
</body>
</html>