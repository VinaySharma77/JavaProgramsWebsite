<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 46</title>
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
            <h1>Java Program To Calculate CGPA Percentage</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                class CGPAToPercentage{<br>
                	<span>void CalcPer(){</span><br>
                		<span><span>System.out.println("Program to calculate CGPA to Percentage");</span></span><br>
                		<span><span>Scanner scan = new Scanner(System.in);</span></span><br>
                		<span><span>System.out.print("Enter CGPA out of 10 : ");</span></span><br>
                		<span><span>double cgpa = scan.nextDouble();</span></span><br>
                		<span><span>double percentage = cgpa * 9.5; //formula can vary between institutions</span></span><br>
                		<span><span>System.out.println("Your percentage is : " + percentage + " % ");</span></span><br>
                	<span>}</span><br>
                	<span>public static void main(String args[]){</span><br>
                		<span><span>CGPAToPercentage obj = new CGPAToPercentage();</span></span><br>
                		<span><span>obj.CalcPer();</span></span><br>
                	<span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Program to calculate CGPA to Percentage<br>
                Enter CGPA out of 10 : 8<br>
                Your percentage is : 76.0 %</p>
            </div>
        </div>
    </div>
</body>
</html>