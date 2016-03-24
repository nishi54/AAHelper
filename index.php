<!DOCTYPE html>
<?php 
    session_start();

    // Connect to the database
    include_once 'includes/db_connect.php';

    // Load functions
    require_once 'includes/functions.php';

    if (loggedin()) {
        location("header: form.php");
    }

    // Login using the connection set up in db_connect.php
    login($connection);


    // set error messages to null if no errors
    $usernameErr = "";
    $passwordErr = "";
    
    if (isset($_SESSION['usernameErr'])) {
        $usernameErr = $_SESSION['usernameErr'];
        echo "got usernameErr, now clearing session.";
        unset($_SESSION['usernameErr']);
    }
    if (isset($_SESSION['passwordErr'])) {
        $passwordErr = $_SESSION['passwordErr'];
        echo "got passwordErr, now clearing session.";
        unset($_SESSION['passwordErr']);
    }

    echo "<pre>\n";   print_r($_SESSION);   echo "</pre>\n"; 
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Advising Helper 1.0</title>
        <link rel="stylesheet" type="text/css" href="css/main.css"/>
        <link href='https://fonts.googleapis.com/css?family=Lato:400,100,300,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <header>
            <h1>Advising Helper</h1>
            <div id="login" class ="form">
                <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" accept-charset='UTF-8'>
                    <p><input type="text" class="input" name="user" placeholder="Username" required></p>
                    <p><input type="password" class="input" name="password" placeholder="Password" required></p>
                    <p><input type="submit" class="go" value="Login"></p>
                </form>
                <?php echo $usernameErr; ?>
                <?php echo $passwordErr; ?>
               </div>
            <p>If you do not have an account yet, <a class="link" href="onboard.php">click here</a></p>
        </header>
        
        <!-- include footer -->
        <?php include 'footer.php'; 
            $_SESSION
        ?>

    </body>   
</html>
