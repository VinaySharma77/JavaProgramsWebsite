<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 50</title>
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
            <h1>Java Pogram To Find Distance Between Two Points</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                class PointsDistance{<br>
                	<span>void CalcDist(){</span><br>
                		<span><span>System.out.println("Program to calculate Distance between two Points");</span></span><br>
                		<span><span>Scanner scan = new Scanner(System.in);</span></span><br>
                		<span><span>System.out.print("Enter x-coordinate of first point : ");</span></span><br>
                		<span><span>double x1 = scan.nextDouble();</span></span><br>
                		<span><span>System.out.print("Enter y-coordinate of first point : ");</span></span><br>
                		<span><span>double y1 = scan.nextDouble();</span></span><br>
                		<span><span>System.out.print("Enter x-coordinate of second point : ");</span></span><br>
                		<span><span>double x2 = scan.nextDouble();</span></span><br>
                		<span><span>System.out.print("Enter y-coordinate of second point : ");</span></span><br>
                		<span><span>double y2 = scan.nextDouble();</span></span><br>
                		<span><span>double distance = Math.sqrt(Math.pow(x2 - x1, 2) + Math.pow(y2 - y1, 2));</span></span><br>
                		<span><span>System.out.print("Distance between two points is : " + distance);</span></span><br>
                	<span>}</span><br>
                	<span>public static void main(String args[]){</span><br>
                		<span><span>PointsDistance obj = new PointsDistance();</span></span><br>
                		<span><span>obj.CalcDist();</span></span><br>
                	<span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Program to calculate Distance between two Points<br>
                Enter x-coordinate of first point : 45<br>
                Enter y-coordinate of first point : 50<br>
                Enter x-coordinate of second point : 30<br>
                Enter y-coordinate of second point : 25<br>
                Distance between two points is : 29.154759474226502</p>
            </div>
        </div>
    </div>
</body>
</html>