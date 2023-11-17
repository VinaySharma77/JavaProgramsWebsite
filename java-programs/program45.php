<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 45</title>
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
            <h1>Java Program to calculate electricity bill</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                class ElectricityBill{<br>
                	<span>void CalcBill(){</span><br>
                		<span><span>System.out.println("Program to calculate Electricity Bill");</span></span><br>
                		<span><span>Scanner scan = new Scanner(System.in);</span></span><br>
                		<span><span>double rate, unit, total;</span></span><br>
                		<span><span>System.out.print("Enter the rate per unit (in rupees) : ");</span></span><br>
                		<span><span>rate = scan.nextInt();</span></span><br>
                		<span><span>System.out.print("Enter the number of units consumed : ");</span></span><br>
                		<span><span>unit = scan.nextInt();</span></span><br>
                		<span><span>total = rate * unit;</span></span><br>
                		<span><span>System.out.println("Total Electricity Bill is : " + total);</span></span><br>
                	<span>}</span><br>
                	<span>public static void main(String args[]){</span><br>
                		<span><span>ElectricityBill obj = new ElectricityBill();</span></span><br>
                		<span><span>obj.CalcBill();</span></span><br>
                	<span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Program to calculate Electricity Bill<br>
                Enter the rate per unit (in rupees) : 8<br>
                Enter the number of units consumed : 52<br>
                Total Electricity Bill is : 416.0</p>
            </div>
        </div>
    </div>
</body>
</html>