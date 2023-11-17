<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 47</title>
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
            <h1>Java Program to calculate compound interest</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                class CompoundInterest{<br>
                	<span>void Calculate(){</span><br>
                		<span><span>System.out.println("Program to calculate Compound Interest");</span></span><br>
                		<span><span>Scanner scan = new Scanner(System.in);</span></span><br>
                		<span><span>System.out.print("Enter Principal Amount : ");</span></span><br>
                		<span><span>double principal = scan.nextDouble();</span></span><br>
                		<span><span>System.out.print("Enter Annual Interest : ");</span></span><br>
                		<span><span>double interest = scan.nextDouble();</span></span><br>
                		<span><span>System.out.print("Enter Time Period : ");</span></span><br>
                		<span><span>double time = scan.nextDouble();</span></span><br>
                		<span><span>System.out.print("Enter Compound Frequency : ");</span></span><br>
                		<span><span>int frequency = scan.nextInt();</span></span><br>
                		<span><span>double calc = principal * Math.pow(1 + interest / frequency, frequency * time);</span></span><br>
                		<span><span>double com_interest = calc - principal;</span></span><br>
                		<span><span>System.out.print("Compound Interst is : " + com_interest);</span></span><br>
                	<span>}</span><br>
                	<span>public static void main(String args[]){</span><br>
                		<span><span>CompoundInterest obj = new CompoundInterest();</span></span><br>
                		<span><span>obj.Calculate();</span></span><br>
                	<span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Program to calculate Compound Interest<br>
                Enter Principal Amount : 120<br>
                Enter Annual Interest : 400<br>
                Enter Time Period : 6<br>
                Enter Compound Frequency : 1<br>
                Compound Interst is : 4.98939033888288E17</p>
            </div>
        </div>
    </div>
</body>
</html>