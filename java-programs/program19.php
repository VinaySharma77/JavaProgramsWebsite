<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 19</title>
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
            <h1>Write a Java program to convert seconds to hour, minute and seconds</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                    import java.util.Date;<br>
                    class SecondsToTime{<br>
                    	<span>void TakeSeconds(){</span><br>
                    		<span><span>int num, hours, minutes, seconds;</span></span><br>
                    		<span><span>System.out.println("Program to convert seconds to hours, minutes, seconds");</span></span><br>
                    		<span><span>Scanner scan = new Scanner(System.in);</span></span><br>
                    		<span><span>System.out.print("Enter value of seconds : ");</span></span><br>
                    		<span><span>num = scan.nextInt();</span></span><br>
                    		<span><span>hours = num/3600;</span></span><br>
                    		<span><span>minutes = (num - (3600 * hours)) / 60;</span></span><br>
                    		<span><span>seconds = (num - (3600 * hours) - (minutes * 60));</span></span><br>
                    		<span><span>System.out.println("Hours : " + hours + "\nMinutes : " + minutes + "\nSeconds : " + seconds);</span></span><br>
                    	<span>}</span><br>
                    	<span>public static void main(String args[]){</span><br>
                    		<span><span>SecondsToTime obj = new SecondsToTime();</span></span><br>
                    		<span><span>obj.TakeSeconds();</span></span><br>
                    	<span>}</span><br>
                    }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Program to convert seconds to hours, minutes, seconds<br>
                Enter value of seconds : 1430<br>
                Hours : 0<br>
                Minutes : 23<br>
                Seconds : 50</p>
            </div>
        </div>
    </div>
</body>
</html>