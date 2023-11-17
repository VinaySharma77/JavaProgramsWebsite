<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 8</title>
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
            <h1>Write a Java program to convert a binary number to decimal number</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Scanner;<br>
                    class BinaryToDecimal{<br>
                    	<span>int binaryToDecimal(String binaryString){</span><br>
                    		<span><span>int decimal = 0;</span></span><br>
                    		<span><span>int binaryLength = binaryString.length();</span></span><br>
                    		<span><span>for(int i = 0; i < binaryLength; i++){</span></span><br>
                    			<span><span><span>char binaryDigit = binaryString.charAt(i);</span></span></span><br>
                    			<span><span><span>if(binaryDigit != '0' && binaryDigit != '1'){<br>
                    				<span><span><span><span>System.out.println("Invalid Binary Input !!");</span></span></span></span><br>
                    				<span><span><span><span>return -1;</span></span></span></span><br>
                    			<span><span><span>}</span></span></span><br>
                    			<span><span><span>int power = binaryLength - 1 - i;</span></span></span><br>
                    			<span><span><span>int digit = binaryDigit == '1' ? 1 : 0;</span></span></span><br>
                    			<span><span><span>decimal += digit * Math.pow(2, power);</span></span></span><br>
                    		<span><span>}</span></span><br>
                    		<span><span>return decimal;</span></span><br>
                    	<span>}</span><br>
                    	<span>void binaryToDecimal(){</span><br>
                    		<span><span>System.out.println("Program to convert binary number to decimal number");</span></span><br>
                    		<span><span>Scanner scan = new Scanner(System.in);</span></span><br>
                    		<span><span>System.out.print("Enter a binary number : ");</span></span><br>
                    		<span><span>String binaryString = scan.nextLine();</span></span><br>
                    		<span><span>int decimal = binaryToDecimal(binaryString);</span></span><br>
                    		<span><span>if(decimal != -1){</span></span><br>
                    			<span><span><span>System.out.println("Decimal Number is : " + decimal);</span></span></span><br>
                    		<span><span>}</span></span><br>
                    	<span>}</span><br>
                    	<span>public static void main(String args[]){</span><br>
                    		<span><span>BinaryToDecimal obj = new BinaryToDecimal();</span></span><br>
                    		<span><span>obj.binaryToDecimal();</span></span><br>
                    	<span>}</span><br>
                    }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Program to convert binary number to decimal number<br>
                Enter a binary number : 1010<br>
                Decimal Number is : 10</p>
            </div>
        </div>
    </div>
</body>
</html>