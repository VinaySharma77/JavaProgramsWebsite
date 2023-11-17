<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 55</title>
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
            <h1>Write a Java Program to accept number of week’s day (1-7) and print name of the day</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                class WeekDay{<br>
                	<span>void ShowDay(){</span><br>
                		<span><span>System.out.println("Program to Print Day of Choice");</span></span><br>
                		<span><span>Scanner scan = new Scanner(System.in);</span></span><br>
                		<span><span>System.out.print("Enter Day number (1-7) :");</span></span><br>
                		<span><span>int num = scan.nextInt();</span></span><br>
                		<span><span>switch(num){</span></span><br>
                			<span><span><span>case 1:</span></span></span><br>
                				<span><span><span><span>System.out.println("Monday");</span></span></span></span><br>
                				<span><span><span><span>break;<br>
                			<span><span><span>case 2:</span></span></span><br>
                				<span><span><span><span>System.out.println("Tuesday");</span></span></span></span><br>
                				<span><span><span><span>break;<br>
                			<span><span><span>case 3:</span></span></span><br>
                				<span><span><span><span>System.out.println("Wednesday");</span></span></span></span><br>
                				<span><span><span><span>break;<br>
                			<span><span><span>case 4:</span></span></span><br>
                				<span><span><span><span>System.out.println("Thursday");</span></span></span></span><br>
                				<span><span><span><span>break;<br>
                			<span><span><span>case 5:</span></span></span><br>
                				<span><span><span><span>System.out.println("Friday");</span></span></span></span><br>
                				<span><span><span><span>break;<br>
                			<span><span><span>case 6:</span></span></span><br>
                				<span><span><span><span>System.out.println("Saturday");</span></span></span></span><br>
                				<span><span><span><span>break;<br>
                			<span><span><span>case 7:</span></span></span><br>
                				<span><span><span><span>System.out.println("Sunday");</span></span></span></span><br>
                				<span><span><span><span>break;<br>
                			<span><span><span>default:</span></span></span><br>
                				<span><span><span><span>System.out.println("Wrong input");</span></span></span></span><br>
                		<span><span>}</span></span><br>
                	<span>}</span><br>
                	<span>public static void main(String args[]){</span><br>
                		<span><span>WeekDay obj = new WeekDay();</span></span><br>
                		<span><span>obj.ShowDay();</span></span><br>
                	<span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Program to Print Day of Choice<br>
                Enter Day number (1-7) :4<br>
                Thursday</p>
            </div>
        </div>
    </div>
</body>
</html>