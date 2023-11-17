<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 48</title>
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
            <h1>Java Program To Calculate Batting Average</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                class BattingAverage{<br>
                	<span>void BattingAverage(){</span><br>
                		<span><span>System.out.println("Program to calculate Batting Average");</span></span><br>
                		<span><span>Scanner scan = new Scanner(System.in);</span></span><br>
                		<span><span>System.out.print("Enter the total runs scored : ");</span></span><br>
                		<span><span>int score = scan.nextInt();</span></span><br>
                		<span><span>System.out.print("Enter the number of time dismissed : ");</span></span><br>
                		<span><span>int dismiss = scan.nextInt();</span></span><br>
                		<span><span>if(dismiss > 0){</span></span><br>
                			<span><span><span>double BattingAverage = score / dismiss;</span></span></span><br>
                			<span><span><span>System.out.println("Batting Average is : " + BattingAverage);</span></span></span><br>
                		<span><span>}</span></span><br>
                		<span><span>else{</span></span><br>
                			<span><span><span>System.out.println("Batting Average N/A (Player has not been dismissed) ");</span></span></span><br>
                		<span><span>}</span></span><br>
                	<span>}</span><br>
                	<span>public static void main(String args[]){</span><br>
                		<span><span>BattingAverage obj = new BattingAverage();</span></span><br>
                		<span><span>obj.BattingAverage();</span></span><br>
                	<span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Program to calculate Batting Average<br>
                Enter the total runs scored : 325<br>
                Enter the number of time dismissed : 6<br>
                Batting Average is : 54.0</p>
            </div>
        </div>
    </div>
</body>
</html>