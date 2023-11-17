<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Program 9</title>
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
            <h1>Write a Java program to check whether Java is installed on your computer or not</h1>
            <div class="code">
                <h3>Code:-</h3>
                <p>class CheckJavaInstallationf{<br>
                	<span>public static void main(String args[]){</span><br>
                		<span><span>String javaVersion = System.getProperty("java.version");</span></span><br>
                		<span><span>if(javaVersion != null){</span></span><br>
                			<span><span><span>System.out.println("Java is installed, version : " + javaVersion);</span></span></span><br>
                		<span><span>}</span></span><br>
                		<span><span>else{</span></span><br>
                			<span><span><span>System.out.println("Java is not installed on your computer !!");</span></span></span><br>
                		<span><span>}</span></span><br>
                	<span>}</span><br>
                }</p>
            </div>
            <div class="output">
                <h3>Output:-</h3>
                <p>Java is installed, version : 20.0.2</p>
            </div>
        </div>
    </div>
</body>
</html>