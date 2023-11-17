<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 20</title>
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
            <h1>Write a Java program to compute the sum of the first 100 prime numbers</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>class SumOfPrimeNumbers{<br>
                	<span>public static void main(String args[]){</span><br>
                		<span><span>int i, j, sum = 0;</span></span><br>
                		<span><span>for(i = 2; i <=100; i++){</span></span><br>
                			<span><span><span>boolean isPrime = true;</span></span></span><br>
                			<span><span><span>for(j = 2; j <= Math.sqrt(i); j++){</span></span></span><br>
                				<span><span><span><span>if(i % j == 0){</span></span></span></span><br>
                					<span><span><span><span><span>isPrime = false;</span></span></span></span></span><br>
                					<span><span><span><span><span>break;</span></span></span></span></span><br>
                				<span><span><span><span>}</span></span></span></span><br>
                			<span><span><span>}</span></span></span><br>
                			<span><span><span>if(isPrime){</span></span></span><br>
                				<span><span><span><span>sum += i;</span></span></span></span><br>
                				<span><span><span><span>System.out.println("Prime number is : " + i) ;</span></span></span></span><br>
                			<span><span><span>}</span></span></span><br>
                		<span><span>}</span></span><br>
                		<span><span>System.out.println("Sum of Prime numbers is : " + sum);</span></span><br>
                	<span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Prime number is : 2<br>
                    Prime number is : 3<br>
                    Prime number is : 5<br>
                    Prime number is : 7<br>
                    Prime number is : 11<br>
                    Prime number is : 13<br>
                    Prime number is : 17<br>
                    Prime number is : 19<br>
                    Prime number is : 23<br>
                    Prime number is : 29<br>
                    Prime number is : 31<br>
                    Prime number is : 37<br>
                    Prime number is : 41<br>
                    Prime number is : 43<br>
                    Prime number is : 47<br>
                    Prime number is : 53<br>
                    Prime number is : 59<br>
                    Prime number is : 61<br>
                    Prime number is : 67<br>
                    Prime number is : 71<br>
                    Prime number is : 73<br>
                    Prime number is : 79<br>
                    Prime number is : 83<br>
                    Prime number is : 89<br>
                    Prime number is : 97<br>
                    Sum of Prime numbers is : 1060</p>
            </div>
        </div>
    </div>
</body>
</html>