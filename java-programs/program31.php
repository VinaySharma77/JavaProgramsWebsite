<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 31</title>
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
            <h1>Java Program to find area of rhombus</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                class RhombusArea{<br>
                	<span>void CalcArea(){</span><br>
                		<span><span>double diagonal1, diagonal2, area;</span></span><br>
                		<span><span>System.out.println("Program to calculate Area of Rhombus");</span></span><br>
                		<span><span>Scanner scan = new Scanner(System.in);</span></span><br>
                		<span><span>System.out.print("Enter first diagonal value : ");</span></span><br>
                		<span><span>diagonal1 = scan.nextDouble();</span></span><br>
                		<span><span>System.out.print("Enter second diagonal value : ");</span></span><br>
                		<span><span>diagonal2 = scan.nextDouble();</span></span><br>
                		<span><span>area = (diagonal1 * diagonal2) / 2;</span></span><br>
                		<span><span>System.out.println("Area of Rhombus is : " + area);</span></span><br>
                	<span>}</span><br>
                	<span>public static void main(String args[]){</span><br>
                		<span><span>RhombusArea obj = new RhombusArea();</span></span><br>
                		<span><span>obj.CalcArea();</span></span><br>
                	<span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Program to calculate Area of Rhombus<br>
                Enter first diagonal value : 2<br>
                Enter second diagonal value : 3<br>
                Area of Rhombus is : 3.0</p>
            </div>
        </div>
    </div>
</body>
</html>