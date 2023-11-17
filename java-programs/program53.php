<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 53</title>
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
            <h1>Write a Java program to find the number of days in a month</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                class DaysInMonth{<br>
                	<span>void CalcDays(){</span><br>
                		<span><span>System.out.println("Program to find days in a month");</span></span><br>
                		<span><span>Scanner scan = new Scanner(System.in);</span></span><br>
                		<span><span>System.out.print("Enter a month number (1-12) : ");</span></span><br>
                		<span><span>int month = scan.nextInt();</span></span><br>
                		<span><span>System.out.print("Enter a year : ");</span></span><br>
                		<span><span>int year = scan.nextInt();</span></span><br>
                		<span><span>if(month < 1 || month > 12){</span></span><br>
                			<span><span><span>System.out.println("Invalid Month Number");</span></span></span><br>
                		<span><span>}</span></span><br>
                		<span><span>else{</span></span><br>
                			<span><span><span>java.time.YearMonth yearMonth = java.time.YearMonth.of(year, month);</span></span></span><br>
                			<span><span><span>int days = yearMonth.lengthOfMonth();</span></span></span><br>
                			<span><span><span>System.out.println("Number of days in specified month : " + days);</span></span></span><br>
                		<span><span>}</span></span><br>
                	<span>}</span><br>
                	<span>public static void main(String args[]){</span><br>
                		<span><span>DaysInMonth obj = new DaysInMonth();</span></span><br>
                		<span><span>obj.CalcDays();</span></span><br>
                	<span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Program to find days in a month<br>
                Enter a month number (1-12) : 6<br>
                Enter a year : 2023<br>
                Number of days in specified month : 30</p>
            </div>
        </div>
    </div>
</body>
</html>