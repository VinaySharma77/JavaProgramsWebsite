<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 42</title>
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
            <h1>Java program to check vowel or consonant</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                class CheckVowelConsonant{<br>
                	<span>void CheckChar(){</span><br>
                		<span><span>System.out.println("Program to check character is Vowel or Consonant");</span></span><br>
                		<span><span>char ch;</span></span><br>
                		<span><span>Scanner scan = new Scanner(System.in);</span></span><br>
                		<span><span>System.out.print("Enter a character : ");</span></span><br>
                		<span><span>ch = scan.next().charAt(0);</span></span><br>
                		<span><span>if(ch == 'a' || ch == 'e' || ch == 'i' || ch == 'o' || ch == 'u' || ch == 'A' || ch == 'E' || ch == 'I' || ch == 'O' || ch == 'U'){</span></span><br>
                			<span><span><span>System.out.println("Entered character is Vowel");</span></span></span><br>
                		<span><span>}</span></span><br>
                		<span><span>else{</span></span><br>
                			<span><span><span>System.out.println("Entered character is Consonant");</span></span></span><br>
                		<span><span>}</span></span><br>
                	<span>}</span><br>
                	<span>public static void main(String args[]){</span><br>
                		<span><span>CheckVowelConsonant obj = new CheckVowelConsonant();</span></span><br>
                		<span><span>obj.CheckChar();</span></span><br>
                	<span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Program to check character is Vowel or Consonant<br>
                Enter a character : j<br>
                Entered character is Consonant</p>
            </div>
        </div>
    </div>
</body>
</html>