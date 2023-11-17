<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 102</title>
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
            <h1>Write a Java Program to Sort Names in an Alphabetical Order</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.util.Arrays;<br>
                import java.util.Scanner;<br>
                public class ArrayNameSorter{<br>
                    <span>public static void main(String[] args) {</span><br>
                        <span><span>Scanner scanner = new Scanner(System.in);</span></span><br>
                        <span><span>System.out.print("Enter the number of names: ");</span></span><br>
                        <span><span>int n = scanner.nextInt();</span></span><br>
                        <span><span>scanner.nextLine();</span></span><br>
                        <span><span>String[] names = new String[n];</span></span><br>
                        <span><span>for (int i = 0; i < n; i++) {</span></span><br>
                            <span><span><span>System.out.print("Enter name " + (i + 1) + ": ");</span></span></span><br>
                            <span><span><span>names[i] = scanner.nextLine();</span></span></span><br>
                        <span><span>}</span></span><br>
                        <span><span>Arrays.sort(names);</span></span><br>
                        <span><span>System.out.println("Sorted Names:");</span></span><br>
                        <span><span>for (String name : names) {</span></span><br>
                            <span><span><span>System.out.println(name);</span></span></span><br>
                        <span><span>}</span></span><br>
                    <span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Enter the number of names: 5<br>
                Enter name 1: vinay<br>
                Enter name 2: aryan<br>
                Enter name 3: rankush<br>
                Enter name 4: ajay<br>
                Enter name 5: vishnu<br>
                Sorted Names:<br>
                ajay<br>
                aryan<br>
                rankush<br>
                vinay<br>
                vishnu</p>
            </div>
        </div>
    </div>
</body>
</html>