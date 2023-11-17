<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 137</title>
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
            <h1>Write a Java program to convert Roman number to an integer number</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                public class RomanToInteger{<br>
                    <span>public static void main(String[] args) {</span><br>
                        <span><span>Scanner scanner = new Scanner(System.in);</span></span><br>
                        <span><span>System.out.print("Enter a Roman numeral: ");</span></span><br>
                        <span><span>String romanNumeral = scanner.nextLine().toUpperCase();</span></span><br>
                        <span><span>int result = 0;</span></span><br>
                        <span><span>for (int i = 0; i < romanNumeral.length(); i++) {</span></span><br>
                            <span><span><span>int value = getValue(romanNumeral.charAt(i));</span></span></span><br>
                            <span><span><span>if (i < romanNumeral.length() - 1) {</span></span></span><br>
                                <span><span><span><span>int nextValue = getValue(romanNumeral.charAt(i + 1));</span></span></span></span><br>
                                <span><span><span><span>if (value < nextValue) {</span></span></span></span><br>
                                    <span><span><span><span><span>result += (nextValue - value);</span></span></span></span></span><br>
                                    <span><span><span><span><span>i++;</span></span></span></span></span><br>
                                    <span><span><span><span><span>continue;</span></span></span></span></span><br>
                                <span><span><span><span>}</span></span></span></span><br>
                            <span><span><span>}</span></span></span><br>
                            <span><span><span>result += value;</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>System.out.println("Integer equivalent: " + result);</span></span><br>
                    <span>}</span><br>
                    <span>private static int getValue(char romanDigit) {</span><br>
                        <span><span>switch (romanDigit) {</span></span><br>
                            <span><span><span>case 'I': return 1;</span></span></span><br>
                            <span><span><span>case 'V': return 5;</span></span></span><br>
                            <span><span><span>case 'X': return 10;</span></span></span><br>
                            <span><span><span>case 'L': return 50;</span></span></span><br>
                            <span><span><span>case 'C': return 100;</span></span></span><br>
                            <span><span><span>case 'D': return 500;</span></span></span><br>
                            <span><span><span>case 'M': return 1000;</span></span></span><br>
                            <span><span><span>default: return 0;</span></span></span><br>
                        <span><span>}</span></span><br>
                    <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Enter a Roman numeral: XV<br>
                Integer equivalent: 15</p>
            </div>
        </div>
    </div>
</body>
</html>