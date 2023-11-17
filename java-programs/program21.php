<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 21</title>
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
            <h1>Write a Java program to swap the first and last elements of an array and create a new array</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Arrays;<br>
                    class SwapArrayElements{<br>
                    	<span>void SwapArray(){</span><br>
                    		<span><span>System.out.println("Program to swap first and last elements of an array and create a new array");</span></span><br>
                    		<span><span>int[] arr = {20,30,40,50,60};</span></span><br>
                    		<span><span>int[] newarr = new int[arr.length];</span></span><br>
                    		<span><span>int temp, i;</span></span><br>
                    		<span><span>System.out.println("Original Array : " + Arrays.toString(arr));</span></span><br>
                    		<span><span>if(arr.length < 2){</span></span><br>
                    			<span><span><span>System.out.println("Swapping is not possible");</span></span></span><br>
                    		<span><span>}</span></span><br>
                    		<span><span>else{</span></span><br>
                    			<span><span><span>newarr[0] = arr[arr.length - 1];</span></span></span><br>
                    			<span><span><span>for(i = 1; i <= arr.length - 1; i++){</span></span></span><br>
                    				<span><span><span><span>newarr[i] = arr[i];</span></span></span></span><br>
                    			<span><span><span>}</span></span></span><br>
                    			<span><span><span>newarr[arr.length - 1] =  arr[0];</span></span></span><br>
                    			<span><span><span>System.out.println("Swapped Array : " + Arrays.toString(newarr));</span></span></span><br>
                    		<span><span>}</span></span><br>
                    	<span>}</span><br>
                    	<span>public static void main(String args[]){</span><br>
                    		<span><span>SwapArrayElements obj = new SwapArrayElements();</span></span><br>
                    		<span><span>obj.SwapArray();</span></span><br>
                    	<span>}</span><br>
                    }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Program to swap first and last elements of an array and create a new array<br>
                Original Array : [20, 30, 40, 50, 60]<br>
                Swapped Array : [60, 30, 40, 50, 20]</p>
            </div>
        </div>
    </div>
</body>
</html>