<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 67</title>
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
            <h1>Write a Java program that determines a student’s grade</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                class StudentGrade{<br>
                	<span>void CalcGrade(){</span><br>
                		<span><span>System.out.println("Program to calculate Student Grade");</span></span><br>
                		<span><span>Scanner scan = new Scanner(System.in);</span></span><br>
                		<span><span>System.out.print("Enter Student's Marks : ");</span></span><br>
                		<span><span>int num = scan.nextInt();</span></span><br>
                		<span><span>if(num >= 90){</span></span><br>
                			<span><span><span>System.out.print("Student Grade is : A");</span></span></span><br>
                		<span><span>}</span></span><br>
                		<span><span>else if(num >=80){</span></span><br>
                			<span><span><span>System.out.print("Student Grade is : B");</span></span></span><br>
                		<span><span>}</span></span><br>
                		<span><span>else if(num >=70){</span></span><br>
                			<span><span><span>System.out.print("Student Grade is : C");</span></span></span><br>
                		<span><span>}</span></span><br>
                		<span><span>else if(num >=60){</span></span><br>
                			<span><span><span>System.out.print("Student Grade is : D");</span></span></span><br>
                		<span><span>}</span></span><br>
                		<span><span>else if(num >=50){</span></span><br>
                			<span><span><span>System.out.print("Student Grade is : E");</span></span></span><br>
                		<span><span>}</span></span><br>
                		<span><span>else{</span></span><br>
                			<span><span><span>System.out.print("Student Grade is : F");</span></span></span><br>
                		<span><span>}</span></span><br>
                	<span>}</span><br>
                	<span>public static void main(String args[]){</span><br>
                		<span><span>StudentGrade obj = new StudentGrade();</span></span><br>
                		<span><span>obj.CalcGrade();</span></span><br>
                	<span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Program to calculate Student Grade<br>
                Enter Student's Marks : 92<br>
                Student Grade is : A</p>
            </div>
        </div>
    </div>
</body>
</html>