<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 5</title>
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
            <h1>Write a Java program that takes five numbers as input to calculate and print the average of the numbers</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                class NumbersAverage{<br>
	                <span>void average(){</span><br>
		                <span><span>int num, sum=0, i, average;</span></span><br>
		                <span><span>System.out.println("Program to calculate average of five numbers");</span></span><br>
		                <span><span>Scanner scan = new Scanner(System.in);</span></span><br>
		                <span><span>for(i=1; i<=5; i++){</span></span><br>
			                <span><span><span>System.out.print("Enter number " + i + " : ");</span></span></span><br>
			                <span><span><span>num = scan.nextInt();</span></span></span><br>
			                <span><span><span>sum += num;</span></span></span><br>
		                <span><span>}</span></span><br>
		                <span><span>average = sum/5;</span></span><br>
		                <span><span>System.out.println("Average of Five Numbers is : " + average);</span></span><br>
	                <span>}</span><br>
	                <span>public static void main(String args[]){</span><br>
		                <span><span>NumbersAverage obj = new NumbersAverage();</span></span><br>
		                <span><span>obj.average();</span></span><br>
	                <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Program to calculate average of five numbers<br>
                    Enter number 1 : 5<br>
                    Enter number 2 : 5<br>
                    Enter number 3 : 5<br>
                    Enter number 4 : 5<br>
                    Enter number 5 : 5<br>
                    Average of Five Numbers is : 5
                    </p>
            </div>
        </div>
    </div>
</body>
</html>