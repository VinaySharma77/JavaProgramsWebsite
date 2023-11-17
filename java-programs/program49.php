<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 49</title>
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
            <h1>Java Pogram to Calculate Commission Percentage</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                class CommissionPercentage{<br>
                	<span>void CalcCommission(){</span><br>
                		<span><span>System.out.println("Program to calculate Commission Percentage");</span></span><br>
                		<span><span>Scanner scan = new Scanner(System.in);</span></span><br>
                		<span><span>System.out.print("Enter Total Sale : ");</span></span><br>
                		<span><span>double sale = scan.nextDouble();</span></span><br>
                		<span><span>System.out.print("Enter Commission Rate : ");</span></span><br>
                		<span><span>double rate = scan.nextDouble();</span></span><br>
                		<span><span>double comm_amt = (sale * rate) / 100;</span></span><br>
                		<span><span>double comm_perc = (comm_amt / sale) * 100;</span></span><br>
                		<span><span>System.out.println("Commission Amount : " + comm_amt);</span></span><br>
                		<span><span>System.out.println("Commission Percentage : " + comm_perc);</span></span><br>
                	<span>}</span><br>
                	<span>public static void main(String args[]){</span><br>
                		<span><span>CommissionPercentage obj = new CommissionPercentage();</span></span><br>
                		<span><span>obj.CalcCommission();</span></span><br>
                	<span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Program to calculate Commission Percentage<br>
                Enter Total Sale : 4500<br>
                Enter Commission Rate : 12<br>
                Commission Amount : 540.0<br>
                Commission Percentage : 12.0</p>
            </div>
        </div>
    </div>
</body>
</html>