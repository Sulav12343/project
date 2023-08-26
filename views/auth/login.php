<?php
$errors = array(); 

if(isset($_POST['login'])){
    if(empty($_POST['name'])){
        $errors[] = "Name is required"; // Append an error message to the errors array
    }
    
    if(empty($errors)) {
echo "Noice";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="content">
            <div class="text-center">
                <h2>Login</h2>
                <?php
            // Display errors if there are any
            if (!empty($errors)) {
                echo "<small style='color: red;'>Errors:<br>";
                foreach ($errors as $error) {
                    echo "- " . $error . "<br>";
                }
                echo "</small>";
            }
            ?>
            </div>
            <form method="post" action="">
                <label for=""></label>
                <input type="text" name="name" placeholder="Name">
                <!-- Add more input fields for the login form -->
                <input type="submit" name="login" value="Login">
            </form>
            
        </div>
    </div>
</body>

</html>