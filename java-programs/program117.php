<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 117</title>
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
            <h1>Write a java program to count total number of notes in entered amount using loop</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                public class NoteCounter{<br>
                    <span>public static void main(String[] args) {</span><br>
                        <span><span>Scanner scanner = new Scanner(System.in);</span></span><br>
                        <span><span>System.out.print("Enter the amount: ");</span></span><br>
                        <span><span>int amount = scanner.nextInt();</span></span><br>
                        <span><span>int[] denominations = { 1000, 500, 100, 50, 20, 10, 5, 2, 1 };</span></span><br>
                        <span><span>int[] notesCount = new int[denominations.length];</span></span><br>
                        <span><span>for (int i = 0; i < denominations.length; i++) {</span></span><br>
                            <span><span><span>if (amount >= denominations[i]) {</span></span></span><br>
                                <span><span><span><span>notesCount[i] = amount / denominations[i];</span></span></span></span><br>
                                <span><span><span><span>amount = amount % denominations[i];</span></span></span></span><br>
                            <span><span><span>}</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>System.out.println("Total number of notes:");</span></span><br>
                        <span><span>for (int i = 0; i < denominations.length; i++) {</span></span><br>
                            <span><span><span>if (notesCount[i] > 0) {</span></span></span><br>
                                <span><span><span><span>System.out.println(denominations[i] + " : " + notesCount[i]);</span></span></span></span><br>
                            <span><span><span>}</span></span></span><br>
                        <span><span>}</span></span><br>
                    <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Enter the amount: 2500<br>
                Total number of notes:<br>
                1000 : 2<br>
                500 : 1</p>
            </div>
        </div>
    </div>
</body>
</html>