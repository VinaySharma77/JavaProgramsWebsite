<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 22</title>
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
            <h1>Write a Java program to count the number of even and odd elements in a given array</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Arrays;<br>
                class CountOddEvenElementsArray{<br>
                	<span>void countElements(){</span><br>
                		<span><span>int[] arr = {10,15,20,25,30};</span></span><br>
                		<span><span>int i, odd = 0, even = 0;</span></span><br>
                		<span><span>for(i = 0; i < arr.length; i++){</span></span><br>
                			<span><span><span>if(arr[i] % 2 == 0){</span></span></span><br>
                				<span><span><span><span>even++;</span></span></span></span><br>
                			<span><span><span>}</span></span></span><br>
                			<span><span><span>else{</span></span></span><br>
                				<span><span><span><span>odd++;</span></span></span></span><br>
                			<span><span><span>}</span></span></span><br>
                		<span><span>}</span></span><br>
                		<span><span>System.out.println("Elements of array : " + Arrays.toString(arr));</span></span><br>
                		<span><span>System.out.println("Total Odd Elements in array : " + odd + "\nTotal Even Elements in array : " + even);</span></span><br>
                	<span>}</span><br>
                	<span>public static void main(String args[]){</span><br>
                		<span><span>CountOddEvenElementsArray obj = new CountOddEvenElementsArray();</span></span><br>
                		<span><span>obj.countElements();</span></span><br>
                	<span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Elements of array : [10, 15, 20, 25, 30]<br>
                    Total Odd Elements in array : 2<br>
                    Total Even Elements in array : 3</p>
            </div>
        </div>
    </div>
</body>
</html>