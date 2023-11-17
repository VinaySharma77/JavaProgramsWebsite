<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 76</title>
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
            <h1>Write a java program to print current date and time in the specified format</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>import java.text.SimpleDateFormat;<br>
                import java.util.Date;<br>
                class CurrentDateTime{<br>
                	<span>public static void main(String args[]){</span><br>
                		<span><span>SimpleDateFormat dateFormat = new SimpleDateFormat("yyyy-MM-dd HH:mm:ss");</span></span><br>
                		<span><span>Date currentDate = new Date();</span></span><br>
                		<span><span>String formattedDateTime = dateFormat.format(currentDate);</span></span><br>
                		<span><span>System.out.println("Current Date and Time : " + formattedDateTime);</span></span><br>
                	<span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Current Date and Time : 2023-11-16 14:39:50</p>
            </div>
        </div>
    </div>
</body>
</html>