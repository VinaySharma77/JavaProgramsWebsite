<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 41</title>
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
            <h1>Java program to calculate average marks</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                class AverageMarks{<br>
                	<span>void CalcAvg(){</span><br>
                		<span><span>System.out.println("Program to calculate Average Marks");</span></span><br>
                		<span><span>int size, i, sum = 0;</span></span><br>
                		<span><span>double average = 0;</span></span><br>
                		<span><span>int[] marks;</span></span><br>
                		<span><span>Scanner scan = new Scanner(System.in);</span></span><br>
                		<span><span>System.out.print("How many marks you want to enter? : ");</span></span><br>
                		<span><span>size = scan.nextInt();</span></span><br>
                		<span><span>marks = new int[size];</span></span><br>
                		<span><span>for(i = 0; i < size; i++){</span></span><br>
                			<span><span><span>System.out.print("Enter value of marks : ");</span></span></span><br>
                			<span><span><span>marks[i] = scan.nextInt();</span></span></span><br>
                			<span><span><span>sum += marks[i];</span></span></span><br>
                		<span><span>}</span></span><br>
                		<span><span>if(size > 0){</span></span><br>
                			<span><span><span>average = (double) sum / size;</span></span></span><br>
                			<span><span><span>System.out.println("Average Marks are : " + average);</span></span></span><br>
                		<span><span>}</span></span><br>
                		<span><span>else{</span></span><br>
                			<span><span><span>System.out.println("No Marks are entered. Cannot calculate average ");</span></span></span><br>
                		<span><span>}</span></span><br>
                	<span>}</span><br>
                	<span>public static void main(String args[]){</span><br>
                		<span><span>AverageMarks obj = new AverageMarks();</span></span><br>
                		<span><span>obj.CalcAvg();</span></span><br>
                	<span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>How many marks you want to enter? : 4<br>
                Enter value of marks : 12<br>
                Enter value of marks : 25<br>
                Enter value of marks : 63<br>
                Enter value of marks : 47<br>
                Average Marks are : 36.75</p>
            </div>
        </div>
    </div>
</body>
</html>