<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 105</title>
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
            <h1>Write a Java Program to Accept the Marks of a Student and find Total Marks and Percentage</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                public class CalculatePercentage{<br>
                    <span>public static void main(String[] args) {</span><br>
                        <span><span>Scanner scanner = new Scanner(System.in);</span></span><br>
                        <span><span>System.out.print("Enter marks for Subject 1: ");</span></span><br>
                        <span><span>int subject1 = scanner.nextInt();</span></span><br>
                        <span><span>System.out.print("Enter marks for Subject 2: ");</span></span><br>
                        <span><span>int subject2 = scanner.nextInt();</span></span><br>
                        <span><span>System.out.print("Enter marks for Subject 3: ");</span></span><br>
                        <span><span>int subject3 = scanner.nextInt();</span></span><br>
                        <span><span>int totalMarks = subject1 + subject2 + subject3;</span></span><br>
                        <span><span>double percentage = (double) totalMarks / 3; // Assuming each subject has equal weight</span></span><br>
                        <span><span>System.out.println("Total Marks: " + totalMarks);</span></span><br>
                        <span><span>System.out.println("Percentage: " + percentage + "%");</span></span><br>
                    <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Enter marks for Subject 1: 65<br>
                Enter marks for Subject 2: 86<br>
                Enter marks for Subject 3: 74<br>
                Total Marks: 225<br>
                Percentage: 75.0%</p>
            </div>
        </div>
    </div>
</body>
</html>