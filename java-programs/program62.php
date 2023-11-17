<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 62</title>
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
            <h1>Write a Java program to display the multiplication table of a given integer</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                class MultiplicationTable{<br>
                    <span>void CalcTable(){</span><br>
                        <span><span>System.out.println("Program to Print Multiplication Table of a Number");</span></span><br>
                        <span><span>Scanner scan = new Scanner(System.in);</span></span><br>
                        <span><span>System.out.print("Enter a number : ");</span></span><br>
                        <span><span>int num = scan.nextInt();</span></span><br>
                        <span><span>System.out.println("Multiplication Table of " + num + " is : ");</span></span><br>
                        <span><span>int i;</span></span><br>
                        <span><span>for(i = 1; i <= 10; i++){</span></span><br>
                            <span><span><span>System.out.println(num + " * " + i + " = " + (num*i));</span></span></span><br>
                        <span><span>}</span></span><br>
                    <span>}</span><br>
                    <span>public static void main(String args[]){</span><br>
                        <span><span>MultiplicationTable obj = new MultiplicationTable();</span></span><br>
                        <span><span>obj.CalcTable();</span></span><br>
                    <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Program to Print Multiplication Table of a Number<br>
                Enter a number : 5<br>
                Multiplication Table of 5 is :<br>
                5 * 1 = 5<br>
                5 * 2 = 10<br>
                5 * 3 = 15<br>
                5 * 4 = 20<br>
                5 * 5 = 25<br>
                5 * 6 = 30<br>
                5 * 7 = 35<br>
                5 * 8 = 40<br>
                5 * 9 = 45<br>
                5 * 10 = 50</p>
            </div>
        </div>
    </div>
</body>
</html>